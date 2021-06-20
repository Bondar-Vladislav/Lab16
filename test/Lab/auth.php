<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$pass = md5($pass."dcfvtgbyhnjumk1451dfsdvrdg45");

$mysql = new mysqli('localhost','root','root','lab');

$result= $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
$user = $result->fetch_assoc();
if(count($user) == 0)
{
    echo "Нет зарегистрированных пользователей";
    exit();
}
setcookie('user', $user['name'], time() + 3600, "/");



$mysql->close();
header('Location: /');
?>
