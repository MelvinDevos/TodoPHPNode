<?php

$serverNaam = "localhost";
$databaseGebruiker = "root";
$databaseWachtwoord = "";
$databaseNaam = "TODO_webdev";

$link = mysqli_connect($serverNaam, $databaseGebruiker, $databaseWachtwoord, $databaseNaam)
    or die("Connectie met database foutgelopen: " . mysqli_connect_error());

function checkInput($data)
{
    global $link;
    //White spaces wissen (vooran en achteraan);
    $data = trim($data);
    //Speciale tekens omzeten naar de HTML-versie
    //Bijvoorbeeld: < is gelijk aan $lt
    $data = htmlspecialchars($data);
    //MySQL- injection vermijden (door te 'escapen')
    $data = mysqli_real_escape_string($link, $data);

    return $data;
}