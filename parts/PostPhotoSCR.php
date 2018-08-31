<?php
define ('SMALL_width' , '260'); // ширина картинки
define ('SMALL_height' , '260'); // высота картинки
do
{
$randomname = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGJKLZXCVBNM1234567890_-'),0,13);
}
while(file_exists($randomname.".jpg"));
$uploaddir = 'C:\Users\USER\Desktop\site\localhost\POSTPHOTO/';
$uploadfile = $uploaddir . $randomname . ".jpg";
if($_FILES['userfile']['size']<400000 && $_FILES['userfile']['size']!=0)
{
	if ($_FILES['userfile']['type'] == "image/jpeg" )
	{
		    list($width, $height) = getimagesize($_FILES['userfile']['tmp_name']);//получаем ширину и высоту файла
            $img200 = imagecreatetruecolor(SMALL_width,SMALL_height);
            $imgPOST = imagecreatefromjpeg($_FILES['userfile']['tmp_name']);
            if ( $width > SMALL_width)
            {$interest = (SMALL_width * 100) / $width;} // находим процент сжатия картинки

            $widthRESIZE = (int)(($width / 100) * $interest) ; // находим новые размеры и приводим их в инт (ширина)
            $heightRESIZE = (int)(($height / 100) * $interest);// находим новые размеры и приводим их в инт (высота)
            $coordX = (SMALL_height - $heightRESIZE) / 2; // координаты картинки по x
            $coordY = (SMALL_width - $widthRESIZE) / 2; // координаты по оси y
        if(imagecopyresampled($img200,$imgPOST,$coordX,$coordY,0,0,$widthRESIZE,$heightRESIZE,$width,$height))
        {
			 if (file_put_contents($uploadfile,$img200)) 
			    {
                echo "Файл корректен и был успешно загружен.\n";
                } 
        }
	}

}
?>