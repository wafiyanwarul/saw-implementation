<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Bobot</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Data Bobot</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Bobot</th>
                    <th>ID Kriteria</th>
                    <th>Value Bobot</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../config.php';
                $result = $conn->query("SELECT * FROM bobot");
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row['id_bobot'] . "</td><td>" . $row['id_kriteria'] . "</td><td>" . $row['value'] . "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>Tidak ada data bobot</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
