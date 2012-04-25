<?php

require_once("includes/db.php");

 echo('<html><head><title>Result Summary</title>
    <link rel="stylesheet" type="text/css" media="all" href="css/tablekit.css" />
                <script type=/"text/javascript/" src=/"js/prototype.js/"></script>
		<script type=/"text/javascript/" src=/"js/fabtabulous.js/"></script>
		<script type=/"text/javascript/" src=/"js/tablekit.js/"></script>
                <link rel="stylesheet" href="css/error.css" media="screen,projection,tv,handheld,print,speech">
        <meta name="viewport" content="width=device-width"></meta>
        
		</head><body><h1>Result Enumeration for ');
echo('<table class="sortable resizable editable">');
echo('<thead><th id="creation-date">Student ID</th>');
echo('<th id="creation-date">');
echo($_GET['subcode']);
echo('</th>');
echo('</thead>');


if($_GET['subcode'][3]==1)
    $tabno="sem1";
if($_GET['subcode'][3]==2)
    $tabno="sem2";
if($_GET['subcode'][3]==3)
    $tabno="sem3";
if($_GET['subcode'][3]==4)
    $tabno="sem4";
if($_GET['subcode'][3]==5)
    $tabno="sem5";
if($_GET['subcode'][3]==6)
    $tabno="sem6";


if($_GET['subcode'][7]==1)
    $coll="sub1";
if($_GET['subcode'][7]==2)
    $coll="sub2";
if($_GET['subcode'][7]==3)
    $coll="sub3";
if($_GET['subcode'][7]==4)
    $coll="sub4";
if($_GET['subcode'][7]==5)
    $coll="sub5";
if($_GET['subcode'][7]==6)
    $coll="sub6";

echo($coll);

    $res22=mysql_query("Select Studcode,$coll from $tabno");
   echo(mysql_error());
    while($row49=mysql_fetch_array($res22))
    {      
        dispres($row49);
        
    }
   
function dispres($row490)
{           $counter=0;
            echo('<tr><td>');
            echo($row490[0].'</td>');
            echo('<td>'.$row490[1].'</td></tr>');
            return;
            
}
echo('</body></html>');

?>