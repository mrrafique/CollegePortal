<?php



function checkValidImage($file)
{
	if(!$file || empty($file) || !is_array($file)) 
		return 0;
	elseif($file['error']!=0)
		return 1;
	//elseif (($file['type']!="image/jpg") && ($file['type']!="image/pjpg") && ($file['type']!="image/gif") && ($file['type']!="image/bmp")&&($file['type']!="image/png"))
		//return 2;
	elseif($file['size']>2000000)
		return 3;
	else
		return 4;
}




?>