<?php

function fiborow(int $limit): string {
    $result = '';
    
    $first = 0;
    $second = 1;
    
    while ($first <= $limit) {
        $result .= $first . ' ';
        $temp = $first + $second;
        $first = $second;
        $second = $temp;
    }

    return rtrim($result);
}

// Пример использования
$limit = 10;
$result = fiborow($limit);

echo "Последовательность Фибоначчи до $limit: $result";

?>
