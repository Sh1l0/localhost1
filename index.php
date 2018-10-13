<?php
session_start();
if(isset($_FILES['userfile']['size']) && isset($_SESSION['user'])&&isset($_POST['postPhotoLK']))
{
header('Content-Type: image/jpeg');
include "parts/PostPhotoSCR.php";
header('Location: http://localhost/profile');
}
if($ind==0)
{
?>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="http://localhost/styles/style.css">
	<script type="text/javascript" src="http://localhost/libs/jquery-3.3.1.min.js"></script>
    <script src="http://localhost/libs/mainfile"></script>
 	<title>Vape.fm</title>
     <link rel="shortcut icon" href="/img/ico.png" type="image/x-icon">
 </head>
<body>
 <!-- <audio autoplay>
    <source src="PhotoNews/music.mp3" type="audio/mpeg">
   </audio>   -->
</body>
<?php
}
?>
<?php
$ind = 0;
$URL_Path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$URL_Parts = explode('/', trim($URL_Path, '/'));

 if(count($URL_Parts)>1) //если есть модули, выводим 404
{include"pages/404.php";}//если нету модулей то выводим веб-странички
else
{
switch($URL_Parts[0])    //этот свитч отвечает за открытую страничку
{
case '':
         include "pages/main.php";
         break;
case 'register':
         include "pages/register.php";
         $ind = 1;
         break;
case 'store':
         include "pages/store.php";
         break;
case 'registerSCR':
        include  "parts/registerSCR.php";
        break;
case 'profile':
        include  "pages/profile.php";
        break;
case 'exit':
        include  "parts/exit.php";
        break;
case 'writeAdvert':
        include "pages/writeAdvert.php";
        break;
case 'login':
        include "pages/login.php";
        $ind = 1;
        break;
case 'interesting':
        include "pages/interesting.php";
        break;
case 'guides':
        include "pages/guides.php";
        break;
case 'fullRead':
        include "pages/fullRead.php";
        break;
default:
         include"pages/404.php";
         $ind = 1;

}
if($ind == 0)
{
    echo '<body>';
include "pages/nav.php";
include 'pages/footer.php';
echo '</body>';
}
}
?>
