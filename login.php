<?php
session_start();
if(isset($_SESSION['login'])){
    include('view/navbar.php');
    include('view/body.php');
}
else { header('Location: /gad'); }




