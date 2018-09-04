<?php
define ('SMALL_width' , '260'); // ширина картинки
define ('SMALL_height' , '260'); // высота картинки
do
{
$randomname = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGJKLZXCVBNM1234567890_-'),0,13);
}
while(file_exists($randomname.".jpg"));
$uploaddir = 'POSTPHOTO/';
$uploadfile = $uploaddir . $randomname . ".jpg";
if($_FILES['userfile']['size']<400000 && $_FILES['userfile']['size']!=0)
{
	if ($_FILES['userfile']['type'] == "image/jpeg" )
	{
		    list($width, $height) = getimagesize($_FILES['userfile']['tmp_name']);//получаем ширину и высоту файла
            $imgRES = imagecreatetruecolor(SMALL_width,SMALL_height);
            $imgPOST = imagecreatefromjpeg($_FILES['userfile']['tmp_name']);
            $interest = 1;
            if ( $height > $width )
            	{
            	if ( $height > 260 )
            		{             	
            		$interest = (SMALL_width * 100) / $width; // находим процент сжатия картинки если она шире
            	    $widthRESIZE = (int)(($width / 100) * $interest) ; // находим новые размеры и приводим их в инт (ширина)
                    $heightRESIZE = (int)(($height / 100) * $interest);// находим новые размеры и приводим их в инт (высота) 
                    } 
                if ( $height < 260 )
                	{
                	$interest =  ((SMALL_height - $height) * 100) / $height;// находим процент растягивания картинки (высота)
                    $widthRESIZE = (int)((($width / 100) * $interest) + $width); // находим новые размеры и приводим их в инт (ширина)
                    $heightRESIZE = (int)((($height / 100) * $interest) + $height);// находим новые размеры и приводим их в инт (высота)	
                	}
            	}
            if ( $height < $width  )
            {
            	if ( $width > 260 )
            		{             	
            		$interest = (SMALL_width * 100) / $width; // находим процент сжатия картинки если она шире
            	    $widthRESIZE = (int)(($width / 100) * $interest) ; // находим новые размеры и приводим их в инт (ширина)
                    $heightRESIZE = (int)(($height / 100) * $interest);// находим новые размеры и приводим их в инт (высота) 
                    } 
                if ( $width  < 260 )
                	{
                	$interest =  ((SMALL_height - $width) * 100) / $width;// находим процент растягивания картинки (высота)
                    $widthRESIZE = (int)((($width / 100) * $interest) + $width); // находим новые размеры и приводим их в инт (ширина)
                    $heightRESIZE = (int)((($height / 100) * $interest) + $height);// находим новые размеры и приводим их в инт (высота)	
                	}
            }
            if ( $height == $width )
            {
            	if ( $height > 260 )
            	{
                $interest = (SMALL_width * 100) / $width; // находим процент сжатия картинки если она шире
            	$widthRESIZE = (int)(($width / 100) * $interest) ; // находим новые размеры и приводим их в инт (ширина)
                $heightRESIZE = (int)(($height / 100) * $interest);// находим новые размеры и приводим их в инт (высота)
            	}
                if ( $height < 260 )
                {
	            $interest =  ((SMALL_height - $height) * 100) / $height;// находим процент растягивания картинки (высота)
                $widthRESIZE = (int)((($width / 100) * $interest) + $width); // находим новые размеры и приводим их в инт (ширина)
                $heightRESIZE = (int)((($height / 100) * $interest) + $height);// находим новые размеры и приводим их в инт (высота)	
                }
            }

            if ( $height == 260 && $width ==260 )
            {
            imagejpeg($imgPOST,$uploadfile);
            }
            else
            {
            $coordX = (SMALL_height - $heightRESIZE) / 2; // координаты картинки по x
            $coordY = (SMALL_width - $widthRESIZE) / 2; // координаты по оси y
        if(imagecopyresampled($imgRES,$imgPOST,$coordY,$coordX,0,0,$widthRESIZE,$heightRESIZE,$width,$height))
        {
        	imagejpeg($imgRES,$uploadfile);
        	include_once "libs/rb.php";//подключаем rb.php
            require_once "setting.php";//подключаем файл с настройками setting.php
            require_once "db.php";// коннект ту датабейз 
            $user = R::findOne('users', 'id = ?', array($_SESSION['id']));
            $user->photo = $randomname . ".jpg";
            R::store($user);
        }
            }
	}

}
?>
