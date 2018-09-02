<?php
include_once 'parts/loginSCR.php';
$data=$_POST;
if(isset($data['do_login']))
{
verifySignUp($data);
}
?>


  <div style="overflow: visible; position: fixed; width: 1540px; height: 57px; left: 50%; margin-left: -770px; top:0;">
	<div class="nav-panel">
    <img src="img/logo.png" width="94" height="40" style="vertical-align: middle;">
	<a href="http://localhost/"> <div >Новости</div></a>
	<a href="store"> <div>Товары</div></a>
	<a href="interesting"> <div >Интересное</div></a>
	<a href="guides"> <div>Гайды</div></a>
	<?php 
 if(isset($_SESSION['user'])) 
  {

   ?> <a href="profile"><div id ="log"><img src="/img/images.png" style="width: 30; heidth:30; vertical-align:middle; border: 2px solid #e24f43"> <?php echo $_SESSION['login']; ?></div></a>
   <a href="exit"><div style="padding-right: 5px; padding-left: 5px;"  id="exit"><img src="/img/exit.png" width="40" height="40" style="vertical-align: middle;"></div></a>
  </div>

</div><?php
      
    }
    else{
       
?><div id ="log""> Авторизироваться</div>

</div>
<ul>
   
  <form name="login" method="post" class = "login" action="">
 <li class="loginButton">
      <div >Авторизироваться</div>
    </li>
  <li>Логин:
   <input type="text" size="20" name="login" style="margin-left: 12px" placeholder="Nagibator2005">
  </li>
  
  <li>Пароль:
<input type="password" name="password" placeholder="1234" style="margin-left: -5px;">
  </li>
  <li><div class = "submit"><input type="submit" value="Войти" name="do_login"></div>
  </li>
  <li style="margin-top: 10px;"> <a href="register" class="href" style="text-align: center;">Создать аккаунт</a></li>
 </form>
 <?php

?>

</ul>  

</div>
    <?php
              }
    ?>
 


<script src ="/libs/nav.js"></script>




 