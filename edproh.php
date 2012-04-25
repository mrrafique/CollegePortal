<?php

require_once("includes/db.php");

    $emd=$_GET['Email'];
  $pwdd=$_GET['pwd'];
  $pwdd=md5($pwdd);
  //echo(md5("here"));
  $nad=$_GET['name'];
  $add=$_GET['address'];
  $brand=$_GET['branch'];
  $semd=$_GET['sem'];
  $f=$_GET['ID'];
  print_r($_GET);
    $q=mysql_query("Update login set usrname='$emd',pwd='$pwdd',name='$nad',address='$add',branch='$brand',sem='$semd' where uid='$f'");
    echo(mysql_error());
   header("Location:login.php");
    
    
    



?>