<?php
//Création de la class shows
class shows{
    //Liste des attributs
    private $connexion;
    public $id;
    public $title;
    public $performer;
    public $date;
    public $showTypesId;
    public $firstGenresId;
    public $secondGenreId;
    public $duration;
    public $startTime;
    /**
     * Méthode constructeur
     */
    public function __construct(){
        //Nous testons la bonne connexion à la base de donnée
        try{
            $this->connexion = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'fabienlamotte', 'Platinum#00');
        }
        //Si une erreur est captée, elle l'affiche au lieu de connecter la base de donnée
        catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function showList(){
        $PDOResult = $this->connexion->query('
            SELECT 
                `title`, `performer`, DATE_FORMAT(`date`, "%d / %m / %Y") AS `eventDay`, HOUR(`startTime`) AS `hour` 
            FROM 
                `shows`
            ORDER BY 
                `title` ASC');
        $isObjectResult = array();
        //Condition pour vérifier la validité de la requête traitée
        if(is_object($PDOResult)){
            $isObjectResult = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        //On retourne le résultat
        return $isObjectResult;
    }
    /**
     * Méthode destructeur
     */
    public function __destruct(){
        ;
    }
}



?>