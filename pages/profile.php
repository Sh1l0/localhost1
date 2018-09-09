<?php 
if(isset($_SESSION['user'])){
include_once "libs/rb.php";//подключаем rb.php
require_once "setting.php";//подключаем файл с настройками setting.php
require_once "db.php";// коннект ту датабейз 
 ?>

<!DOCTYPE html>
<html>

	


<body>
<div class='page' style="min-height: 850">
<script type="text/javascript">
		 function foo() {
        var f = document.getElementById("files");
        if(f.value != "")
        {
 			$("#loadf").hide();
 			$("#loaded").show();
					
        	        }
    }

</script>
	<div class="flown">
		<form enctype="multipart/form-data" action="" method="POST">
   		 <input  type="hidden" name="MAX_FILE_SIZE" value="400000" />
   		 <div>
   		 <label id = "loadf" for="files">+</label>
   		 <label id = "loaded" for="files" style="display: none;">Картинка выбрана</label>
   		</div>
   		<input id="files" style="visibility: hidden;" name="userfile" type="file" accept="image/jpeg" onchange="foo()" />
   		 <br>
   		 <input id="sendfoto" type="submit" value="Отправить файл" />
		</form>
		
	</div>
	<div id="backgr">
	</div>

	<div style="display: inline-block; position: relative;">
		<img src='<?php $user = R::findOne('users', 'id = ?', array($_SESSION['id'])); echo "http://localhost/POSTPHOTO/". $user->photo; ?>' width="250"; height="250" class="profPhoto"/>
		<div class="changePhoto">Сменить фото</div>




	</div>
	<div class="profileInfo">
		<ul>


			<li>

				<?php echo $_SESSION['name'];  ?>
				
			</li>


			<li id="additionalInfo">Почта: <?php echo $_SESSION['email'];  ?></li>
			<li id="additionalInfo">Телефон: <?php echo $_SESSION['phone'];  ?></li>
		</ul>
		<div class="profileSpisok" id="oB">Мои объявления</div><div class="profileSpisok" id="publications">Мои статьи</div><div class="profileSpisok" id="liked">Понравившееся</div>
		<table class="oB">

			<tr id="headoB"><th>Дата</th><th id="central1">Заголовок</th><th id="right">Просмотры/Комментарии</th></tr>

			<?php  
            //***********************************************************************************************************************************************************
            //************************************************************************************************************************************************************
            $exist = 0;
			$ads = R::findLike('ads', array('user_id' => array($_SESSION['id']) ) );
			foreach ($ads as $ads1)
			{
			$exist = 1;
            echo '<tr id="oB2"><th>',$ads1->data,'</th><th id="central2">',$ads1->name,'</th><th id="right">',$ads1->views,'/',$ads1->comments,'</th></tr>';
			}
			if(!$exist)
				echo "<div id='oB2' style='width: 680px; position:absolute; margin-left: 20px; margin-top:30px; text-align:center; background-color:#e1e1e1;'>вы не давали ни статьи ни объявления</div>";
			//************************************************************************************************************************************************************
			//************************************************************************************************************************************************************
			?>






		</table>
		<table class="Pubs">
			<tr id="headoB"><th>Дата</th><th id="central1">Заголовок</th><th id="right">Просмотры/Комментарии</th></tr>
			<tr id="oB2"><th>27.92.1992</th><th id="central2">Заголовок</th><th id="right">Просмотры/Комментарии</th></tr>
			<tr id="oB3"><th>27.92.1992</th><th id="central3">Заголовок</th><th id="right">Просмотры/Комментарии</th></tr>
		</table>



		<table class="liked"> <!-- здесь что-то типо php цикла с выводом целой строки таблицы-->
			<tr id="headoB"><th>Дата</th><th id="central1">Заголовок</th><th id="right">Просмотры/Комментарии</th></tr>
			<tr id="oB2"><th>27.92.1992</th><th id="central2">Заголовок</th><th id="right">Просмотры/Комментарии</th></tr>
			<tr id="oB3"><th>27.92.1992</th><th id="central3">Заголовок</th><th id="right">Просмотры/Комментарии</th></tr>
		</table>
		
	</div>
	<div class="profileButton">
		<div id="profileButton" title="Добавить публикацию"><a href="writeAdvert"><img src="/img/WriteUserObject.png"></a></div>
	</div>
	</div>

<script src ="/libs/profile.js"></script>

</body>
</html>
<?php 
}
else{
	echo '<script>document.location.href = "http://localhost/register"</script>';
}
?>