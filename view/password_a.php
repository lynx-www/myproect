<?php
include('conf.php');
$user = new DataBase();
$pass = $_GET['submit'];

$u = $user->select_filtr('u_passwd_otd_post', $pass);

//var_dump($u);
include('navfind.php');
//Фильтр по алфавиту c поиском
?>



<section class="sticky-top" style="top: 80px;">
  
  <table class="table table-sm table-striped table-reflow">
  <thead class="thead">
    <tr>
      <th scope="col">№</th>
      <th scope="col">ФИО</th>
      <th scope="col">Компьютер</th>
      <th scope="col">Логин</th>
      <th scope="col">Пароль</th>
      <th scope="col">E-mail</th>
      <th scope="col">Подразделение</th>
      <th scope="col">Должность</th>

    </tr>
  </thead>
  <tbody>
  <?php 
  $i = 1;
  foreach ($u as $users){
       
      echo '<tr><th scope="row">'.$i.'</th>';
      echo '<td><a href=?id=personal&guid='.$users['PERS_ID'].'>'.$users['famely'].' '.$users['name'].' '.$users['patron'].'</td>'; 
      echo '<td>'.$users['comp'].'</td>';
      echo '<td>'.$users['login'].'</td>';
      echo '<td>'.$users['psswd'].'</td>';
      echo '<td>'.$users['email'].'</td>';
      echo '<td>'.$users['u_otdels'].'</td>'; 
      echo '<td>'.$users['posts'].'</td>';
      $i++;
      }?>
      
  </tbody>
  </table>
  
</section>