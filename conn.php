<?php
/**
 * Created by PhpStorm.
 * User: robertarandazzo
 * Date: 21/05/15
 * Time: 12:36
 */
// nome di host
$host = "localhost"; //localhost

// nome del database
$db = "sitogelateria";

// username dell'utente in connessione
$user = "root"; //ice

// password dell'utente
$password = "root"; //cream


$connessione = new PDO("mysql:host=$host; dbname=$db", $user, $password);
