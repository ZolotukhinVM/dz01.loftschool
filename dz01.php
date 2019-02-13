<?php
// task 01
$name = "Виктор";
$age = "33";
echo "Меня зовут: " . $name . "<br>";
echo "Мне " . $age . " лет <br>";
echo "\"!|\\/'\"";

echo "<hr>";

// task 02
const ALL = 80;
const MARKERS = 23;
const PENCILS = 40;
echo $paints = ALL - MARKERS - PENCILS;

echo "<hr>";

// task 03
$age = 99;
$arYoungAge = range(1, 17);
$arWorkAge = range(18, 65);
if (in_array($age, $arWorkAge)) {
    echo "Вам еще работать и работать";
} elseif ($age > 65) {
    echo "Вам пора на пенсию";
} elseif (in_array($age, $arYoungAge)) {
    echo "Вам еще рано работать";
} elseif ($age < 1) {
    echo "Неизвестный возраст";
}

echo "<hr>";

// task 04
$day = 7;
switch ($day) {
    case ($day > 1 and $day <= 5):
        echo "Это рабочий день";
        break;
    case ($day == 6 or $day == 7):
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
        break;
}

echo "<hr>";

// task 05
$bmw = array("model" => "X5", "speed" => 120, "doors" => 5, "year" => 2015);
$toyota = array("model" => "corolla", "speed" => 150, "doors" => 5, "year" => 2018);
$opel = array("model" => "astra", "speed" => 100, "doors" => 5, "year" => 2011);
$arCars = ["BMW" => $bmw, "TOYOTA" => $toyota, "OPEL" => $opel];
foreach ($arCars as $key => $arValue) {
    echo "CAR " . $key . "<br>";
    echo $arValue["model"] . " " . $arValue["speed"] . " " . $arValue["doors"] . " " . $arValue["year"] . "<br>";
}

echo "<hr>";

// task 06
echo "<table border=.gitignore cellpadding=5>";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 10; $j++) {
        $multiplication = $i * $j;
        echo "<td>";
        if (($i % 2 == 0) and ($j % 2 == 0)) {
            echo "(" . $multiplication . ")";
        } elseif (($i % 2 != 0) and ($j % 2 != 0)) {
            echo "[" . $multiplication . "]";
        } else {
            echo $multiplication;
        }
        echo "</td>";

    }
    echo "</tr>";
}
echo "</table>";