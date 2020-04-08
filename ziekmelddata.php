<?php
$host = "localhost";
    $dbnaam = "ziekmelden";
    $gebruiker = "root";
    $wachtwoord = "";
				    $con = new PDO("mysql:host=$host;dbname=$dbnaam","$gebruiker","$wachtwoord") or die("verbinding mislukt!");


  
    ?> 