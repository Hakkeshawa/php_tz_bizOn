<?php

function search(array $data, int $number): int {
    $left = 0;
    $right = count($data) - 1;

    while ($left <= $right) {
        $mid = $left + floor(($right - $left) / 2);

        if ($data[$mid] == $number) {
            return $mid;
        }

        if ($data[$mid] < $number) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }

    return -1;
}

// Пример использования
$sortedArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$numberToFind = 7;

$result = search($sortedArray, $numberToFind);

if ($result != -1) {
    echo "Элемент $numberToFind найден в массиве. Индекс: $result";
} else {
    echo "Элемент $numberToFind отсутствует в массиве.";
}

?>
