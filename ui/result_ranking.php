<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Rangking Alternatif</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Hasil Rangking Alternatif</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Alternatif</th>
                    <th>Nama Alternatif</th>
                    <th>Nilai Rangking</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../config.php';
                $query = "SELECT * FROM vrangking";
                $result = $conn->query($query);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row['id_alternatif'] . "</td>
                                <td>" . $row['nm_alternatif'] . "</td>
                                <td>" . number_format($row['rangking'], 4) . "</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>Tidak ada data yang ditemukan</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
