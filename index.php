<?php

require 'function.php';

$students = [
    ['name' => 'Andi Santono', 'nim' => '0111111', 'value' => 95],
    ['name' => 'Budi Kurniawan', 'nim' => '0111112', 'value' => 80],
    ['name' => 'Candi Badur', 'nim' => '0111113', 'value' => 78],
    ['name' => 'Denis Caputra', 'nim' => '0111114', 'value' => 76],
    ['name' => 'Erik Manahel', 'nim' => '0111115', 'value' => 86],
    ['name' => 'Fatril Nusonto', 'nim' => '0111116', 'value' => 50],
    ['name' => 'Gayama Harustia', 'nim' => '0111117', 'value' => 20],
    ['name' => 'Isma Lotono', 'nim' => '0111118', 'value' => 30],
    ['name' => 'Jami Sayir', 'nim' => '0111119', 'value' => 70],
    ['name' => 'Karni Buato', 'nim' => '0111110', 'value' => 65],
];

$values = values($students);
$index = 1;

?>

<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-3 mx-auto">
            <div class="col">
                <h1 class="text-center">Daftar Nilai Mahasiswa</h1>
            </div>
        </div>
        <div class="row mt-3 mx-auto w-75">
            <div class="col">
                <table class="table table-bordered">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Mahasiswa</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Nilai</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Grade</th>
                            <th scope="col">Predikat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($students as $student) : ?>
                            <tr>
                                <th scope="row" class="text-center"><?= $index++; ?></th>
                                <td><?= $student['name']; ?></td>
                                <td class="text-center"><?= $student['nim']; ?></td>
                                <td class="text-center"><?= $student['value']; ?></td>
                                <td class="text-center"><?= description($student['value']); ?></td>
                                <td class="text-center"><?= grade($student['value']); ?></td>
                                <td class="text-center"><?= predicate(grade($student['value'])); ?></td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <th scope="row" colspan="3" class="text-center">Nilai Tertinggi</th>
                            <td class="text-center" colspan="4"> <?= max($values); ?></td>
                        </tr>
                        <tr>
                            <th scope="row" colspan="3" class="text-center">Nilai Terendah</th>
                            <td class="text-center" colspan="4"> <?= min($values); ?></td>
                        </tr>
                        <tr>
                            <th scope="row" colspan="3" class="text-center">Nilai Rata-rata</th>
                            <td class="text-center" colspan="4"> <?= average($values); ?></td>
                        </tr>
                        <tr>
                            <th scope="row" colspan="3" class="text-center">Jumlah Mahasiswa</th>
                            <td class="text-center" colspan="4"> <?= count($values); ?></td>
                        </tr>
                        <tr>
                            <th scope="row" colspan="3" class="text-center">Jumlah Keseluruhan Nilai</th>
                            <td class="text-center" colspan="4"> <?= total($values); ?></td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>