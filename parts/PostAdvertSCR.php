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
/*if(trim($data['editor1']) == '' || strlen($data['editor1']) < 25)
	{$err[] = "Текст статьи ".strlen($data['editor1'])."< 25 символов";}*/
if(strlen($data['titleText']) > 50)
    {$err[] = "Название статьи сильно длинное".strlen($data['titleText']).">50)";}
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

        	switch($data['typeOfPublication'])    //этот свитч отвечает за открытую страничку
{
	     case '1':
         $ads = R::dispense('ads');
         $ads -> title = $data['titleText'];
         $ads -> type = $data['type'];
         $ads -> description = $data['editor1'];
         //$ads -> appearance = $data['appearance'];
         //$ads -> grade = $data['grade'];
         $ads -> data = date("y.m.d");
         $ads -> user_id = $_SESSION["id"];
         //$ads -> /**/ = $data[''];
         //$ads -> /**/ = $data[''];
         R::store($ads);
         break;
	     case '2':
         $guides = R::dispense('guides');
         $guides -> title = $data['titleText'];
         $guides -> description = $data['editor1'];
         $guides -> user_id = $_SESSION["id"];
         //$guides -> appearance = $data['appearance'];
         //$guides -> grade = $data['grade'];
         $guides -> data = date("y.m.d");
         //$guides -> /**/ = $data[''];
         //$guides -> /**/ = $data[''];
         R::store($guides);
         break;
	     case '3':
         $article = R::dispense('article');
         $article -> title = $data['titleText'];
         $article -> description = $data['editor1'];
         $article -> user_id = $_SESSION["id"];
         //$article -> appearance = $data['appearance'];
         //$article -> grade = $data['grade'];
         $article -> data = date("y.m.d");
         //$article -> /**/ = $data[''];
         //$article -> /**/ = $data[''];
         R::store($article);
         break;
	     case '4':
         $joke = R::dispense('joke');
         $joke -> title = $data['titleText'];
         $joke -> description = $data['editor1'];
         //$joke -> appearance = $data['appearance'];
         //$joke -> grade = $data['grade'];
         $joke -> user_id = $_SESSION["id"];
         $joke -> data = date("y.m.d");
         //$joke -> /**/ = $data[''];
         //$joke -> /**/ = $data[''];
         R::store($joke);
         break;
         default:
         $err[] = "Не выбран тип публикации";
         
}

        }
}
}
?>