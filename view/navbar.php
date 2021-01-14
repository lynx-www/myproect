
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php /* echo $pageData['title']; */ ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse navbar-static-top fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/gad/login.php">ГТП</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="?id=users">Пользователи</a></li>
      <li><a href="?id=passwd">Пароли</a></li>
      <li><a href="?id=cartridge">Картриджи</a></li>
      <li><a href="?id=device">Оборудование</a></li>
      <li><a href="?id=tel">Справочник</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Ресурсы <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="https://dhcp-srv:10000/dhcpd/?xnavigation=1">DHCP</a></li>
          <li><a href="http://wiki/doku.php?id=gtp:gtp">Wiki</a></li>
          <li><a href="http://www.obuh.akma.spb.su/apgonline/">Генератор паролей</a></li>
          <li><a href="http://ocs-srv.obuh.akma.spb.su/ocsreports/">ocs-inventory</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['login']; ?></a></li>
      <li><a href="logout.php" >Logout<span class="glyphicon glyphicon-log-in"></span></a></li>
    </ul>
  </div>
</nav>
  

