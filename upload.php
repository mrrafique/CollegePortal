
<html>
    <head> <link rel="stylesheet" href="css/error.css" media="screen,projection,tv,handheld,print,speech">
        <meta name="viewport" content="width=device-width"></meta>
    </head>    
   <body>

<form action="uploadhandle.php" method="POST"
enctype="multipart/form-data">
<label for="file">Upload Assignment</label>
<input type="file" name="file" id="file" />
<br /><br /><br />
Target Teacher Code<input type="text" name="tchr"/>
<br /><br />
Subject Code<input type="text" name="subcode"/>
<br /><br />
<?php
date_default_timezone_set("Asia/Kolkata");
echo('<input type="hidden" name="date"');
echo(' value="');
echo(date("d"));
echo(date("m"));
echo('"/>');
echo('<input type="submit" name="submit"/>');
echo('</form>');
echo('</body></html>');
?>

