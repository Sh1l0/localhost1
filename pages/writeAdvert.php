<!DOCTYPE html>
<html lang="ru">
<head>
	<script src="http://localhost/libs/ckeditor.js"></script>
	<script src="http://localhost/libs/adapters/jquery.js"></script>
	<script src="http://localhost/libs/styles.js"></script>
	<script src="http://localhost/libs/ru.js"></script>

 </head>
<body>
<div class="page" style="min-height: 850">
	
<form id="writeText" method="post" action="">
	<div id="headerWrite">
	Название<br><input type="text" name="titleText" placeholder="Введите название статьи/гайда/объявления">
</div>
	<input type="textarea"  name="editor1">
		
	</textarea>
	<script>
		CKEDITOR.replace('editor1');
		function chg(el){
			var displaying = (el.options[el.selectedIndex].innerHTML);
   			if(displaying== 'Объявление'){
   	$('#selectType').fadeIn(200);

   }
   else
   	$('#selectType').fadeOut(200);
}
	</script>
	<select form="writeText" selected value="Выберите тип публикации" id="select" onchange="chg(this)">
		<option disabled selected value="Выберите тип публикации">Выберите тип публикации</option>
		<option  value="1" name="advert">Объявление</option>
		<option value="2" name="guide">Гайд</option>
		<option value="3" name="publication">Статья</option>
		<option value="4" name="joke">Анекдот</option>
	</select>
	<select form="writeText" selected value="Выберите тип товара" style="display: none; border: 2px solid #757575;" id="selectType">
		<option disabled selected value="Выберите тип товара">Выберите тип товара</option>
		<option  value="coil" name="coil">Намотка</option>
		<option value="plate" name="plate">плата</option>
		<option value="mech" name="mech">Мехмод</option>
		<option value="drip" name="drip">Дрипка</option>
		<option value="back" name="back">Бак</option>
		<option value="rdtsomething" name="rdtsomething">Дрипкобак</option>
		<option value="ego" name="ego">Егошка</option>
		<option value="water" name="water">Жижа</option>
		<option value="other" name="other">Не указывать</option>

	</select>
	<br><input type="submit" name="writeThis" class="submitWriting" value="Опубликовать">
</form>
</div>
<?php
$data=$_POST;
require_once 'parts/PostAdvertSCR.php';
if(isset($data['writeThis']))
{
  verifyPostAdvert($data);
}
?>
</body>
</html>
