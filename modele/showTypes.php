<?php
/**
 * Création de la classe showTypes
 */
class showTypes{
    //Liste des attributs
    private $connexion;
    public $id;
    public $type;
    /**
     * Méthode magique constructeur
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
    /**
     * Méthode getShowTypesList
     */
    public function getShowTypesList(){
        $PDOResult = $this->connexion->query('
            SELECT 
                `type` 
            FROM 
                `showTypes`');
        $isObjectResult = array();
        //Condition pour vérifier la validité de la requête traitée
        if(is_object($PDOResult)){
            $isObjectResult = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        //On retourne le résultat
        return $isObjectResult;
    }
    /**
     * Méthode magique destructeur
     */
    public function __destruct(){
        ;
    }
}
?>
