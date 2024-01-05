<?php

function weekend(string $begin, string $end): int {
    $startTimestamp = strtotime($begin);
    $endTimestamp = strtotime($end);

    $weekendCount = 0;

    while ($startTimestamp <= $endTimestamp) {
        // Проверяем, является ли текущий день субботой или воскресеньем
        if (date('N', $startTimestamp) >= 6) {
            $weekendCount++;
        }

        // Переходим к следующему дню
        $startTimestamp = strtotime('+1 day', $startTimestamp);
    }

    return $weekendCount;
}

// Пример использования
$beginDate = '06.06.2020';
$endDate = '06.06.2020';

$result = weekend($beginDate, $endDate);

echo "Количество выходных дней в заданном диапазоне: $result";

?>
