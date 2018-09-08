<?php
function verifyPostAdvert($data)
{
  if(isset($data['writeThis']))
{
include_once "libs/rb.php";//подключаем rb.php
include_once "setting.php";//подключаем файл с настройками setting.php
include_once "db.php";// коннект ту датабейз 
$err = array();
if($data['titleText'] == '' || trim($data['titleText']) == '' || strlen($data['titleText']) < 7)
	{$err[] = "Название статьи сильно короткое (<7)";}
if($data['editor1'] == '' || trim($data['editor1']) == '' || strlen($data['editor1']) < 25)
	{$err[] = "Текст статьи < 25 символов";}

         if(!empty($err))
        {
        	echo "<br><br>";
	    echo '<font color="red">';
	    echo "<br>";
	    echo "Похоже у вас не работает JavaScript";
        foreach($err AS $error)
        {
        echo '<br>';
        print $error;
        }
        echo '</font>';
        }
        else
        {

        	switch(/*название раздела*/)    //этот свитч отвечает за открытую страничку
{
	     case '':
         /*один из разделов*/
         break;
         default:
         /*ошибка*/
}

        }
}
}
?>