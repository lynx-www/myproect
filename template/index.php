<?php
function renderTemplate($template, $param = false) {
    ob_start();
    if ($param) {
        /*
    foreach ($param as $p){
        extract($p);
    }
        */
    } 
    include($template);
    
    var_dump($param);
}


// двумерный массив со списком записей
$items_list = [];

// HTML код главной страницы
$page_content = renderTemplate('main.php', ['items' => $items_list]);

// окончательный HTML код
$layout_content = renderTemplate('layout.php',
['content' => $page_content, 'title' => 'Дневник наблюдений за погодой']);

// вывод на экран итоговой страницы
print($layout_content);