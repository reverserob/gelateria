<?php

// il get mi porta i valori  dei recor presenti nei link della pagina SELECT nei campi del form in questa pagina
$id=$_GET['id_certificazione'];
$cert=$_GET['nome_certificazione'];
$data=$_GET['data_certificazione'];
$descr=$_GET['descrizione_certificazione'];
$logo=$_GET['logo_certificazione'];

//definizione condizione post
if($_POST)
{
    // collegamento al db
    // nome di host
    $host = "localhost"; //localhost

// nome del database
    $db = "sitogelateria"; //gelateria

// username dell'utente in connessione
    $user = "root"; //ice

// password dell'utente
    $password = "root"; //cream


    $connessione = new PDO("mysql:host=$host; dbname=$db", $user, $password);

    //variabili prese dopo il submit tra virgolette ci sono gli ID delle variabili nel form


    $idn= (isset($_POST['idn'])) ? $_POST['idn'] : '';
    $certn = (isset($_POST['certn'])) ? $_POST['certn'] : '';
    $datan = (isset($_POST['datan'])) ? $_POST['datan'] : '';
    $descrn(isset($_POST['descrn'])) ? $_POST['descrn'] : '';
    $logon(isset($_POST['logon'])) ? $_POST['logon'] : '';

// modifica del record nel db con update
    $sql= $connessione->exec("UPDATE certificazione
    							SET nome_certificazione='$certn' , data_certificazione='$datan' , descrizione_certificazione='$descrn', logo_certificazione='$logon'
                              	WHERE id_certificazione='$id'
                               ");


    //stampo l'avvenuto aggiornamento
    echo "<br><br> Aggiornamento Record Effettuato <a href='certificazione_select.php'>Back </a>";

}
else
{

?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Record PDO</title>
    <style>
        body{
            font-family: Georgia, Utopia, Palatino, ‘Palatino Linotype’, serif;
            text-align: center;

        }

    </style>
</head>
<body>
<h1>Update Certificazione</h1>
<form method="post" action="<?php $_PHP_SELF ?>">
    <table>
        <tr>
            <td> IDcertificazione</td>
            <td> Certificazione</td>
            <td> Data </td>
            <td> Descrizione </td>
            <td> Logo </td>
            <td>Action</td>
        </tr>
        <tr>
            <td><input type="text" name="<?php  echo $id ?>" value="<?php  echo $id ?>"> </td>
            <td><input type="text" name="certn" value="<?php  echo $cert ?>"> </td>
            <td><input type="text" name="datan" value="<?php  echo $data ?>"> </td>
            <td><input type="text" name="descrn" value="<?php  echo $descr ?>"> </td>
            <td><input type="text" name="<?php  echo $logo ?>" value="<?php  echo $logo ?>">
                <input name="logon" type="file" id="foto" >
            </td>

            <td>
                <input type="submit" name"update" value="Update">
                <a href="certificazione_select.php">BACK</a>
            </td>
        </tr>

    </table>
</form>
<?php
}
?>
</body>
</html>