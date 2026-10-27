<?php
$data_penduduk = [
    ["Kecamatan" => "Moyudan", "Luas" => 27.62, "Jumlah Penduduk" => 31497],
    ["Kecamatan" => "Minggir", "Luas" => 27.27, "Jumlah Penduduk" => 29886],
    ["Kecamatan" => "Seyegan", "Luas" => 26.63, "Jumlah Penduduk" => 47129],
    ["Kecamatan" => "Godean",  "Luas" => 26.84, "Jumlah Penduduk" => 72028],
    ["Kecamatan" => "Gamping", "Luas" => 29.25, "Jumlah Penduduk" => 108675]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Luas dan Jumlah Penduduk - PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .description {
            margin-bottom: 15px;
            color: #333;
        }
        table {
            border-collapse: collapse;
            width: 50%;
            min-width: 400px;
            border: 1px solid #ccc;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #092135;
            color: white;
            font-weight: bold;
        }
        /* Efek Striped */
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        /* Efek Hover */
        tr:hover {
            background-color: #e0e0e0;
        }
    </style>
</head>
<body>

    <h2>Data Luas Wilayah dan Jumlah Penduduk</h2>
    <p class="description">
        Tabel di bawah ini menampilkan informasi mengenai luas wilayah (km²) dan jumlah penduduk di beberapa kecamatan yang berada di Kabupaten Sleman.
    </p>

    <table>
        <thead>
            <tr>
                <th>Kecamatan</th>
                <th>Luas (km²)</th>
                <th>Jumlah Penduduk (Jiwa)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data_penduduk as $row): ?>
            <tr>
                <td><?= $row['Kecamatan']; ?></td>
                <td><?= $row['Luas']; ?></td>
                <td><?= number_format($row['Jumlah Penduduk'], 0, ',', '.'); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>