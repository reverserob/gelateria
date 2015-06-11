<?php
/**
 * Created by PhpStorm.
 * User: robertarandazzo
 * Date: 20/05/15
 * Time: 20:03
 */

include("conn.php");



$id=$_GET['id'];


$sql= $connessione->exec(" DELETE FROM certificazione WHERE id_certificazione=".$id);

echo"<br><br> Record: ".$id."  - Eliminato! <br> <a href='certificazione_select.php'>Back </a> " ;