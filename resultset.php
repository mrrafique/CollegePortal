<html>
    <title>Result Entry</title>
    <body>
        <div align ="center">
            <p></p><p></p><p></p>
        <form name="result" action="resultset.php" method="GET">
            <h3>Subject Code</h3><input type="text" name="subject"/>
        <input type="submit" name="submit" value="FetchTables"/>
          
        
        </form>
        </div>
        <?php
        if(isset($_GET['submit']))
        {
                        require_once ("includes/db.php");
  if($_GET['subject'][3]==1)
{ $tabnumbr2="sem1";
     
    }
  if($_GET['subject'][3]==2)
{ $tabnumbr2="sem2";
     
    }
     if($_GET['subject'][3]==3)
{ $tabnumbr2="sem3";
     
    }
    
     if($_GET['subject'][3]==4)
{ $tabnumbr2="sem4";
     
    }
     if($_GET['subject'][3]==5)
{ $tabnumbr2="sem5";
     
    }
          if($_GET['subject'][3]==6)
{ $tabnumbr2="sem6";
     
    } if($_GET['subject'][3]==7)
{ $tabnumbr2="sem7";
     
    } if($_GET['subject'][3]==8)
{ $tabnumbr2="sem8";
     
    }   
    
if($_GET['subject'][7]==1)
{ $col="sub1";
     
    }   
    if($_GET['subject'][7]==2)
{ $col="sub2";
     
    }    
    if($_GET['subject'][7]==3)
{ $col="sub3";
     
    }    
    if($_GET['subject'][7]==4)
{ $col="sub4";
     
    }    
    if($_GET['subject'][7]==5)
{ $col="sub5";
     
    }    
    if($_GET['subject'][7]==6)
{ $col="sub6";
     
    }    
    if($_GET['subject'][3]==7)
{ $col="sub7";
     
    }
    
  echo('Now displaying Subject Code'.$_GET["subject"].'for Stabnumbr2');
  echo($tabnumbr2);
$z=mysql_query("Select Studcode,$col from $tabnumbr2");
echo(mysql_error());
//<form name="res" action="respush.php" method="GET">
echo('<form name="res" action="respush.php" method="GET"><table align="center" width="50%" border="1" cellspacing="3" cellpadding ="3">');
 echo('<input type="hidden" name="tabno" value="'.$tabnumbr2.'"/>');
   echo('<input type="hidden" name="col" value="'.$col.'"/>');
        
while($zz=mysql_fetch_array($z))
{   //print_r($zz); 
    echo('<tr><td>');
    echo($zz[0].'</td><td><input type="text" value="'.$zz[1].'" name="'.$zz[0].'"/></td></tr>');
    
    
    
}
    echo('</table><input align="center" type="submit" name="submi" value="Update DB"/></form>');
  //  echo('<input align="center" type="submit" name="submi" value="Update DB"/>');
            
  
        
        
        
        }
        ?>
        
        
    </body>
    
    
    
    
</html>