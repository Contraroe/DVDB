<?php include 'db_config.php'?>
<?php include 'db_connect.php'?>
<?php
//Get data in local variable
$titel=htmlentities(addslashes($_POST['titel']));
$genre=htmlentities(addslashes($_POST['genre']));
$regiseur=htmlentities(addslashes($_POST['regiseur']));
$acteur=htmlentities(addslashes($_POST['acteur']));
$jaar=htmlentities(addslashes($_POST['jaar']));
$inhoud=htmlentities(addslashes($_POST['inhoud']));
$lener=htmlentities(addslashes($_POST['lener']));
$uitgeleend=htmlentities(addslashes((isset($_POST['uitgeleend']) ? 1 : 0)));

$file_name = $HTTP_POST_FILES['ufile']['name'];

// random 4 digit to add to our file name
// some people use date and time in stead of random digit
$random_digit=rand(0000,9999);

//combine random digit to you file name to create new file name
//use dot (.) to combile these two variables

$new_file_name=$random_digit.$file_name;

//set where you want to store files
//in this example we keep file in folder upload
//$new_file_name = new upload file name
//for example upload file name cartoon.gif . $path will be upload/cartoon.gif
$path= "../beeld/".$new_file_name;
if($ufile !=none)
{
if(copy($HTTP_POST_FILES['ufile']['tmp_name'], $path))
{
$query="insert into movies(titel,genre,regiseur,acteur,jaar,inhoud,beeld,lener,uitgeleend) values('$titel','$genre','$regiseur','$acteur','$jaar','$inhoud','$new_file_name','$lener','$uitgeleend')";
mysql_query($query)  or die(mysql_error());
header ('Location: ../edit.php');
}
else
{
echo "Error";
}
}


?> 
