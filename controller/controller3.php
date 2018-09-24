<?php
//Instanciation de la classe clients dans ce controller
    $clients = NEW clients();
    //Que nous englobons dans une variable pour l'exploiter dans une vue avec la méthode get20FirstClient()
    $FirstClients = $clients->get20FirstClient();
?>
