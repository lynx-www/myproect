<?php
include('conf.php');
$user = new DataBase();
echo 'Добавить сотрудника';
?>
<!-- HTML-форма, оформленная с помощью стилей Bootstrap 4 -->
<form method="post" action="http://192.168.1.56/gad/login.php?id=passwd" autocomplete="off">
<div class="form-group">
  <select class="form-control form-control-lg">
  <option>Выберите сотрудника</option>
</select>
  </div>
  <div class="form-group">
  <select class="form-control form-control-lg">
  <option>Выберите отдел</option>
</select>
  </div>
  <div class="form-group">
  <select class="form-control form-control-lg">
  <option>Выберите должность</option>
</select>
  </div>
  <div class="form-group">
  <select class="form-control form-control-lg">
  <option>Выберите компьютер</option>
</select>
  </div>
  <div class="form-group">
    <label for="email">Email адрес</label>
    <input name="email" type="email" class="form-control" id="email" placeholder="Введите email">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input name="password" type="password" class="form-control" id="password" placeholder="Введите пароль">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input name="password" type="password" class="form-control" id="password" placeholder="Введите пароль">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input name="password" type="password" class="form-control" id="password" placeholder="Введите пароль">
  </div>
  <div class="form-group">
  <select class="form-control form-control-lg">
  <option>Large select</option>
</select>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="save">
    <label name="save" class="form-check-label" for="save">запомнить меня</label>
  </div>
  <button type="submit" class="btn btn-primary">Добавить</button>
</form>

