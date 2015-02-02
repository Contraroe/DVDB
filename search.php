
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>

<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>

<head>

<meta http-equiv='content-type' content='text/html; charset=utf-8' />

<meta name='description' content='' />

<meta name='keywords' content='' />

<meta name='author' content='' />

<link rel='stylesheet' type='text/css' href='css/search.css' media='screen' />
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>

<script>var __adobewebfontsappname__ = "code"</script>
<script src="http://use.edgefonts.net/unifrakturcook:n7:all.js"></script>

<title>Pieter's DVD DB</title>


</head>
    <body>


    <div id='Container'>
<?php include ('includes/headersearch.php') ?>
    <?php include ('includes/footer.php') ?>
        <div id='searchcont'>

                <form name="search" id="search" method="post" action="<?=$PHP_SELF?>">
                <h2>Search</h2><br>
                 Titel*: <br><input type="text" name="find" id="find" value="search..." onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Search...':this.value;"/>
                 <input type="hidden" name="searching" value="yes" /><br><br>
                 <input type="submit" name="search" value="Search" />
                 </form>


        </div>
        <div id='who'>
            <h1>What are you looking for??</h1>
        </div>

        <?php include ('PHP/fetchsearch2.php') ?>
        <?php include ('PHP/fetchsearch.php') ?>








    </div>

</body>



<script type='text/javascript'>
$('#searchcont').fadeTo(1500, 0.9);
$('#search').fadeTo(1500, 0.9);
$('#footer').fadeTo(1500, 0.9);
$('#headersearch').fadeTo(1500, 0.9);
$('#who').fadeTo(4000, 0.9);
$('#fetch').fadeTo(4000, 0.9);

$('#searchcont').animate({left: '-=15%',  }, 1500, function() {
    $('#data').fadeTo(4000, 0.9);
    $('#beeld').fadeTo(4000, 1);

  });

</script>


</html>

