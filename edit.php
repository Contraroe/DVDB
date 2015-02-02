
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>

<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>

<head>

<meta http-equiv='content-type' content='text/html; charset=utf-8' />

<meta name='description' content='' />

<meta name='keywords' content='' />

<meta name='author' content='' />

<link rel='stylesheet' type='text/css' href='css/edit.css' media='screen' />
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>
<script>var __adobewebfontsappname__ = "code"</script>
<script src="http://use.edgefonts.net/unifrakturcook:n7:all.js"></script>

<title>Pieter's DVD DB</title>


</head>
    <body>                          <?php include ('includes/header.php') ?>
    <div id='Container'>        <?php include ('includes/footer.php') ?>

            <div id='searchcont'>

                <form name="search" id="search" method="post" action="<?=$PHP_SELF?>">
                <h2>Search</h2><br>
                Titel*:<br><br>
                <input type="text" name="find" id="find" value="search..." onFocus="" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Search...':this.value;"/>
                 <input type="hidden" name="searching" value="yes" /><br><br>
                 <input type="submit" name="search" value="Search" />                 </form>


        </div>

<?php
include 'PHP/db_config.php';
include 'PHP/db_connect.php';
$find = $_POST['find'];

 //Now we search for our search term, in the field the user specified
$data = mysql_query("SELECT * FROM movies WHERE titel LIKE'%$find%' LIMIT 1");

while($result = mysql_fetch_array( $data ))
 {
$titel=$result['titel'];
$genre=$result['genre'];
$jaar=$result['jaar'];
$regiseur=$result['regiseur'];
$acteur=$result['acteur'];
$inhoud=$result['inhoud'];
$lener=$result['lener'];
$uitgeleend=$result['uitgeleend'];
$beeld=$result['beeld'];
$id=$result['id'];
 }



?>

    <div id='updatecont'>

                <form name='update' id='update' action='PHP/update.php' method='post' accept-charset='UTF-8'>

                <h2>Update</h2><br>
                <label for='id' >ID*:</label><br>
                <input type='text' name='id2' id='id2'  maxlength="50" value="<?php print $id?>"/><br><br>
                <label for='titel2' >Titel*:</label><br>
                <input type='text' name='titel2' id='titel2'  maxlength="50" value="<?php print $titel?>"/><br><br>
                <label for='regiseur2' >Regiseur*:</label><br>
                <input type='text' name='regiseur2' id='regiseur2'  maxlength="50" value="<?php print $regiseur?>" /><br><br>
                <label for='acteur2' >Acteur*:</label><br>
                <input type='text' name='acteur2' id='acteur2' maxlength="50" value="<?php print $acteur?>" /><br><br>
                <label for='jaar2' >Jaar*:</label><br>
                <input type='text' name='jaar2' id='jaar2'  maxlength="4" value="<?php print $jaar?>"/><br><br>
                <label for='uitgeleend2' >Uitgeleend aan*:</label>&nbsp;<input type='checkbox' name='uitgeleend2' value="1" <?php if ($uitgeleend == 1) echo 'checked'; ?>/>
                <br><input type='text' name='lener2' id='lener2' maxlength="50" value="<?php print $lener?>"/><br><br><br>

                <input type='submit' name='update' value='Update'/>
                </form>
        </div>





    <div id='logincont'>

                <form id='login' action='PHP/upload.php' method='post' accept-charset='UTF-8' enctype="multipart/form-data">

                <h2>Upload</h2><br>
                <label for='titel' >Titel*:</label><br>
                <input type='text' name='titel' id='titel'  maxlength="50" /><br><br>
                <label for='genre' >Genre*:</label><br>
                <select name='genre' id='genre'>
                    <option selected>kies een genre
                    <option>Actiefilm
                    <option>Animatie
                    <option>Apocaliptisch
                    <option>Avonturenfilm
                    <option>Cultfilm
                    <option>Documentaire
                    <option>Drama
                    <option>Fantasy
                    <option>Film noir
                    <option>Historisch drama
                    <option>Horrorfilm
                    <option>Komedie
                    <option>Melodrama
                    <option>Misdaad
                    <option>Oorlogs
                    <option>Propaganda
                    <option>Romantisch
                    <option>Romantische komedie
                    <option>Sciencefiction
                    <option>Stonerfilm
                    <option>Stop Motion
                    <option>Surrealistisch
                    <option>Thriller
                    <option>Western
                    <option>______
                    <option>Muziek
                </select>
                <br><br>
                <label for='regiseur' >Regiseur*:</label><br>
                <input type='text' name='regiseur' id='regiseur'  maxlength="50" /><br><br>
                <label for='acteur' >Acteur*:</label><br>
                <input type='text' name='acteur' id='acteur' maxlength="50" /><br><br>
                <label for='jaar' >Jaar*:</label><br>
                <input type='text' name='jaar' id='jaar'  maxlength="4" /><br><br>
                <label for='inhoud' >Inhoud*:</label><br>
                <textarea type='text' name='inhoud' id='inhoud' maxlength="255" ROWS="5" cols="60"></textarea><br><br>
                <label for='beeld' >Beeld*:</label><br>
                <input name='ufile' type='file' id='file'><br><br><br>
                <label for='uitgeleend' >Uitgeleend aan*:</label>&nbsp;<input type='checkbox' name='uitgeleend' value='*'>
                <br><input type='text' name='lener' id='lener' maxlength="50" /><br><br><br>

                <input type='submit' name='upload' value='Upload'/>
                </form>
        </div>
        <div id='who'>
            <h1>B? C? A?rchive!!</h1>
        </div>


        <?php include ('PHP/fetch.php') ?>








    </div>

</body>



<script type='text/javascript'>
$('#logincont').fadeTo(3000, 0.9);
$('#login').fadeTo(3000, 0.9);
$('#footer').fadeTo(1500, 0.9);
$('#header').fadeTo(1500, 0.9);
$('#who').fadeTo(4000, 1);
$('#fetch').fadeTo(4500, 0.9);
$('#searchcont').fadeTo(1500, 0.9);
$('#updatecont').fadeTo(1500, 0.9);

</script>


</html>

