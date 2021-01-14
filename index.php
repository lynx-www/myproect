<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php /* echo $pageData['title']; */ ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="public/css/bootstrap.min.css">
  <script src="public/js/jquery.min.js"></script>
  <script src="public/js/bootstrap.min.js"></script>
</head>
<body>
<?php
//session_start();
//echo $_SERVER['REQUEST_URI']."<br>";
include('conf.php');

$user = new DataBase();
//$dt = $user->login($_POST['login'], $_POST['password']);
//var_dump($user);

?>

<div class="container d-flex justify-content-center h-100">
    <div class="row">
        <div class="col-sm-8 col-md-12 col-md-offset-5">
            <h1 class="text-center login-title">Войти</h1>
            <div class="account-wall">
            <form method="post" class="form-group">
                Логин: <input type="text" class="form-control" name="login" /><br />
                Пароль: <input type="password" class="form-control" name="password" /><br />
                <input type="submit" name="submit" class="form-control" value="Войти" />
            </form>
            </div>
        </div>
    </div>
</div>

