<?php include 'db_config.php' ?>
<?php include 'db_connect.php' ?>
<?php
$username=htmlentities(addslashes($_POST['username']));
$password=htmlentities(addslashes($_POST['password']));
$user=mysql_real_escape_string($username);
$pass=mysql_real_escape_string($password);
$query=mysql_query("SELECT * FROM user where user='$user' AND pass='$pass'");
$count=mysql_num_rows($query);
$id=mysql_query("SELECT id FROM user where user='$user' AND pass='$pass'");
if($count==1)
{
    if($user=='Contraroe' || $user=='Bert' )
    {
    header ('Location:../edit.php');
    exit;
    }
    else
    {
    header ('Location:../search.php');
    exit;
    }
}
else
    {
        echo 'Username or password is incorrect';
}
?>
