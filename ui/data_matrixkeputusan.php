<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Matrix Keputusan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Data Matrix Keputusan</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Matrix</th>
                    <th>ID Alternatif</th>
                    <th>ID Bobot</th>
                    <th>ID Skala</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../config.php';
                $result = $conn->query("SELECT * FROM matrixkeputusan");
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row['id_matrix'] . "</td><td>" . $row['id_alternatif'] . "</td><td>" . $row['id_bobot'] . "</td><td>" . $row['id_skala'] . "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Tidak ada data matrix keputusan</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>