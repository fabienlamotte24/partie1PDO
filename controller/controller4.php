<?php
//Instanciation de la class clients dans ce controller
$cardFidelity = NEW clients();
//Déclaration d'une variable qui contiendra les données de la méthode getMembers()
$cardMembers = $cardFidelity->getMembers();
?>