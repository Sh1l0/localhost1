<!DOCTYPE html>
<html>
<body>

<div class= "page" style="min-height: 850">
<div class= "left shadow">
		<div>Полезное
			
				<a href=""><div id="l1">Ахуенная статья 1</div></a>
				<a href=""><div id="l2">Ахуенная статья 2</div></a>
				<a href=""><div id="l1">Ахуенная статья 3</div></a>
				<a href=""><div id="l2">Ахуенная статья 4</div></a>
				<a href=""><div id="l1">Ахуенная статья 5</div></a>
			
		</div>
		<div>Опрос
				<a ><div id="ask" style="text-align:center;">Название опроса</div></a>
				<a ><div id="ask" ">|||||||||||</div></a>
				<a ><div id="ask">||||||</div></a>
				
		</div>
		<div style="padding: 0px;">ТОП активных пользователей
				<a href=""><div id="l1""><img src="http://nsk.ukrbb.net/images/avatars/upload/nsk_ukrbb_net/c142221d528ebb74568a4013d1829b09_82.jpg?1213860571" width="26" height="26">Донатер 1</div></a>
				<a href=""><div id="l2"><img src="http://nsk.ukrbb.net/images/avatars/upload/nsk_ukrbb_net/c142221d528ebb74568a4013d1829b09_82.jpg?1213860571" width="26" height="26">Донатер 2</div></a>
				<a href=""><div id="l1"><img src="http://nsk.ukrbb.net/images/avatars/upload/nsk_ukrbb_net/c142221d528ebb74568a4013d1829b09_82.jpg?1213860571" width="26" height="26">Хуила Чмо</div></a>
				<a href=""><div id="l2"><img src="http://nsk.ukrbb.net/images/avatars/upload/nsk_ukrbb_net/c142221d528ebb74568a4013d1829b09_82.jpg?1213860571" width="26" height="26">Говно черепахи</div></a>
				<a href=""><div id="l1"><img src="https://pp.userapi.com/c834300/v834300402/13c7d4/pWC3iY7ef2g.jpg" width="26" height="26">Максим Гаркунов</div></a>
		</div>
	
</div>


<?php 
include_once "libs/rb.php";//подключаем rb.php
require_once "setting.php";//подключаем файл с настройками setting.php
require_once "db.php";// коннект ту датабейз 
$color = 0; // значение цвета. Отвечает за разноцветные стили. (0,1,2).
$Count = 0;

for($id = 1; $id <= R::Count('news')+$Count; $id++)  // Узнаем колличество статей в базе данных и пока i <= этому числу выполняем код i = i + 3;
{
	if( R::count('news','id = ?', array($id)) == 0)
		{$id++; $Count++;}
?>  

<div class = "news shadow">
	
	<div class="title" >  

                                            <?php 
                                            $News = R::load('news', $id);
                                            echo $News -> title;
                                            ?>    
	</div>


	<div id ="switcb1">

		<div id ="newsPhoto" >
	<img  src="<?php echo $News->photo;?>" style="height: 200px; width: 200px; margin-left: 6px; margin-top: 6px; "> <!-- Было $NewsTitle->photo -->
		</div>
	
		<div class ="content" id = "short" >
	 		 <script>
	 	var NewsText = '<?php echo $News->text; ?>';
	 	var shortText = NewsText.substr(0, 350);
	 	shortText += '...';
	 	console.log(shortText);
	 	document.write(shortText);
	 		</script>
		</div>
	 	
	 	<div class ="content" id = "full">
		<?php echo $News->text; ?>
		</div>
	
	</div>

	<div class="more">
	<img src="../img/more.png" width="88" height="44"></div>
	
</div>
<?php 
$color++;
if($color>2)
	{$color = 0;}
}
?>


</div></div>
<script src ="/libs/news.js"></script>
</body>
</html>