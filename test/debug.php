<?php
//phpinfo();
include('../conf.php');
$srok = "2019-07-25";
$date = "2020-04-25";
$user = new DataBase();

$user->test_end($date, $srok);
?>