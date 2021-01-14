<div class="container-fluid">
    <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    
    <a class="navbar-brand" href="#">
        <?php
        //Фильтр по алфавиту
        echo"<form method=\"GET\" name=\"letter\" id=\"letter\" enctype=\"application/x-www-form-urlencoded\">";
        foreach (range(chr(0xC0), chr(0xDF)) as $lit) {
        $str =  iconv('CP1251', 'UTF-8', $lit);
        echo "<input name=\"submit\" id=".$str." type=\"submit\" form=\"letter\" value=\"".$str."\" class=\"btn btn-primary btn-sm\">";
        }
        echo "
            <input name=\"submit\" type=\"submit\" form=\"letter\" value=\"Прочее\" style=\"width: 70px;\" class=\"btn btn-primary btn-sm\">
            <input name=\"submit\" type=\"submit\" form=\"letter\" value=\"Все\" style=\"width: 45px;\" class=\"btn btn-primary btn-sm\">
            <input name=\"submit\" type=\"submit\" form=\"letter\" value=\"Добавить\" style=\"width: 70px;\" class=\"btn btn-primary btn-sm\">
        </form>";
        //end фильтр по алфавиту
        ?>
    </a>
    <a class="navbar-brand" href="#">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    </a>
    
  </div>
</nav>
    </div>
