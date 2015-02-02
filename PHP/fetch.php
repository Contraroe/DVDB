<div id='fetch'>
<?php include 'db_config.php'?>
<?php include 'db_connect.php'?>
<?php

$query="SELECT * FROM movies ORDER BY titel ASC";
$result=mysql_query($query);
$num=mysql_numrows($result);

mysql_close();
?>

<div id="tabelheader">

<table id="headertitel"border="0" >
<tr>
<td width="355"><font class="header">Titel*</font></td>
<td width="150"><font class="header">Genre*</font></td>
<td width="220"><font class="header">Regiseur*</font></td>
<td width="175"><font class="header">Acteur*</font></td>
<td width="35"><font class="header">Jaar*</font></td>
<td width="10"><font class="header"></font></td>
</tr><tr>


<?php
$i=0;
while ($i < $num) {

$f1=html_entity_decode(mysql_result($result,$i,"titel"));
$f2=html_entity_decode(mysql_result($result,$i,"genre"));
$f3=html_entity_decode(mysql_result($result,$i,"regiseur"));
$f4=html_entity_decode(mysql_result($result,$i,"acteur"));
$f5=html_entity_decode(mysql_result($result,$i,"jaar"));
$f6=html_entity_decode(mysql_result($result,$i,"uitgeleend"));


?>

<table id="content" border="0" >
<tr>
<td width="355"><font class="titel"><?php echo $f1; ?></font></td>
<td width="150"><font class="gengre"><?php echo $f2; ?></font></td>
<td width="220"><font class="regiseur"><?php echo $f3; ?></font></td>
<td width="175"><font class="acteur"><?php echo $f4; ?></font></td>
<td width="35"><font class="jaar"><?php echo $f5; ?></font></td>
<td width="10"><font class="uitgeleend"><?php if ($f6 == 1)  echo "<b>*</b>"; ?></font></td>
</tr>

<?php
$i++;
}
?>
</div> 

</div>

