<!doctype html>
<html>
<head>

</head>
<body>
<div class="page" style="height: 700px; margin-top: 0; width: 500px;">
    <p id="rega">Создание нового аккаунта</p>
<form name="register" method="post" class = "register" action="registerSCR">

  <li><div class ="fields">*</div>Придумайте логин:<br>
   <input class="registerinput" type="text" size="20" name="login" placeholder="Nagibator2005" id="login">
  </li>
  <li>Имя:<br>
   <input class="registerinput" type="text" size="20" name="name" placeholder="Арарат">   
  </li>
  <li>Номер телефона:<br>
   <input class="registerinput" type="text" size="20" name="phone" placeholder="+79972281488">
  </li>
  <li><div class ="fields">*</div>Придумайте пароль:<br>
<input class="registerinput" type="password" name="password" placeholder="****" id="pass1">
  </li>
 <li><div class ="fields">*</div>Подтвердите пароль:<br>
<input class="registerinput" type="password" name="password_v" placeholder="****" id="pass2">
  </li>
   <li><div class ="fields">*</div>email:<br>
<input class="registerinput" type="text" name="email" placeholder="ЭЩКЕРЕЕЕЕ" id="email">
  </li>
  
   <div id="messenger">* - обязательные поля</div>
  <li><div ><input type="submit" name="Do_reg" value="Зарегестрироваться" class="subreg"></div>
  </li>
  <br>

 
  <li><a href="http://localhost"><div class="mainButton">На главную</div></a></li>
 </form>
</div>
<script src ="/libs/register.js"></script>
</body>
 </html>