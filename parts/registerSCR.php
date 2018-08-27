
<?php
include_once "libs/rb.php";//подключаем rb.php
require_once "setting.php";//подключаем файл с настройками setting.php
require_once "db.php";// коннект ту датабейз 
$data=$_POST;
?>
<body> <div class="page" style="font-size: 30px; width: 1216px; vertical-align: middle;">
<?php
if(isset($data['Do_reg']))
{
    if(!preg_match("/^[a-zA-Z0-9 ]+$/",$data['login']))

    {
        $err[] = "Логин может состоять только из букв английского алфавита и цифр";
    }
    if(R::count('users',"login = ?", array(trim($data['login']))) > 0)
    {
    $err[] = "Пользователь с таким логином уже существует";
    }

    if(strlen($data['password']) > 30 || strlen($data['password'])<7)
    {
    $err[] = "Пароль не может быть меньше 7 и больше 30 символов";
    }
    if(strlen($data['login']) > 15 || strlen($data['login'])<3)
    {
    $err[] = "login не может быть меньше 3 и больше 15 символов";
    }
    if($data['password']!=$data['password_v'])
    {
    $err[] = "Пароли не совпадают";
    }
    if(R::count('users',"email = ?", array($data['Email'])) > 0)
    {
    $err[] = "Пользователь с таким e-mail адрессом уже существует";  
    }
    if( !preg_match("/^((([0-9A-Za-z]{1}[-0-9A-z\.]{1,}[0-9A-Za-z]{1})|([0-9А-Яа-я]{1}[-0-9А-я\.]{1,}[0-9А-Яа-я]{1}))@([-0-9A-Za-z]{1,}\.){1,2}[-A-Za-z]{2,})$/u",trim($data['email'])))  
    {
    $err[] ="Ошибочный формат EMAIL-адреса !";
    }
}

if(empty($err))
{
 $user = R::dispense('users');
 $user->name = $data['name'];
 $user->login = trim($data['login']);
 $user->password = password_hash($data['password'],PASSWORD_DEFAULT);
 $user->phone = $data['phone'];
 $user->email = $data['email'];
 $user->status = 0;
 R::store($user); ?><?php
        echo '<br>';
        echo '<div style="text-align:center; color:#27ae60;">Успешная регистрация</div>';
        echo '<font color="red"><center>';
        echo "<br>";
        echo "Похоже у вас не работает java script";
        echo '</center></font>';

}
else
{
	    echo '<font color="red"><center>';
	    echo "<br>";
	    echo "Похоже у вас не работает JavaScript";
        foreach($err AS $error)
        {
        echo '<br>';
        print $error;
        }
        echo '</center></font>';

}
?>
<a href="http://localhost" ><div class="mainButton" style="margin-left: 508px; margin-top: 15px;">На главную</div></a>
 </div>
 <script>document.location.href='http://localhost'</script>
</body>
