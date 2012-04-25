<?php

session_start();
require_once("includes/db.php");
echo('<html><head><title>Attendance Post</title>
                <link rel="stylesheet" type="text/css" media="all" href="css/tablekit.css" />
                <script type=/"text/javascript/" src=/"js/prototype.js/"></script>
		<script type=/"text/javascript/" src=/"js/fabtabulous.js/"></script>
		<script type=/"text/javascript/" src=/"js/tablekit.js/"></script>
                <link rel="stylesheet" href="css/error.css" media="screen,projection,tv,handheld,print,speech">
        <meta name="viewport" content="width=device-width"></meta>
		</head><body><h2>Result Enumeration for ');
    
$uid=$_GET['studcode'];
echo($uid.'</h2>');
   
  function dispres($row45)
{           $counter=0;
            echo('<tr><td>');
            echo($row45[0].'</td>');
            echo('<td>');
            $temp0=$row45[0];
            $name=mysql_query("Select name from login where uid='$temp0'");
            $naam=mysql_fetch_array($name);
            echo($naam[0].'</td>');
            for($ancount=0;$ancount<=6;$ancount++)
            {$row45.next($row45);
            $temp09=$row45.next($row45);
            $temp10=str_replace("Array","",$temp09);
            echo('<td>'.$temp10.'</td>');
            }
         echo('</tr>');   
         
         return;
    
}
if(isset($uid))
{$quer=mysql_query("Select * from sem1 where Studcode='$uid'");

echo(mysql_error());
echo("<h3>Semester I</h3>");
echo('<p><p><p>');
echo('<table class="sortable resizable editable" align="left">');
echo('<thead><th id="creation-date">Student ID</th>');
//echo('<th id="creation-date">Name</th>');
echo('<th id="creation-date">201</th>');
echo('<th id="creation-date">202</th>');
echo('<th id="creation-date">203</th>');
echo('<th id="creation-date">204</th>');
echo('<th id="creation-date">205</th>');
echo('<th id="creation-date">206</th>');
    echo('</thead>');
while($row2=mysql_fetch_array($quer))
{    dispres($row2);

    
}echo('</table>');
$quer=mysql_query("Select * from sem2 where Studcode='$uid'");

echo(mysql_error());
echo("<h3>Semester II</h3>");
echo('<p><p><p>');
echo('<table class="sortable resizable editable" align="left">');
echo('<thead><th id="creation-date">Student ID</th>');
//echo('<th id="creation-date">Name</th>');
echo('<th id="creation-date">201</th>');
echo('<th id="creation-date">202</th>');
echo('<th id="creation-date">203</th>');
echo('<th id="creation-date">204</th>');
echo('<th id="creation-date">205</th>');
echo('<th id="creation-date">206</th>');
    echo('</thead>');
while($row2=mysql_fetch_array($quer))
{    dispres($row2);
    //echo('</table>');
}echo('</table>');
$quer=mysql_query("Select * from sem3 where Studcode='$uid'");

echo(mysql_error());
echo("<h3>Semester III</h3>");
echo('<p><p><p>');
echo('<table class="sortable resizable editable" align="left">');
echo('<thead><th id="creation-date">Student ID</th>');
//echo('<th id="creation-date">Name</th>');
echo('<th id="creation-date">201</th>');
echo('<th id="creation-date">202</th>');
echo('<th id="creation-date">203</th>');
echo('<th id="creation-date">204</th>');
echo('<th id="creation-date">205</th>');
echo('<th id="creation-date">206</th>');
    echo('</thead>');
while($row2=mysql_fetch_array($quer))
{    dispres($row2);
    //cho('</table>');
}echo('</table>');
$quer=mysql_query("Select * from sem4 where Studcode='$uid'");

echo(mysql_error());
echo("<h3>Semester IV</h3>");
echo('<p><p><p>');
echo('<table class="sortable resizable editable" align="left">');
echo('<thead><th id="creation-date">Student ID</th>');
//echo('<th id="creation-date">Name</th>');
echo('<th id="creation-date">201</th>');
echo('<th id="creation-date">202</th>');
echo('<th id="creation-date">203</th>');
echo('<th id="creation-date">204</th>');
echo('<th id="creation-date">205</th>');
echo('<th id="creation-date">206</th>');
    echo('</thead>');
while($row2=mysql_fetch_array($quer))
{    dispres($row2);//echo('</table>');
    
}echo('</table>');
$quer=mysql_query("Select * from sem5 where Studcode='$uid'");

echo(mysql_error());
echo("<h3>Semester V</h3>");
echo('<p><p><p>');
echo('<table class="sortable resizable editable" align="left">');
echo('<thead><th id="creation-date">Student ID</th>');
//echo('<th id="creation-date">Name</th>');
echo('<th id="creation-date">201</th>');
echo('<th id="creation-date">202</th>');
echo('<th id="creation-date">203</th>');
echo('<th id="creation-date">204</th>');
echo('<th id="creation-date">205</th>');
echo('<th id="creation-date">206</th>');
    echo('</thead>');
while($row2=mysql_fetch_array($quer))
{    dispres($row2);//echo('</table>');
    
}echo('</table>');
$quer=mysql_query("Select * from sem6 where Studcode='$uid'");

echo(mysql_error());
echo("<h3>Semester VI</h3>");
echo('<p><p><p>');
echo('<table class="sortable resizable editable" align="left">');
echo('<thead><th id="creation-date">Student ID</th>');
//echo('<th id="creation-date">Name</th>');
echo('<th id="creation-date">201</th>');
echo('<th id="creation-date">202</th>');
echo('<th id="creation-date">203</th>');
echo('<th id="creation-date">204</th>');
echo('<th id="creation-date">205</th>');
echo('<th id="creation-date">206</th>');
    echo('</thead>');
while($row2=mysql_fetch_array($quer))
{    dispres($row2);//echo('</table>');
    
}echo('</table>');
$quer=mysql_query("Select * from sem7 where Studcode='$uid'");

echo(mysql_error());
echo("<h3>Semester VII</h3>");
echo('<p><p><p>');
echo('<table class="sortable resizable editable" align="left">');
echo('<thead><th id="creation-date">Student ID</th>');
//echo('<th id="creation-date">Name</th>');
echo('<th id="creation-date">201</th>');
echo('<th id="creation-date">202</th>');
echo('<th id="creation-date">203</th>');
echo('<th id="creation-date">204</th>');
echo('<th id="creation-date">205</th>');
echo('<th id="creation-date">206</th>');
    echo('</thead>');
while($row2=mysql_fetch_array($quer))
{    dispres($row2);//echo('</table>');
    
}echo('</table>');
$quer=mysql_query("Select * from sem8 where Studcode='$uid'");

echo(mysql_error());
echo("<h3>Semester VIII</h3>");
echo('<p><p><p>');
echo('<table class="sortable resizable editable" align="left">');
echo('<thead><th id="creation-date">Student ID</th>');
//echo('<th id="creation-date">Name</th>');
echo('<th id="creation-date">201</th>');
echo('<th id="creation-date">202</th>');
echo('<th id="creation-date">203</th>');
echo('<th id="creation-date">204</th>');
echo('<th id="creation-date">205</th>');
echo('<th id="creation-date">206</th>');
    echo('</thead>');
while($row2=mysql_fetch_array($quer))
{    dispres($row2);//echo('</table>');
    
}echo('</table>');}
echo('<form name="form" method="GET" action="resstud.php">');
echo('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="studcode"/>');
echo('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit"/>');
echo('</form>');
echo('<p><p><p>');
echo('</body></html>');


?>