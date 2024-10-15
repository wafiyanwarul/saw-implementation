<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Skala</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Data Skala</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Skala</th>
                    <th>Keterangan</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../config.php';
                $result = $conn->query("SELECT * FROM skala");
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row['id_skala'] . "</td><td>" . $row['keterangan'] . "</td><td>" . $row['value'] . "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>Tidak ada data skala</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>