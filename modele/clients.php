<?php

/**
 * Création de la classe clients
 */
class clients {

    //Liste des attributs
    private $connexion;
    public $id;
    public $lastName;
    public $firstName;
    public $birthDate;
    public $card;
    public $cardNumber;

    /**
     * Méthode construct
     */
    public function __construct() {
        //On test les erreurs avec le try/catch 
        //Si tout est bon, on est connecté à la base de donnée
        try {
            $this->connexion = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'fabienlamotte', 'Platinum#00');
        }
        //Autrement, un message d'erreur est affiché
        catch (Exception $e) {
            die($e->getMessage());
        }
    }

    /**
     * Méthode getClientsList pour récupérer les noms et prénoms de tous les clients
     * @return type
     */
    public function getClientsList() {
        $PDOResult = $this->connexion->query('
            SELECT 
                `lastName`, `firstName` 
            FROM 
                `clients`');
        $isObjectResult = array();
        //Condition pour vérifier la validité de la requête traitée
        if (is_object($PDOResult)) {
            $isObjectResult = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        //On retourne le résultat
        return $isObjectResult;
    }

    /**
     * Méthode get20FirstClient pour récupérer les noms et prénoms des 20 premiers clients
     * @return string
     */
    public function get20FirstClient() {
        $PDOResult = $this->connexion->query('
            SELECT 
                `id`, `lastName`, `firstName` 
            FROM 
                `clients` WHERE `id` <= 20 ');
        $isObjectResult = array();
        //Condition pour vérifier la validité de la requête traitée
        if (is_object($PDOResult)) {
            $isObjectResult = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        //On retourne le résultat
        return $isObjectResult;
    }

    /**
     * Création méthode getMembers pour récupérer les clients qui ont une carte de fidélité
     */
    public function getMembers() {
        $PDOResult = $this->connexion->query('
            SELECT 
                `clt`.`lastName`, `clt`.`firstName` 
            FROM 
                `clients` AS `clt` 
            LEFT JOIN 
                `cards` AS `cd` ON `clt`.`cardNumber` = `cd`.`cardNumber` 
            LEFT JOIN 
                `cardTypes` AS `ct` ON `cd`.`cardTypesId` = `ct`.`id`
            WHERE
                `ct`.`id` = 1;
            ');
        $isObjectResult = array();
        //Condition pour vérifier la validité de la requête traitée
        if (is_object($PDOResult)) {
            $isObjectResult = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        //On retourne le résultat
        return $isObjectResult;
    }

    /**
     * Création Méthode mLetter pour récupérer les clients dont le nom commence à "M"
     */
    public function mLetter() {
        $PDOResult = $this->connexion->query('
            SELECT
                `lastName`,`firstName` 
            FROM 
                `clients` WHERE `lastName` 
            LIKE 
                "M%" 
            ORDER BY 
                `lastName` ASC');
        $isObjectResult = array();
        //Condition pour vérifier la validité de la requête traitée
        if (is_object($PDOResult)) {
            $isObjectResult = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        //On retourne le résultat
        return $isObjectResult;
    }

    /**
     * Création Méthode show() pour récupérer les spectacles, 
     * les artistes, la date et l'heure par ordre alphabétique 
     * des titres de spectacle
     */
    public function show() {
        $PDOResult = $this->connexion->query('
                SELECT 
                    `title`, `performer`, `date`, `startTime` 
                FROM 
                    `shows` 
                ORDER BY 
                    `title` ASC');
        $isObjectResult = array();
        //Condition pour vérifier la validité de la requête traitée
        if (is_object($PDOResult)) {
            $isObjectResult = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        //On retourne le résultat
        return $isObjectResult;
    }

    /**
     * Méthode presentationClient() pour récupérer nom, prénom,
     *  date de naissance, carte de fidélité et numéro de carte de fidélité du client
     */
    public function presentationClient() {
        $PDOResult = $this->connexion->query('
            SELECT 
                `clt`.`lastName`, `clt`.`firstName`, DATE_FORMAT(`clt`.`birthDate`, "%d / %m / %Y") AS `bd`, `clt`.`card`, `clt`.`cardNumber`, `cd`.`cardTypesId` 
            FROM 
                `clients` AS `clt` 
            LEFT JOIN 
                `cards` AS `cd` ON `clt`.`cardNumber` = `cd`.`cardNumber` 
            LEFT JOIN 
                `cardTypes` AS `ct` ON `cd`.`cardTypesId` = `ct`.`id`;');
        $isObjectResult = array();
        //Condition pour vérifier la validité de la requête traitée
        if (is_object($PDOResult)) {
            $isObjectResult = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        //On retourne le résultat
        return $isObjectResult;
    }

    /**
     * Méthode destruct
     */
    public function __destruct() {
        ;
    }

}
?>