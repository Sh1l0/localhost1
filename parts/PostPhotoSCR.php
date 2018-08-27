<?php
do
{
$randomname = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGJKLZXCVBNM1234567890_-'),0,13);
}
while(file_exists($randomname.".jpg"));
$uploaddir = 'C:\Users\USER\YandexDisk\maxim-gay\localhost\POSTPHOTO/';
$uploadfile = $uploaddir . $randomname . ".jpg";
if($_FILES['userfile']['size']<400000 && $_FILES['userfile']['size']!=0)
{
	if ($_FILES['userfile']['type'] == "image/jpeg" )
	{
		    list($width, $height) = getimagesize($_FILES['userfile']['tmp_name']);//получаем ширину и высоту файла
            $img200 = imagecreatetruecolor(200,200);
            
			if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) 
			{
            echo "Файл корректен и был успешно загружен.\n";
            } 
	}

}
?>