<?php

function areAnagrams($str1, $str2) {
    // Удаляем пробелы и преобразуем строки в нижний регистр
    $str1 = strtolower(str_replace(' ', '', $str1));
    $str2 = strtolower(str_replace(' ', '', $str2));

    // Сортируем буквы в строках
    $sortedStr1 = str_split($str1);
    $sortedStr2 = str_split($str2);
    sort($sortedStr1);
    sort($sortedStr2);

    // Сравниваем отсортированные строки
    return implode('', $sortedStr1) === implode('', $sortedStr2);
}

// Пример использования
$inputStr1 = "listen";
$inputStr2 = "silent";

if (areAnagrams($inputStr1, $inputStr2)) {

    echo "Строки являются анаграммами.";
} else {
    echo "Строки не являются анаграммами.";
}
// сначало я удаляю проблемы и привожу 2 строки без заглавных букв(к нинжему регистру), а потом код сортирует буквы в обеих строках и сравнивает отсортированные строки. Ну и если строки совпадают то они являются анаграммами, а если не совпадают, тогда это не анаграмма.
?>