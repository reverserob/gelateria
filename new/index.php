<?php
/**
 * Created by PhpStorm.
 * User: robertarandazzo
 * Date: 21/05/15
 * Time: 13:18
 */
include("conn.php");
include'header.php';


?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style_news.css">
</head>
<body>


<div id="sect">
<h1 id="titolo" class="h1 col-lg-12 col-md-12 col-sm-11 col-xs-4 col-xs-offset-8 col-xs-pull-8">Tutte Le News! </h1>
    <section class="col-lg-12 col-md-12 col-sm-11 col-xs-4 col-xs-offset-8 col-xs-pull-8">
        <?php



$sql=('SELECT * FROM news ORDER BY data_news');

foreach (($connessione->query($sql)) as $row){
    //stampa tutto il DB riga per riga
    echo '<h3>' . $row['titolo'] . '</h3>
                     <div>' . $row['data_news'] . '</div>
                     <div>' . $row['immagine'] . '</div>
                     <div>' . $row['testo'] . '</div>';

}
// LINK delete

//echo '<td><a href="news_delete.php?delete=delete
  //          &idnews=' . $row['idnews'] .
    //'&titolo=' . $row['titolo'] .
    //'&data_news=' . $row['data_news'] .
    //'&testo=' . $row ['testo'].
    //'&immagine=' . $row ['immagine'] .
   // '"> DELETE</a></td></tr> ';

?>


    </section>
</div>
</body>
</html>
<?php
include'footer.html';
