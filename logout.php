<html>
    <head>
<title>Saying Bye,Adieu!!!</title>
<link rel="stylesheet" href="css/error.css" media="screen,projection,tv,handheld,print,speech">
        <meta name="viewport" content="width=device-width"></meta>
    </head>

    <body>
<?php
session_start();
$y=session_destroy();
unset($_SESSION['usr']);
unset($_COOKIE['usr']);
if($y)
echo('<div align="center">Logged Out Successfully</div>');
else
{echo("Problem Logging Out,Please as an added measure empty your cache and delete the cookies manually");
echo('<a href="login.php">Go back</a>');
}
?>
</body>
</html>