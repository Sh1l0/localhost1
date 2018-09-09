<?php
	
do
{
$randomname = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGJKLZXCVBNM1234567890_-'),0,13);
}
while(file_exists($randomname.".jpg"));
$uploaddir = 'POSTPHOTO/';
$uploadfile = $uploaddir . $randomname . ".jpg";
	
 move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile); ?>