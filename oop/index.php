<?php
    require_once("Animal.php");
    require_once("Frog.php");
    
    $sheep = new Animal("shaun");
    echo "Nama Hewan: $sheep->name <br>"; // "shaun"
    echo "Jumlah kaki: $sheep->legs <br>"; // 2
    echo "Berdarah Dingin: $sheep->cold_blooded <br>"; // false

    $kodok = new Frog("buduk");
    echo "Nama Hewan: $kodok->name <br>";
    echo "Jumlah kaki: $kodok->legs <br>";
    echo "Berdarah Dingin: $kodok->cold_blooded <br>";
    $kodok->jump() ; // "hop hop"

    $sungokong = new Ape("kera sakti");
    echo "Nama Hewan: $sungokong->name <br>";
    echo "Jumlah kaki: $sungokong->legs <br>";
    echo "Berdarah Dingin: $sungokong->cold_blooded <br>";
    $sungokong->yell(); // "Auooo"
?>