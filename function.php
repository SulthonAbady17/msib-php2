<?php 

function description(int $value) : string {
    return $value >= 65 ? 'Lulus' : 'Gagal';
}

function grade(int $value) : string {
    if ($value > 80) return 'A';
    if ($value > 70) return 'B';
    if ($value > 50) return 'C';
    if ($value > 20) return 'D';
    return 'E';
}

function predicate(string $grade) : string {
    $predicate = '';

    switch ($grade) {
        case 'A' :
            $predicate = 'Memuaskan';
        break;
        case 'B' :
            $predicate = 'Bagus';
        break;
        case 'C' :
            $predicate = 'Cukup';
        break;
        case 'D' :
            $predicate = 'Kurang';
        break;
        case 'E' :
            $predicate = 'Buruk';
        break;
    }

    return $predicate;
}

function values(array $students) : array {
    return array_column($students, 'value');
}

function total(array $values) : int {
    return array_sum($values);
}

function average(array $values) : int {
    return  total($values) / count($values);
}