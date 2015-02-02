<?php include 'db_config.php'?>
<?php include 'db_connect.php'?>
<?php
 

//Get data in local variable

$username=htmlentities(addslashes($_POST['regname']));
$password=htmlentities(addslashes($_POST['regpass']));



// check for null values

if ($username==""  or $password=="")
	
echo "All fields must be entered, hit back button and re-enter information";

else{

$query="insert into user(user,pass) values('$username','$password')";

mysql_query($query)  or die(mysql_error());

header('Location: ../index.php');

}
 
?>






