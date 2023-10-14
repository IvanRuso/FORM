<?php
    $nombre= $_POST["txtnombre"];   
    $edad= $_POST["txtedad"];
    $ocupacion= $_POST["txtocupacion"];
    $vive= $_POST["txtvive"];
    $arma= $_POST["txtarma"];
     // usamos un arreglo para almacenar  
    echo "<p>тебя зовут:" . $nombre."</p> ";
    echo "<p>ваш возраст:" . $edad."</p> ";
    echo "<p>ты по профессии:" . $ocupacion."</p> ";
    echo "<p>ты живёт:" . $vive."</p> ";
    echo "<p>тебя любимое оружие:" . $arma."</p> ";
    echo "<a href='index.php'>добро пожаловать в красную армию</a>";   
?>