<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * 
 *  
 */function error_handler($msg)
 {
//echo $msg;
$rmsg=("<html>
<head>
<link href=\"includes/errbg.css\" rel=\"stylesheet\" 
type=\"text/css\"/>
</head>
<body>

<table width=\"1067\" height=\"863\" border=\"0\" 
cellpadding=\"0\" cellspacing=\"0\">
  <tr>
    <td width=\"169\" height=\"134\"><p id=\"para1\"><a href=\"#\"></a></p></td>
    <td colspan=\"2\"><p id=\"para1\">");
//echo $rmsg;
//echo "a sample of rmsg";

$rmsg2=$msg;
$rmsg3="</p></td>
  </tr>
</table></body></html>";

$rmsg4=$rmsg.$rmsg2.$rmsg3;
//echo $rmsg4;
//echo("This ends now");
return $rmsg4;
 }

?>