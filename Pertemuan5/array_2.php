<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Associative Array</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
            text-align: center;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e9e9e9;
        }
        .container {
            text-align: center;
            margin-top: 50px;
        }
        h2 {
            color: #333;
        }
    </style>
</head>
<body>
    <?php
    $Dosen = [
        'name' => 'Elok Nur Handana',
        'domisili' => 'Malang',
        'jenis_kelamin' => 'Perempuan'
    ];
    ?>
    <table>
            <tr>
                <th>Field</th>
                <th>Value</th>
            </tr>
            <tr>
                <td><strong>Nama</strong></td>
                <td><?php echo $Dosen['name']; ?></td>
            </tr>
            <tr>
                <td><strong>Domisili</strong></td>
                <td><?php echo $Dosen['domisili']; ?></td>
            </tr>
            <tr>
                <td><strong>Jenis Kelamin</strong></td>
                <td><?php echo $Dosen['jenis_kelamin']; ?></td>
            </tr>
        </table>
</body>
</html>