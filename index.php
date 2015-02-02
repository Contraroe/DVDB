
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>

<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>

<head>

<meta http-equiv='content-type' content='text/html; charset=utf-8' />

<meta name='description' content='' />

<meta name='keywords' content='' />

<meta name='author' content='' />

<link rel='stylesheet' type='text/css' href='css/index.css' media='screen' />
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>
<script>var __adobewebfontsappname__ = "code"</script>
<script src="http://use.edgefonts.net/unifrakturcook:n7:all.js"></script>








<title>Pieter's DVD DB</title>

</head>
    <body>





    <div id='container'>
        <div id='logincont'>

        <form id='login' action='PHP/login.php' method='post' accept-charset='UTF-8'>

                <h2>Login</h2>
                <label for='username' >UserName*:</label><br>
                <input type='text' name='username' id='username'  maxlength="50" /><br><br>
                <label for='password' >Password*:</label><br>
                <input type='password' name='password' id='password' maxlength="50" /><br><br>
                <input type='submit' name='Submit' value='Submit' id='btn'/></form>
                <input type='submit' name='create account' value='Create Account' value='Submit' id='createaccount'/>
        </div>

        <div id='registercont'>

                <form id='register' action='PHP/register.php' method='post' accept-charset='UTF-8'>

                <h2>Register</h2>
                <label for='regname' >UserName*:</label><br>
                <input type='text' name='regname' id='regname'  maxlength="50" /><br><br>
                <label for='regpass' >Password*:</label><br>
                <input type='password' name='regpass' id='regpass' maxlength="50" /><br><br>
                <input type='submit' name='register' value='Register' id='regbtn'/>
                </form>

        </div>

        <div id='who'>

            <h1>Are you there?</h1>

        </div>

        <?php include ('includes/footer.php') ?>




    </div>
    </body>
<script type='text/javascript'>
$('#logincont').fadeTo(1500, 0.9);
$('#login').fadeTo(1500, 0.9);
$('#footer').fadeTo(1500, 0.9);
$('#who').fadeTo(4000, 1);

$("#createaccount").click(function() {

    $('#registercont').fadeTo(1500, 0.9);
    $('#register').fadeTo(1500, 0.9);


});

</script>


</html>

