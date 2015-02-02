
<div id='detaildata'>

<?php include 'db_config.php'?>
<?php include 'db_connect.php'?>

<?php

$find = $_POST['find'];

 //Now we search for our search term, in the field the user specified
 $data = mysql_query("SELECT * FROM movies WHERE titel LIKE'%$find%' LIMIT 1");

 ?>

<div id="data">
<?php
 //And we display the results
 while($result = mysql_fetch_array( $data ))
 {

 echo "<h2>";
 echo html_entity_decode($result['titel']);
 echo "</h2>";
 echo "<h4>";
 echo html_entity_decode($result['genre']);
 echo "&nbsp;&nbsp;&nbsp;";
 echo html_entity_decode($result['jaar']);
 echo "</h4>";
 echo "<h3>";
 echo html_entity_decode($result['regiseur']);
 echo "<br>";
 echo html_entity_decode($result['acteur']);
 echo "<br><br> ";
 echo "</h3>";
 echo html_entity_decode($result['inhoud']);
 echo "<br><br>";
 echo "<h5>";
 echo html_entity_decode($result['lener']);
 echo "</h5>";

 }
?>
</div>


<div id="beeld">
<?php

$imgurl = "http://www.pieterdn.be/DVDB/beeld/";

    $query = "SELECT beeld FROM movies WHERE titel LIKE'%$find%'";
    $results = mysql_query($query);

    while($row = mysql_fetch_assoc($results))
    {
         echo '<img src="'.$imgurl.$row['beeld'].'" alt="'.$row['title'].'" />';

    }
?>
</div>
