<?php

$user = "claudio";
$senha = "12345678";

$username = $_GET['username'];
$password = $_GET['password'];

//entrar

if($user == $username)
{
    
  header('Location: main.php');
    
    
}
else
{
  header('Location: erro.php');
    
    
}

if($senha == $password)
{
    
  header('Location: main.php');
    
    
}
else
{
  header('Location: erro.php');
    
    
}

setcookie($user, $senha, time() +(86400));




?>