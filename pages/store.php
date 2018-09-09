<!DOCTYPE html>
<html>
<body>
	<?php
		include_once "libs/rb.php";//подключаем rb.php
        require_once "setting.php";//подключаем файл с настройками setting.php
        require_once "db.php";// коннект ту датабейз 
	?>
<div class="page" style="min-height: 800px;">
	<div class= "left shadow" style="width:250px;">
		
		<div style=" padding: 0px;">ТОП объявлений
				<a href=""><div id="l1""><img src="http://nsk.ukrbb.net/images/avatars/upload/nsk_ukrbb_net/c142221d528ebb74568a4013d1829b09_82.jpg?1213860571" width="26" height="26">объява 1</div></a>
				<a href=""><div id="l2"><img src="http://nsk.ukrbb.net/images/avatars/upload/nsk_ukrbb_net/c142221d528ebb74568a4013d1829b09_82.jpg?1213860571" width="26" height="26">объява 2</div></a>
				<a href=""><div id="l1"><img src="http://nsk.ukrbb.net/images/avatars/upload/nsk_ukrbb_net/c142221d528ebb74568a4013d1829b09_82.jpg?1213860571" width="26" height="26">объява Чмо</div></a>
				<a href=""><div id="l2"><img src="http://nsk.ukrbb.net/images/avatars/upload/nsk_ukrbb_net/c142221d528ebb74568a4013d1829b09_82.jpg?1213860571" width="26" height="26">объява черепахи</div></a>
				<a href=""><div id="l1"><img src="https://pp.userapi.com/c834300/v834300402/13c7d4/pWC3iY7ef2g.jpg" width="26" height="26">объява Гаркунов</div></a>
		</div>
	
</div>
<div class="view">
		<button id="priceBut" style="vertical-align: middle;">Цена</button>
		<button id="plusBut" style="vertical-align: middle;">Плюсы</button>
		<button id="dateBut" style="vertical-align: middle;">Дата</button>
		<button id="viewArrow"><img src="../img/viewArrow.png" width="25" height="28" style="vertical-align: middle;" ></button>		
	</div>
	<div class="search"><form>
		<input type="text" name="search" placeholder="Испарятор 3000"style="box-shadow:  3px 5px 10px grey inset; border: 0px;">
		<input type="submit" name="search"  value=" " id="search">
	</form></div>
	
<div class="storeSubjects shadow">
	<div class="title" >  title
	</div>


	<div id ="switcb1">

		<div id ="newsPhoto" >
	<img  src="<?php echo $News->photo;?>" style="height: 200px; width: 200px; margin-left: 6px; margin-top: 6px; "> <!-- Было $NewsTitle->photo -->
		</div>
	
		<div class ="content" id = "short" >
	 		Sample text
		</div>	
	</div>
</div>
<div class="storeSubjects shadow">
	<div class="title" >  title
	</div>


	<div id ="switcb1">

		<div id ="newsPhoto" >
	<img  src="<?php echo $News->photo;?>" style="height: 200px; width: 200px; margin-left: 6px; margin-top: 6px; "> <!-- Было $NewsTitle->photo -->
		</div>
	
		<div class ="content" id = "short" >
	 		Sample text
		</div>	
	</div>
</div>
<div class="storeSubjects shadow">
	<div class="title" >  title
	</div>


	<div id ="switcb1">

		<div id ="newsPhoto" >
	<img  src="<?php echo $News->photo;?>" style="height: 200px; width: 200px; margin-left: 6px; margin-top: 6px; "> <!-- Было $NewsTitle->photo -->
		</div>
	
		<div class ="content" id = "short" >
	 		Sample text
		</div>	
	</div>
</div>
<div class="storeSubjects shadow">
	<div class="title" >  title
	</div>


	<div id ="switcb1">

		<div id ="newsPhoto" >
	<img  src="<?php echo $News->photo;?>" style="height: 200px; width: 200px; margin-left: 6px; margin-top: 6px; "> <!-- Было $NewsTitle->photo -->
		</div>
	
		<div class ="content" id = "short" >
	 		Sample text
		</div>	
	</div>
</div>
<div class="storeSubjects shadow">
	<div class="title" >  title
	</div>


	<div id ="switcb1">

		<div id ="newsPhoto" >
	<img  src="<?php echo $News->photo;?>" style="height: 200px; width: 200px; margin-left: 6px; margin-top: 6px; "> <!-- Было $NewsTitle->photo -->
		</div>
	
		<div class ="content" id = "short" >
	 		Sample text
		</div>	
	</div>
</div>




<div class="filter">Фильтры</div>

	<form name="filter" method="get" class="fSlide shadow">
		Цена:<br>
		от <input id="price" type="text" name="startPrice" placeholder="0" style="margin-left: 2px;"><br>
		до <input id="price" type="text" name="endPrice" placeholder="99 999">
		<br>
		<div class ="viezd"> <div style="margin-bottom: 10px; margin-top: 10px;">Тип:</div> 
		<label class="checkbox"><input type="checkbox" name="mehmod" style="display: block; margin: 0px;"><div class="checkboxText"></div><div class="check">Мехмод</div></label>
		<label class="checkbox"><input type="checkbox" name="plata" style="display: block; margin: 0px;"><div class="checkboxText"></div><div class="check">Плата</div></label>
		<label class="checkbox"><input type="checkbox" name="ego" style="display: block; margin: 0px;"><div class="checkboxText"></div><div class="check">Егошка</div></label>
		<label class="checkbox"><input type="checkbox" name="drip" style="display: block; margin: 0px;"><div class="checkboxText"></div><div class="check">Дрипка</div></label>
		<label class="checkbox"><input type="checkbox" name="bak" style="display: block; margin: 0px;"><div class="checkboxText"></div><div class="check">Бак</div></label>
		<label class="checkbox"><input type="checkbox" name="coil" style="display: block; margin: 0px;"><div class="checkboxText"></div><div class="check">Намотка</div></label>
		<label class="checkbox"><input type="checkbox" name="rdta" style="display: block; margin: 0px;"><div class="checkboxText"></div><div class="check">Дрипко-бак</div></label>
		<label class="checkbox"><input type="checkbox" name="water" style="display: block; margin: 0px;"><div class="checkboxText"></div><div class="check">Жижа</div></label>
		<label class="checkbox"><input type="checkbox" name="other" style="display: block; margin: 0px;"><div class="checkboxText"></div><div class="check">Не указано</div></label>

		</div>
		<input type="submit" name="subFilters" id="subFilters" value="Приенить">
	</form>



</div>

<script src ="/libs/store.js"></script>
</body>
</html>