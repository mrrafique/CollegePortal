<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Add subjects</title>
         <link rel="stylesheet" href="css/error.css" media="screen,projection,tv,handheld,print,speech">
        <meta name="viewport" content="width=device-width"></meta>
    </head>
    <body>
        <form name="gsub" action="globsub.php" meythod=""GET/>
        Subject 1<input type="text" name="sub1"></input><p></p> 
        Teacher Code<input type="text" name="tch1"></input><p></p>
        Subject Name<input type="text" name="nam1"></input><p></p><p></p><p></p><p></p><p></p>
        Subject 2<input type="text" name="sub2"></input><p></p> 
        Teacher Code<input type="text" name="tch2"></input> <p></p>
        Subject Name<input type="text" name="nam2"></input> <p></p>
    <input type="submit" name="submit"/>
    </form>
        
        
        
        <?php
        
        require_once("includes/db.php");
        
if(isset($_GET['submit']))
{$x1=$_GET['sub1'];
$x2=$_GET['tch1'];
$x3=$_GET['nam1'];
$x4=$_GET['sub2'];
$x5=$_GET['tch2'];
$x6=$_GET['nam2'];
    mysql_query("Insert into subassign (subcode) values('$x1')");
    echo(mysql_error());
    mysql_query("Insert into subassign (subcode) values('$x4')");
    echo(mysql_error());
    mysql_query("Insert into subjecttab (subcode,subname,tchr) values('$x1','$x3','$x2')");
    echo(mysql_error());
     mysql_query("Insert into subjecttab (subcode,subname,tchr) values('$x1','$x3','$x2')");
    echo(mysql_error());
    
    echo("<p></p><p></p>2 tables updated ");
    
}
        

// put your code here
        ?>
    </body>
</html>