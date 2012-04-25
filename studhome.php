<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Home</title>
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
                                                
                                                    //global $count;
                                                echo ('<li class="current">');
                                                       $arr=getsubcode2();
                                                       for($i=0;$i<=7;$i++)
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
						
						<ul>
							<?php
                                                /*global $count;
                                                echo ('<li class="current">');
                                                       $arr=getsubcode2();
                                                       for($i=0;$i<=7;$i++)
                                                       {
                                                           echo('<a href="subdayattend.php?subcode=');
                                                                    echo $arr[$i];echo('">');
                                                                    echo($arr[$i].'</a></li>');
                                                           
                                                           
                                                       }
                                                */
							
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
                                                       $arr=getsubcode2();
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
							 <li><a href="subchose.php">Subject Choice</a></li>
                                        <?php  echo('<li><a href="edpro.php?studcode=');
                                        $fd=$_SESSION['usr'];
                                        require_once("includes/db.php");
                                        $rt1=mysql_query("Select uid from login where usrname='$fd'");
                                        echo(mysql_error());
                                        $rt2=mysql_fetch_array($rt1);
                                        
                                        $er=$rt2[0];
                                        echo($er.'"/>Edit Profile</a></li>');
                                            


?>							<li><a href="logout.php">Logout</a></li>
							<li><a href="studhome.php">Home</a></li>
							<li><a href="#">Search <form name="search" method="GET" action="studpro.php"><input type="text" name="studcode"/></input></form></a></li>
						</ul>
			</li>	
		</ul></td>
    <td width="41%"><img src="images/colgportal.png"></img></td>
    
                        <td width="13%"><a href="contact.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact Us</a></td>
  </tr>
  <tr>
    <td height="45" colspan="2" align="center"><?php date_default_timezone_set("Asia/Kolkata"); echo(date("r"));  ?></td>
    <td height="500" rowspan="3"><?php
   require_once("includes/db.php");
   error_reporting(E_ERROR);
    $ruid2=$_SESSION['usr'];
  $t2=mysql_query("Select uid from login where usrname='$ruid2'");
   echo(mysql_error());
   $t3=mysql_fetch_array($t2);
   $ruid3=$t3[0];
   //echo($ruid2);
   $frndlist=array();
   $frndsub=getsubcode2();
   //print_r($frndsub.".....subjcts");
  // for($i=0;$i<6;$i++)
   //{
       $f2=mysql_query("Select * from subassign where subcode='$frndsub[0]'");
    echo(mysql_error());
       
       $r45=mysql_fetch_array($f2,MYSQL_NUM);
         unset($r45[0]);
         //array_push($frndlist,$r45);       
   //}
   $r45=array_unique($r45);
  //unset($frndlist[0]);
   //print_r($r45);
   //echo($r45[1]."/////");
  //print_r($r45);
   
   ?>
   <table width="100%" cellpadding="1" border="1" cellspacing="1">
      <?php 
      for($i=1;$i<10;$i++)
      { //if(!isset($r45[i]))
         // break;
      echo('<tr>'.'<td><a href="studpro.php?studcode='.$r45[i].'"/><img src="stupix/'.$r45[$i].'.jpg" width="40" height="40"></img></a></td>');  
        //echo('<td><a href="studpro.php?studcode='.$r45[$i+1].'"/><img src="stupix/'.$r45[$i+1].'.jpg" width="40" height="40"></img></a></td>');
        //echo('<td><a href="studpro.php?studcode='.$r45[$i+2].'"/><img src="stupix/'.$r45[$i+2].'.jpg" width="40" height="40"></img></a></td>');
        //echo('<td><a href="studpro.php?studcode='.$r45[$i+3].'"/><img src="stupix/'.$r45[$i+3].'.jpg" width="40" height="40"></img></a></td>');  
      echo('</tr>');
       
      }
      
      
      
      
         
           ?>
      
   
   
   
   </table>
    
    
    
    
    </td>
    <td rowspan="3">    </td>
  </tr>
  <tr>
    <td height="30" colspan="2" align="center"><img src="images/updates.png"></img></td>
  </tr>
  <tr>
    <td colspan="2"> <h3>
        Recent Uploads</h3><p></p><p></p>
      <?php
    require_once("includes/db.php");
    $vc=$_SESSION['usr'];
    //echo($vc);
    $q7=mysql_query("Select uid from login where usrname='$vc'");
    $row56=mysql_fetch_array($q7);
    //print_r($row56);
    //echo("///".mysql_error()."////");
    $row57=$row56['uid'];
  $q8=mysql_query("Select * from notifications where uid='$row57'");
  echo(mysql_error()); 
  while($row12=mysql_fetch_array($q8))
    {   $fileurl='<a href="assignments/';
    $fileurl.=$row12['filename'];
    $fileurl.='">';
      echo("You uploaded file ".$fileurl.$row12['filename'].'</a> on'.$row12['date']." for subject code ".$row12['subcode']."<p><p><p>"); 
        
    }
    
    ?>
    
</td>
  </tr>
  <tr>
    <td colspan="2"><div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#appId=122436381184709&amp;xfbml=1"></script><fb:like href="http://localhost/collegeport/adminhome.php" send="true" layout="box_count" width="450" show_faces="true" colorscheme="dark" font="segoe ui"></fb:like>


</td>
    <td height="98"><a href="www.twitter.com/collegeportal">&nbsp;Follow us on Twitter</a></td>
    <td> </td>
  </tr>
</table>
</body>
</html>


<?php
function getsubcode2()
{
        require_once ("includes/db.php");
$ruhr=$_SESSION['usr'];
$re=mysql_query("Select uid,branch from login where usrname='$ruhr'");
echo(mysql_error());
$re1=mysql_fetch_array($re);
$uid=$re1[0];
$br=$re1[1];
//echo($uid.$br);
$subjects=array();
    $re2=mysql_query("Select subcode from subassign where studcode1='$uid' or studcode2='$uid' or studcode3='$uid' or studcode4='$uid' or studcode5='$uid' or studcode6='$uid' or studcode7='$uid' or studcode8='$uid' or studcode9='$uid' or studcode10='$uid' or studcode11='$uid' or studcode12='$uid' or studcode13='$uid' or studcode14='$uid' or studcode15='$uid'");
  echo(mysql_error());
    while($re3=mysql_fetch_array($re2))
  {
      array_push($subjects,$re3['subcode']);
      
      
  }
    
    
    
   return $subjects;

        

//setcookie('usr',$_GET['usr'],time()+14400);
}


?>