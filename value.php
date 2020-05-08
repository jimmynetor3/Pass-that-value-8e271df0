<?php
function addItemToArray($array, $item) {
    $newArray = $array;
    $newArray[] = $item;

    return $newArray;
}

print_r(addItemToArray(['frikandel', '14'], 'test1'));

function addItemToArray2($array, $item) {
    $array[] = $item;

    return $array;
}

print_r(addItemToArray2(['13', '14'], 'test2'));

?>