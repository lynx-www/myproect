<?php

    class DataBase {

    function __construct(){
      $dbhost = 'localhost';
      $dbuser = 'apache'; 
      $dbpwd  =   '123'; 
      $dbname =   'gtp';

      $mysqli =new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
      $this->db = $mysqli;
    }

    public function login($login, $password){
    session_start();
      $enrypt = md5(md5($password));
      $auth = "SELECT * FROM users WHERE login ='".$login."' AND password = '".$enrypt."'";
        //echo $auth;
      $result = $this->db->query($auth);
     // $row = $result->fetch_array();
         /* определение числа рядов в выборке */
    $row_cnt = $result->num_rows;

   // printf("В выборке %d рядов.\n", $row_cnt);
     // if(isset($result)){
      if($row_cnt != 0 ){
          
        $_SESSION['login'] = $login;
        if(isset($_SESSION['login'])){
             header('Location: login.php'); 
            }
        else{ session_start(); 
            session_unset();
            session_destroy(); 
            header('Location: /gad/public/index.php');
            echo 'error'; 
              exit();
            }
      }
      else{ 
          if($login != '' AND $password !=''){
              echo '<div class="container d-flex justify-content-center h-100">Не правильный логин или пароль</div>';
          }
        }
  }

  public function select($table, $sort=NULL){
    $array = array();
    $sql = "SELECT * FROM {$table}";
    //echo $sql;
   // $conn = $this->db->query();
    $result = $this->db->query($sql);
    while ($row = $result->fetch_array(MYSQLI_BOTH)){
        $array[] = $row;
    }
    return $array;
  }

  public function select_filtr($table, $where=NULL){
    $array = array();
    $sql = "SELECT * FROM {$table} WHERE famely LIKE '".$where."%'";
    $result = $this->db->query($sql);
    while ($row = $result->fetch_array(MYSQLI_BOTH)){
        $array[] = $row;
    }
    return $array;
  }

  public function one($param, $table, $where){
    $array = array();
    $sql = "SELECT * FROM {$table} WHERE {$param} = '".$where."'";
   // echo $sql;
   // $conn = $this->db->query();
    $result = $this->db->query($sql);
    while ($row = $result->fetch_array(MYSQLI_BOTH)){
        $array[] = $row;
    }
    return $array;
  }

  public function add($param){  //Добавление записей в таблицу

  }


  public function interval($srok, $date)
  {
    echo "Срок оплаты: ".$srok." Дата оплаты: ".$date."<br>";
    if($srok >= $date){echo "оплата вовремя"; exit; }
    $sql = "SELECT * FROM stavka";
    $result = $this->db->query($sql);
    $srok_ = $srok;
    $i = 0;
    while ($row = $result->fetch_array(MYSQLI_BOTH)){
      echo "begin = ".$row['begin']." end = ".$row['end']." ".$srok_."<br>";
     // var_dump($srok_);
     if($srok_ < $date){
        if(($srok_ >= $row['begin']) && ($srok_ <= $row['end'])){
         
          echo "Нашли нужный период ".$row['begin']." end = ".$row['end']." srok_ = ".$srok_."<br>";
          if($srok_ >= $date){ echo "Закончили "; exit; }
          if(($date >= $row['begin']) && ($date <= $row['end'])){ 
            echo "Нашли конец период ".$row['begin']." end = ".$row['end']." srok_ = ".$date."<br>";
          }
          //переадть значение srok_ в другую переменную, для вычитания, при этом сохранив тип srok_
       /*   $srok1 = DateTime::createFromFormat('Y-m-d', $srok_);
          $begin = DateTime::createFromFormat('Y-m-d', $row['begin']);
        $i = $srok1->diff($begin);
        $d = $i->format('%d');
        $newDate = new DateTime($srok_);
        $newDate->add(new DateInterval('P'.$d.'D')); // P1D means a period of 1 day
        $fomattedDate = $newDate->format('Y-m-d');
        $srok_ = $fomattedDate;*/
        echo "srok_".$srok_."<br>";
        
        }
      }

     
      
      /*
      if (($srok_ts >= $begin) && ($user_ts <= $end)){
              //1. Ищем в нужный диапазон для срока оплаты
              if (($srok_ts >= $begin) && ($user_ts <= $end)){
                echo $srok_ts.' '.$date_from_user.'<br>';
                echo $row['stavka'].' '.$row['day']."<br>";
                echo "В диапазоне ".date("Y-m-d",$begin).' '.date("Y-m-d",$end);
                $interval = $end - $srok_ts;
                $int = ($interval / (60 * 60 * 24));
                echo '<br>interval начала '.$int.' ';
                echo 'peny '. $int * $row['day'].'<br>'; 

            }
           
     
      }
       */

          
    }

   

}
public function return_begin($date=NULL){
  if(!isset($date)){$date = date("Y-m-d");}
  $sql = "SELECT * FROM stavka";
  $result = $this->db->query($sql);
 
  while ($row = $result->fetch_array(MYSQLI_BOTH)){
      if(($date >= $row['begin']) && ($date <= $row['end'])){
        $id = $row['id'];
        return $id;
        exit;
      }
   }
}

public function count_day($id_srok, $srok, $id_date){
  $sql = "SELECT * FROM stavka";
  $result = $this->db->query($sql);
 
  while ($row = $result->fetch_array(MYSQLI_BOTH)){
    //От срока вычесть end, получить по периоду кол-во дней и пени. 
    $srok1 = DateTime::createFromFormat('Y-m-d', $srok);
    $end = DateTime::createFromFormat('Y-m-d', $row['end']);
    $i = $srok1->diff($end);
    echo "d = ".$d = $i->format('%d');
    if((($row['id']) <= $id_date) && (($row['id']) >= $srok)){
      echo "Нашли нужный период ".$row['begin']." end = ".$row['end']."<br>";
    }
    
  }
}
public function my_diff($date1, $date2){
  $d1 = DateTime::createFromFormat('Y-m-d', $date1);
  $d2 = DateTime::createFromFormat('Y-m-d', $date2);
$i = $d1->diff($d2);
$d = $i->format('%d');
return $d;
}

public function test_end($date, $srok){
  $sql = "SELECT * FROM stavka";
  $result = $this->db->query($sql);
 
  while ($row = $result->fetch_array(MYSQLI_BOTH)){

  if($row['end'] <= $date){   //Ищем дату платежа
    if($row['begin'] >= $srok) { //Ищем период срока
      echo $row['begin']." ".$row['end']."<br>";
      echo $s = $this->my_diff($row['end'], $row['begin']);
      //Высчитать пени
      echo " ".$s * $row['day'];
    }
    else{ $srok_ = $row['end']; $srok_id = $row['id'];
    
    }
    var_dump($row['end']); } 
  else{ $date_ = $row['begin']; //Нашли дату платежа
    //Сюда функцию подсчета дней от даты до конца
    break;  }
  


  
    
  }
  echo "srok = ".$srok_." ".$srok_id." date  = ".$date_;
  
}
//Function add_date
function add_day($date, $porog){
  echo date("Y-m-d",$porog);
  $datetime = new DateTime(date("Y-m-d",$date));
  while($date < $porog){
    echo $date.'<br>';
    $datetime->modify('+1 day');
    $date = $datetime->format('Y-m-d');
  }
 
  return $date;
  }

public function start_date($srok){
  echo "Срок оплаты ".$srok."<br>";
  $sql = "SELECT * FROM stavka";
  $result = $this->db->query($sql);
  
  while ($row = $result->fetch_array(MYSQLI_BOTH)){
             // Convert to timestamp
     $begin = strtotime($row['begin']);
     $end = strtotime($row['end']);
     $now = strtotime(date('Y-m-d'));
     if(empty($end)){ $end = $now; }
     $srok_ts = strtotime($srok);

    if(($srok_ts >= $begin) && ($srok_ts <= $end)){
      echo $row['stavka'].' '.$row['day']." begin ".date("Y-m-d",$begin)." end = ".date("Y-m-d",$end)."<br>";
   echo $srok_ts."<br>";
   //echo $d = $this->add_day($srok_ts, $end);
      
    }
}

}



    }


if((isset($_POST['login'])) AND (isset($_POST['password']))){
    $login = $_POST['login'];
    $password = $_POST['password'];

    $obj=new DataBase();
    $obj->login($login, $password);
}
 
?>
