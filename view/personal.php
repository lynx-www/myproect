<?php
include('conf.php');
$guid = $_GET['guid'];
//echo $guid;
$user = new DataBase();
$p = $user->one('PERS_ID', 'u_passwd_otd_post', $guid);
?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-4">
         <?php
         foreach($p as $pers){
         ?>
         <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt=""> 
         
         <form>
  <div class="form-group row">
    <label for="exampleInputEmail1"></label>
    <h4><?=$pers['famely'].' '.$pers['name'].' '.$pers['patron']?></h4>
    <hr>
  </div>

  <div class="form-group row">
    <label for="inputLogin" class="col-sm-2 col-form-label">Логин</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword" placeholder="Password" value="<?=$pers['login']?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputPassword" placeholder="Password" value="<?=$pers['email']?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Пароль</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputPassword" placeholder="Password" value="<?=$pers['psswd']?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Отдел</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputPassword" placeholder="Password" value="<?=$pers['u_otdels']?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Должность</label>
    <div class="col-sm-10">
    <select class="form-select form-select-lg mb-3" aria-label=".form-select-sm example">
  <option selected>Open this select menu</option>
  <option value="1">Заместитель генерального директора по вопросам регламентации и автоматизации бизнес-процессов</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Добавочный</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputPassword" placeholder="Добавочный" value="<?=$pers['dob']?>">
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Сохранить</button>
</form>
         <?php }
         ?>
           
        </div>
    </div>
</div>



