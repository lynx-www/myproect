<?php 
if(isset($_GET['id']) && $_GET['id'] == 'passwd'){
  
  $stranica = 'password.php';
}
if(isset($_GET['id']) && $_GET['id'] == 'equipment'){
  echo 'equipment';
}
if(isset($_GET['id']) && $_GET['id'] == 'tel'){
  $stranica = 'tel.php';
}
if(isset($_GET['id']) && $_GET['id'] == 'users'){
  echo 'users';
}
if(isset($_GET['id']) && $_GET['id'] == 'personal'){
  $stranica = 'personal.php';
}
if(isset($_GET['id']) && $_GET['id'] == 'cartridge'){
  $stranica = 'cartridge.php';
}
if(isset($_GET['id']) && $_GET['id'] == 'device'){
  $stranica = 'device.php';
}
if(isset($_GET['submit']) && $_GET['submit'] == 'Добавить'){
  $stranica = 'add_passwd.php';
}
if(isset($_GET['submit']) && $_GET['submit'] != 'Добавить'){
  $stranica = 'password_a.php';
}
?>

<div class="d-flex flex-wrap">
<div class="order-md-1 col-md-1">
      <?php include_once('leftmenu.php'); ?>
    </div>
    <div class="order-md-3 col-md-11">
     <?php 
     if(isset($stranica)){  include  $stranica; }
     ?>
    </div>

  </div>



