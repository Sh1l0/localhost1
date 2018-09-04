<?php
      require_once 'libs/rb.php'; //конектим красный боб 
      require_once 'setting.php'; //конектим конфиг
   R::setup( 'mysql:host='.$config['db']['server'].';dbname='.$config['db']['name'],$config['db']['username'],$config['db']['password']);
 @$connection = mysqli_connect(
    $config['db']['server'],
    $config['db']['username'],
    $config['db']['password'],
    $config['db']['name']
    );
    if( $connection != true)
{
echo '<cener><h1><font  color="black"><p align="center">Авторизация и регистрация на сайте временно недоступны</p></font></h1></center>';
echo mysqli_connect_error();
}//Если авторизация в MYSQL удалась не выводим ничего. Иначе объявляем краш
@mysqli_query($connection,"SET NAMES 'utf8';");
@mysqli_query($connection,"SET CHARACTER SET 'utf8';");
@mysqli_query($connection,"SET SESSION collation_connection = 'utf8_general_ci';");
?>