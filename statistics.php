<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
         <link rel="stylesheet" href="css/error.css" media="screen,projection,tv,handheld,print,speech">
        <meta name="viewport" content="width=device-width"></meta>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Statistics</title>
    </head>
    <body>
        <form name="statseek" method="GET" action="statistics.php" align="center"/>
        Student Code<input type="text" name="code"/></input>
        <input type="submit" name="submit"/></input>
        
    
    </form>
        
        
        
        
        <?php
        require_once("includes/db.php");
        echo('<table align="center"><tr><td>Subject</td><td>Classes</td><td>Present</td></tr>');
        if(isset($_GET['submit']))
        {$hol=0;
        $eday=0;
            $id3=$_GET['code'];
            $fa=mysql_query("Select * from tab01 where uid='$id3'");
            $fs=mysql_fetch_array($fa,MYSQL_NUM);
           for($i=0;$i<180;$i++)
           {  if(!strcmp($fs[$i],'H'))
               {$hol++;
                  
                   
               }
               
               if(!strcmp($fs[$i],'0'))
               {$eday++;
                   
                   
               }
           }
               
           //echo($hol."...".$eday);
               $totday=180-$hol;
               $pr=$totday-$eday;
               //echo('<b>Subject 1 </b>'.'Classes=       '.$totday.'     Present=       '.$pr.'');
                 echo('<tr><td><b>Subject1</b></td>'.'<td>'.$totday.'</td><td>'.$pr.'</td>');
               $hol=0;$eday=0;
                $fa=mysql_query("Select * from tab02 where uid='$id3'");
            $fs=mysql_fetch_array($fa,MYSQL_NUM);
           for($i=0;$i<180;$i++)
           {  if(!strcmp($fs[$i],'H'))
               {$hol++;
                  
                   
               }
               
               if(!strcmp($fs[$i],'0'))
               {$eday++;
                   
                   
               }
           }
               
               $totday=180-$hol;
               $pr=$totday-$eday;
               echo('<tr><td><b>Subject 2</b></td>'.'<td>'.$totday.'</td><td>'.$pr.'</td>');
               
               
                  $hol=0;$eday=0;
                $fa=mysql_query("Select * from tab03 where uid='$id3'");
            $fs=mysql_fetch_array($fa,MYSQL_NUM);
           for($i=0;$i<180;$i++)
           {  if(!strcmp($fs[$i],'H'))
               {$hol++;
                  
                   
               }
               
              if(!strcmp($fs[$i],'0'))
               {$eday++;
                   
                   
               }
           }
               
               $totday=180-$hol;
               $pr=$totday-$eday;
               //echo('<b>Subject 3           </b>'.'Classes=       '.$totday.'     Present=       '.$pr.'');
              echo('<tr><td><b>Subject 3</b></td>'.'<td>'.$totday.'</td><td>'.$pr.'</td>');
                
$hol=0;$eday=0;                  
                $fa=mysql_query("Select * from tab04 where uid='$id3'");
            $fs=mysql_fetch_array($fa,MYSQL_NUM);
           for($i=0;$i<180;$i++)
           {  if(!strcmp($fs[$i],'H'))
               {$hol++;
                  
                   
               }
               
             if(!strcmp($fs[$i],'0'))
               {$eday++;
                   
                   
               }
           }
               
               $totday=180-$hol;
               $pr=$totday-$eday;
              echo('<tr><td><b>Subject 4</b></td>'.'<td>'.$totday.'</td><td>'.$pr.'</td>');
               
               
                  $hol=0;$eday=0;
                $fa=mysql_query("Select * from tab05 where uid='$id3'");
            $fs=mysql_fetch_array($fa,MYSQL_NUM);
           for($i=0;$i<180;$i++)
           {  if(!strcmp($fs[$i],'H'))
               {$hol++;
                  
                   
               }
               
              if(!strcmp($fs[$i],'0'))
               {$eday++;
                   
                   
               }
           }
               
               $totday=180-$hol;
               $pr=$totday-$eday;
              echo('<tr><td><b>Subject 5</b></td>'.'<td>'.$totday.'</td><td>'.$pr.'</td>');
               
               
                  $hol=0;$eday=0;
                $fa=mysql_query("Select * from tab06 where uid='$id3'");
            $fs=mysql_fetch_array($fa,MYSQL_NUM);
           for($i=0;$i<180;$i++)
           {  if(!strcmp($fs[$i],'H'))
               {$hol++;
                  
                   
               }
               
               if(!strcmp($fs[$i],'0'))
               {$eday++;
                   
                   
               }
           }
               
               $totday=180-$hol;
               $pr=$totday-$eday;
         echo('<tr><td><b>Subject 6</b></td>'.'<td>'.$totday.'</td><td>'.$pr.'</td>');
               
               
               
           
            
            
            
        }
        
        ?>
    </table>
    </body>
</html>