<?php

function rgb(int $r, int $g, int $b): int {
    // Убеждаемся, что значения находятся в диапазоне 0-255
    $r = max(0, min(255, $r));
    $g = max(0, min(255, $g));
    $b = max(0, min(255, $b));

    // Упаковываем цветовые компоненты в целое число
    $packedColor = ($r << 16) | ($g << 8) | $b;

    return $packedColor;
}

// Пример использования
$red = 255;
$green = 0;
$blue = 255;

$result = rgb($red, $green, $blue);

echo "Упакованный цвет: $result";

?>
