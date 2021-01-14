<?php
include('conf.php');
$sql = "SELECT document.number, reestr.date, shets.*, u_passw.famely, u_passw.name AS p_name, u_passw.patron, model.name FROM document, `reestr`, shets,  u_passw, model WHERE reestr.id_shets = shets.id AND document.id = shets.id_shets 
AND u_passw.PERS_ID = reestr.id_staff AND model.id = shets.id_model ORDER BY `document`.`number` ASC";
$sql = "SELECT * FROM reestr_shets";
$device = new DataBase();
$d = $device->select('reestr');

foreach($d as $t){
    echo $t['id_staff'].'<br>';
}
/*
$user = new Auth(new DataBase);
$p = $user->device($guid);
*/