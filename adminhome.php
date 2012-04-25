<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administrator Home</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8">
		<link rel="stylesheet" type="text/css" href="css/superfish.css" media="screen">
		<script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
		<script type="text/javascript" src="js/hoverIntent.js"></script>
		<script type="text/javascript" src="js/superfish.js"></script>
                <link rel="stylesheet" href="css/error.css" media="screen,projection,tv,handheld,print,speech">
        <meta name="viewport" content="width=device-width"></meta>
		<script type="text/javascript">

		// initialise plugins
		jQuery(function(){
			jQuery('ul.sf-menu').superfish();
		});

		</script>
</head>

<body>
    
    
    <div align="left">Hello<?php    
        session_start();
    require_once("includes/db.php");
    $foto=$_SESSION['usr'];
    echo(" <h3>".$foto."</h3>");
    $f=mysql_query("Select uid from login where usrname='$foto'");
    echo(mysql_error());
    //echo($f);
    $ff=mysql_fetch_array($f);
    //print_r($ff);
    echo('<img src="stupix/'.$ff[0].'.jpg" border="2" width="60" height="40" hspace="5"/></img>');
    
    
    ?></div>
    
<table width="100%" height="900" border="0" cellpadding="0" cellspacing="0" align="left">
  <tr>
    <td height="109" colspan="2"><ul class="sf-menu">
			<li class="current">
				<a href="#a">Attendance</a>
				<ul>
					<li>
						
					</li>
					<li class="current">
						<a href="#ab">Class</a>
						<ul>
						<?php
                                                session_start();
                                                
                                                //if(!isset($_COOKIE['usr']))
                                                  //  header("Location:login.php");
                                                
                                                    global $count;
                                                echo ('<li class="current">');
                                                       $arr=getsubcode();
                                                       for($i=0;$i<=$count;$i++)
                                                       {
                                                           echo('<a href="attendquery.php?subcode=');
                                                                    echo $arr[$i];echo('">');
                                                                    echo($arr[$i].'</a></li>');
                                                           
                                                           
                                                       }
                                                
							
						?>	
						</ul>
					</li>
                                    <li><a href="statistics.php">Statistics</a></li>
					<li>
						<a href="#">Day's Attendance</a>
						<ul>
							<?php
                                                global $count;
                                                echo ('<li class="current">');
                                                       $arr=getsubcode();
                                                       for($i=0;$i<=$count;$i++)
                                                       {
                                                           echo('<a href="attendmark.php?subcode=');
                                                                    echo $arr[$i];echo('">');
                                                                    echo($arr[$i].'</a></li>');
                                                           
                                                           
                                                       }
                                                
							
						?>
						</ul>
					</li>
					
				</ul>
			</li>
			<li>
				<a href="upload.php">Upload/Download</a>
			</li>
			<li>
				<a href="#">Result</a>
				<ul>
					<li>
						<a href="#">Semester</a>
						<ul>
							<li><a href="res.php?sem=1">I</a></li>
                                                     <li><a href="res.php?sem=2">II</a></li>
                                                      <li><a href="res.php?sem=3">III</a></li>
                                                       <li><a href="res.php?sem=4">IV</a></li>
                                                        <li><a href="res.php?sem=5">V</a></li>
                                                         <li><a href="res.php?sem=6">VI</a></li>
                                                          <li><a href="res.php?sem=7">VII</a></li>
                                                           <li><a href="res.php?sem=8">VIII</a></li>
						</ul>
					</li>
					<li>
						<a href="#">Subject Wise</a>
						<ul>
							 <?php
                                                global $count;
                                                echo ('<li class="current">');
                                                       $arr=getsubcode();
                                                       for($i=0;$i<=$count;$i++)
                                                       {
                                                           echo('<a href="ressub.php?subcode=');
                                                                    echo $arr[$i];echo('">');
                                                                    echo($arr[$i].'</a></li>');
                                                           
                                                           
                                                       }
                                                
							
						?>
						</ul>
					</li>
					<li>
						<a href="resstud.php">Student Specific</a>
						
					</li>
					<li>
						<a href="#">menu item</a>
						<ul>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
						</ul>
					</li>
					<li>
						<a href="#">menu item</a>
						<ul>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">Profile</a>
						<ul>
							 
                                        <li><a href="edpro.php">Edit Profile</a>
							<li><a href="logout.php">Logout</a></li>
							<li><a href="adminhome.php">Home</a></li>
							<li><a href="#"><a href="#">Search <form name="search" method="GET" action="studpro.php"><input type="text" name="studcode"/></input></form></a></a></li>
						</ul>
			</li>	
		</ul></td>
    <td width="41%"><img src="images/colgportal.png"></img></td>
    
                        <td width="13%"><a href="contact.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact Us</a></td>
  </tr>
  <tr>
    <td height="45" colspan="2" align="center"><?php date_default_timezone_set("Asia/Kolkata"); echo(date("r"));  ?></td>
    <td height="500" rowspan="3"><?php
    echo('<div class="vertaligntop">');
    require_once("includes/db.php");
    $r=$_SESSION['usr'];
    $temp9=mysql_query("Select uid from login where usrname='$r'");
    $rt=mysql_fetch_array($temp9);
    $rt=$rt[0];
    $w=mysql_query("Select subcode,subname from subjecttab where tchr='$rt'");
    while($ww= mysql_fetch_array($w))
    {//print_r($ww);
        echo('<li align="top"><h3>'.$ww[1].' ('.$ww[0].')'.'</h3><p>');
        $v=mysql_query("Select * from subassign where subcode='$ww[0]'");
        echo(mysql_error());
        $vv=mysql_fetch_array($v);
        echo('<ul>');//$loc=$vv.next($vv);
        $loc=$vv.next($vv);  $loc=$vv.next($vv);
        //echo($loc);
        ///print_r($vv);
        for($k=0;$k<80;$k++)
        { //$loc=$vv.next($vv);
            $loc=str_replace("Array","",$loc);
            if(strcmp($loc[0],'S'))
           {//echo("ho!!");  
           break;    
           }
           //echo($loc);
            ////$loc=$vv.next($vv);
           // echo("....".$loc);
             /////$loc=$vv.next($vv);
             echo('<li><a href="studpro.php?id=');
$loc=str_replace("Array","",$loc);
//echo($loc);
       echo($loc.'">'.$loc.'</a><img src="stupix/'.$loc.'.jpg" border="2" width="40" height="40" hspace="5"/></img></li>');
       $loc=$vv.next($vv);
       //echo('...'.$loc.'...'); 
        $loc=$vv.next($vv);
        //echo('...'.$loc.'...');
         $loc=$vv.next($vv);
        }
           echo('</ul></li>');
            
        //for($t=0;$t<50;$t++)
        //echo($t.'<p></p>');
    }
    
    echo('</div>');
    
    ?></td>
    <td rowspan="3"></td>
  </tr>
  <tr>
    <td height="30" colspan="2" align="center"><img src="images/updates.png"></img></td>
  </tr>
  <tr>
    <td colspan="2"> <?php
    require_once("includes/db.php");
    $vc=$_SESSION['usr'];
    //echo($vc);
    $q7=mysql_query("Select uid from login where usrname='$vc'");
    $row56=mysql_fetch_array($q7);
    //print_r($row56);
    //echo("///".mysql_error()."////");
    $row57=$row56['uid'];
    echo('<h3>Recent Notifications</h3>');
  $q8=mysql_query("Select * from notifications where uid='$row57'");
  echo(mysql_error()); 
  while($row12=mysql_fetch_array($q8))
    {   $fileurl='<a href="assignments/';
    $fileurl.=$row12['filename'];
    $fileurl.='">';
      echo('<p></p>'.$row12['uploader']." uploaded file ".$fileurl.$row12['filename'].'</a> on'.$row12['date']." for subject code ".$row12['subcode']."<p><p><p>"); 
        
    }
    
    ?>
    
</td>
  </tr>
  <tr>
    <td colspan="2"><div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#appId=122436381184709&amp;xfbml=1"></script><fb:like href="http://localhost/collegeport/adminhome.php" send="true" layout="box_count" width="450" show_faces="true" colorscheme="dark" font="segoe ui"></fb:like>


</td>
    <td height="98"><a href="www.twitter.com/collegeportal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Follow us on Twitter</a></td>
    <td></td>
  </tr>
</table>
</body>
</html>


<?php
function getsubcode()
{
        require_once ("includes/db.php");
    //setcookie('usr',$_GET['usr'],time()+14400);
  $tchrmail=$_SESSION['usr'];
  $qtchrmail=mysql_query("Select uid from login where usrname='$tchrmail'");
  echo(mysql_error());
  while($row18=mysql_fetch_array($qtchrmail))
  {
    
      $ruid=$row18['uid'];
      
      
  }
  $qsubcode=mysql_query("Select subcode from subjecttab where tchr='$ruid'");
  echo(mysql_error());
  $count=0;
  while($row21=mysql_fetch_array($qsubcode))
  {$count++;
      //echo("hello");
      $rsub=$row21['subcode'];
      $arr=Array();
      array_push($arr,$rsub);
     //print_r($arr);
  }
 
  return $arr; 
}


?>