
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

<table id="header"border="0" >
<tr>
<td width="420"><font class="header">Titel*</font></td>
<td width="150"><font class="header">Genre*</font></td>

<td width="20"><font class="header"></font></td>
</tr><tr>


<?php
$i=0;
while ($i < $num) {

$f1=html_entity_decode(mysql_result($result,$i,"titel"));
$f2=html_entity_decode(mysql_result($result,$i,"genre"));

$f6=html_entity_decode(mysql_result($result,$i,"uitgeleend"));


?>

<table id="content" border="0" >
<tr>
<td width="420"><font class="titel"><?php echo htmlspecialchars($f1); ?></font></td>
<td width="150"><font class="gengre"><?php echo htmlspecialchars($f2); ?></font></td>
<td width="20"><font class="uitgeleend"><?php if (htmlspecialchars($f6) == 1)  echo "*"; ?></font></td>
</tr>

<?php
$i++;
}
?>
</div>

</div>
