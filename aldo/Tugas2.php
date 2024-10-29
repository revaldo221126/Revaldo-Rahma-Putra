<?php
$headers = [
    "No", 
    "Nama Budaya", 
    "Gambar", 
    "Asal Daerah", 
    "Status", 
    "Keterangan" 
];

$budaya_indonesia = [
    [
        "Nama" => "Wayang Kulit",
        "Asal Daerah" => "Jawa",
        "Status" => "Diakui",
        "Keterangan" => "Seni pertunjukan tradisional",
        "Gambar" => "img/wayang_kulit.jpg"
    ],
    [
        "Nama" => "Batik",
        "Asal Daerah" => "Jawa",
        "Status" => "Diakui",
        "Keterangan" => "Teknik pewarnaan kain",
        "Gambar" => "img/batik.jpg"
    ],
    [
        "Nama" => "Saman",
        "Asal Daerah" => "Aceh",
        "Status" => "Diakui",
        "Keterangan" => "Tari tradisional",
        "Gambar" => "img/saman.jpg"
    ],
    [
        "Nama" => "Reog Ponorogo",
        "Asal Daerah" => "Ponorogo",
        "Status" => "Diakui",
        "Keterangan" => "Seni tari dan musik",
        "Gambar" => "img/reog.jpg"
    ],
    [
        "Nama" => "Keris",
        "Asal Daerah" => "Jawa",
        "Status" => "Diakui",
        "Keterangan" => "Senjata tradisional",
        "Gambar" => "img/keris.jpg"
    ],
    [
        "Nama" => "Angklung",
        "Asal Daerah" => "Sunda",
        "Status" => "Diakui",
        "Keterangan" => "Alat musik tradisional",
        "Gambar" => "img/angklung.jpg"
    ],
    [
        "Nama" => "Tari Kecak",
        "Asal Daerah" => "Bali",
        "Status" => "Diakui",
        "Keterangan" => "Tari tradisional dengan nyanyian",
        "Gambar" => "img/tari_kecak.jpg"
    ],
    [
        "Nama" => "Pakaian Adat",
        "Asal Daerah" => "Berbagai Daerah",
        "Status" => "Diakui",
        "Keterangan" => "Pakaian tradisional sesuai daerah",
        "Gambar" => "img/pakaian_adat.jpg"
    ],
    [
        "Nama" => "Gamelan",
        "Asal Daerah" => "Jawa",
        "Status" => "Diakui",
        "Keterangan" => "Orkestra tradisional",
        "Gambar" => "img/gamelan.jpg"
    ],
    [
        "Nama" => "Ulos",
        "Asal Daerah" => "Batak",
        "Status" => "Diakui",
        "Keterangan" => "Kain tenun tradisional",
        "Gambar" => "img/ulos.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budaya Daerah Indonesia</title>
    <style>
        table {
            width: 100%; 
        }
        td, th {
            text-align: center; 
        }
    </style>
</head>
<body>
    <table border="2" cellpadding="3" cellspacing="3">
        <tr>
            <?php foreach($headers as $header): ?>
                <th><?= $header ?></th>
            <?php endforeach; ?>
        </tr>
        <?php foreach($budaya_indonesia as $index => $item) : ?>
            <tr>
                <td><?= $index + 1 ?></td> 
                <td><?= $item['Nama'] ?></td>
                <td style="display: flex; justify-content: center;"><img src="<?= $item['Gambar'] ?>" width="50" height="50"></td>
                <td><?= $item['Asal Daerah'] ?></td>
                <td><?= $item['Status'] ?></td>
                <td><?= $item['Keterangan'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
