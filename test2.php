<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>

<head>
    <meta name="generator" content="HTML Tidy for Java (vers. 2009-12-01), see jtidy.sourceforge.net" />
    <meta http-equiv='content-type'content='text/html; charset=utf-8' />
    <meta name='description' content='' />
    <meta name='keywords' content='' />
    <meta name='author' content='' />
    <link rel='stylesheet' type='text/css' href='css/test.css' media='screen' />
    <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700,200,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Exo:400,100,600,800' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>
    <title>MySpot</title>


</head>

<body>

    <div id='searchcont'>
        <form name="search" id="search" method="post" action="<?php echo $PHP_SELF;?>">

            <input type="text" name="find" id="find"/>
            <input type="submit" name="search" value="Search"  id="btn_Search"/>

        </form>

    </div>

    <div id="fetch">

        <?php include 'PHP/db_config.php'?><?php include 'PHP/db_connect.php'?>
        <?php
            $find = $_POST['find'];
            $query="SELECT * FROM movies WHERE titel LIKE '%$find%'OR genre LIKE '%$find%' OR regiseur LIKE '%$find%' OR acteur LIKE '%$find%' OR jaar LIKE '%$find%' ORDER BY titel ASC";
            $result=mysql_query($query);
            $num=mysql_numrows($result);
            mysql_close();
        ?>

        <?php
            $i=0;
            while ($i < $num) {

                $f1=html_entity_decode(mysql_result($result,$i,"titel"));
                $f2=html_entity_decode(mysql_result($result,$i,"genre"));
                $f3=html_entity_decode(mysql_result($result,$i,"jaar"));
                $f4=html_entity_decode(mysql_result($result,$i,"regiseur"));
                $f5=html_entity_decode(mysql_result($result,$i,"acteur"));
                $f6=html_entity_decode(mysql_result($result,$i,"inhoud"));
                $f7=html_entity_decode(mysql_result($result,$i,"beeld"));
                $f8=html_entity_decode(mysql_result($result,$i,"uitgeleend"));
                $f9=html_entity_decode(mysql_result($result,$i,"id"));

        ?>

        <div id="container" class="<?php if (htmlspecialchars($f8) == 1) echo"weg"?>">

            <h3><?php echo htmlspecialchars($f1); ?><span class="uitgeleend"><?php if (htmlspecialchars($f8) == 1) echo"*"?></span></h3><br />
            <div id="img"><img src="mobile_320px/<?php echo htmlspecialchars($f7);?>" alt="<?php echo htmlspecialchars($f1); ?>"></div>
            <h6><?php echo htmlspecialchars($f2);?><span class="jaar"><?php echo htmlspecialchars($f3);?></span></h6>
            <h4><?php echo htmlspecialchars($f4);?><span class="acteur"><?php echo htmlspecialchars($f5);?></span></h4>
            <p><?php echo htmlspecialchars($f6);?><br><a href="product.php?id=<?php echo htmlspecialchars($f9);?>" class="more">more ...</a></p>
        </div>





        <?php
            $i++;
            }
            ?>

    </div>
</body>

<script type='text/javascript'>
$('.weg').fadeTo(2000, 0.4);

</script>




</html>

