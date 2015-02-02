<?php include 'db_config.php'?>
<?php include 'db_connect.php'?>
<?php
$id=htmlentities(addslashes($_POST['id2']));
$titel2=htmlentities(addslashes($_POST['titel2']));
$regiseur2=htmlentities(addslashes($_POST['regiseur2']));
$acteur2=htmlentities(addslashes($_POST['acteur2']));
$jaar2=htmlentities(addslashes($_POST['jaar2']));
$lener2=htmlentities(addslashes($_POST['lener2']));
$uitgeleend2=htmlentities(addslashes((isset($_POST['uitgeleend2']) ? 1 : 0)));
$query="UPDATE movies SET titel='$titel2', regiseur='$regiseur2', acteur='$acteur2', jaar='$jaar2', lener='$lener2', uitgeleend='$uitgeleend2' WHERE id='$id'";
mysql_query($query)  or die(mysql_error());
header('Location: ../edit.php'); 
?>
