<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1c - Bentuk Tangga</title>
    <style>
        .container {
            display: grid;
            grid-template-columns: repeat(3, 50px); /* 3 kolom, karena di baris terbawah ada A, B, dan C */
            grid-template-rows: repeat(3, 50px); /* 3 baris untuk tiap level tangga */
            gap: 10px;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
        }
        .box {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 50px;
            height: 50px;
            border: 1px solid black;
        }
        /* Baris pertama: satu huruf 'A' di kolom pertama */
        .box:nth-child(1) {
            grid-column: 1 / span 1;
            grid-row: 1 / span 1;
        }
        /* Baris kedua: dua huruf, 'A' dan 'B' */
        .box:nth-child(2) {
            grid-column: 1 / span 1;
            grid-row: 2 / span 1;
        }
        .box:nth-child(3) {
            grid-column: 2 / span 1;
            grid-row: 2 / span 1;
        }
        /* Baris ketiga: tiga huruf, 'A', 'B', dan 'C' */
        .box:nth-child(4) {
            grid-column: 1 / span 1;
            grid-row: 3 / span 1;
        }
        .box:nth-child(5) {
            grid-column: 2 / span 1;
            grid-row: 3 / span 1;
        }
        .box:nth-child(6) {
            grid-column: 3 / span 1;
            grid-row: 3 / span 1;
        }
    </style>
</head>
<body>

<?php
// Variabel huruf
$A = "A";
$B = "B";
$C = "C";
?>

<div class="container">
    <!-- Baris 1 -->
    <div class="box"><?php echo $A; ?></div>

    <!-- Baris 2 -->
    <div class="box"><?php echo $A; ?></div>
    <div class="box"><?php echo $B; ?></div>

    <!-- Baris 3 -->
    <div class="box"><?php echo $A; ?></div>
    <div class="box"><?php echo $B; ?></div>
    <div class="box"><?php echo $C; ?></div>
</div>

</body>
</html>
