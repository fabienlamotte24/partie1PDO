<?php
//Instanciation de la classe clients pour ce controller
$mClientList = NEW clients();
//Déclaration d'une variable qui contiendra les données clients de la méthode mLetter()
$mClientName = $mClientList->mLetter();
?>
