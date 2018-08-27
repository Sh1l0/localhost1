<?php
function verifySignUp($data)
{
if(isset($data['do_login']))
{
include_once "libs/rb.php";//подключаем rb.php
require_once "setting.php";//подключаем файл с настройками setting.php
require_once "db.php";// коннект ту датабейз 
$errors = array();
$user = R::findOne('users', 'login = ?', array($data['login']));
if($user)
{
  if(password_verify($data['password'], $user['password']))
{

  $_SESSION['user'] = $user;
  $_SESSION['login'] = $user->login;
  $_SESSION['name'] = $user->name;
  $_SESSION['email'] = $user->email;
  $_SESSION['phone'] = $user->phone;
  $_SESSION['id'] = $user->id;
  $r=1;
}
else{
  $errors[]='Неверный пароль!';
}

}
else{
  $errors[]='Неверный логин!';
}
}
if($r==1)
{
echo "<script>document.location.href = 'http://localhost'</script>";
}
  if(!empty($errors))
{

  echo array_shift($errors);
  echo "<script>document.location.href = 'http://localhost/login?err=1'</script>";
}
}
?>