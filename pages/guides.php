<body>
	<div class="page" style="min-height: 800px;">
		<div class="categotyChanger1">
			<button>От создателей</button><button>Последние</button>

		</div>
		<div class= "left shadow" style="width:250px;">
		
		<div style="padding: 0px;">Популярные гайды
				<a href=""><div id="l1""><img src="http://nsk.ukrbb.net/images/avatars/upload/nsk_ukrbb_net/c142221d528ebb74568a4013d1829b09_82.jpg?1213860571" width="26" height="26">объява 1</div></a>
				<a href=""><div id="l2"><img src="http://nsk.ukrbb.net/images/avatars/upload/nsk_ukrbb_net/c142221d528ebb74568a4013d1829b09_82.jpg?1213860571" width="26" height="26">объява 2</div></a>
				<a href=""><div id="l1"><img src="http://nsk.ukrbb.net/images/avatars/upload/nsk_ukrbb_net/c142221d528ebb74568a4013d1829b09_82.jpg?1213860571" width="26" height="26">объява Чмо</div></a>
				<a href=""><div id="l2"><img src="http://nsk.ukrbb.net/images/avatars/upload/nsk_ukrbb_net/c142221d528ebb74568a4013d1829b09_82.jpg?1213860571" width="26" height="26">объява черепахи</div></a>
				<a href=""><div id="l1"><img src="https://pp.userapi.com/c834300/v834300402/13c7d4/pWC3iY7ef2g.jpg" width="26" height="26">объява Гаркунов</div></a>
		</div>
	
</div>
<div class="search2"><form>
		<input type="text" name="search2" placeholder="Испарятор 3000"style="border: 2px solid #f5f5f5;">
		<input type="submit" name="search2"  value="Найти" id="searchButton2">
	</form></div>
	
	<div id='coolPubs'>
		<?php
		include_once "libs/rb.php";//подключаем rb.php
        require_once "setting.php";//подключаем файл с настройками setting.php
        require_once "db.php";// коннект ту датабейз 
		for($id = 1; $id <= R::Count('guides')+$Count; $id++)  // Узнаем колличество статей в базе данных и пока i <= этому числу выполняем код i = i + 3;
{
		if( R::count('guides','id = ?', array($id)) == 0)
		{$id++; $Count++;}
	    $guides = R::load('guides', $id);
?>
		<div>
			<img src="<?php echo $guides->photo; ?>">
		 <span class="content2"><span><?php echo $guides->title; ?></span><br><?php echo $guides->text; ?></span><a href="fullRead<?php echo "?id=".$guides->id."&type=guides";?>"><button>Посмотреть</button></a></div>
<?php
} 
?>
	</div>
	</div>
</body>