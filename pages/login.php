<?php
$data=$_POST;
require_once 'parts/loginSCR.php';
if(isset($data['do_login']))
{
  verifySignUp($data);
}
?>
<!doctype html>
<html>
<head>

</head>
<body>
<div class="page" style="height: 400px; margin-top:0; width: 500px;">
    <p id="rega">Вход</p>
<form name="register" method="post" class = "register" action="">

  <li style="margin-bottom: 10px;"><div class ="fields"></div><div style="margin-left: 110px;">Логин:</div>
   <input class="registerinput" type="text" size="20" name="login" placeholder="Nagibator2005" id="login">
  </li>
 
  <li><div class ="fields"></div><div style="margin-left: 100px;">Пароль:</div>
<input class="registerinput" type="password" name="password" placeholder="****" id="pass1">
  </li>

  
   <?php if($_GET['err'] == 1) {echo '<div id="messenger">Неверно введён логин или пароль</div>';}  ?>


  <li><div ><input type="submit" name="do_login" value="войти" class="subreg" style="width: 200px; font-size: 30px; margin-left: 50px; margin-top: 10px; margin-bottom: 20px;"></div>
  </li>
  

 
  <li><a href="http://localhost"><div class="mainButton">На главную</div></a></li>
 </form>
</div>

</body>
 </html>