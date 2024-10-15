<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Matrix Keputusan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Hasil Matrix Keputusan</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Matrix</th>
                    <th>Alternatif (ID - Nama)</th>
                    <th>Kriteria (ID - Nama)</th>
                    <th>Bobot (ID - Value)</th>
                    <th>Skala (Nilai - Keterangan)</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../config.php';
                $query = "SELECT * FROM vmatrixkeputusan";
                $result = $conn->query($query);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row['id_matrix'] . "</td>
                                <td>" . $row['id_alternatif'] . " - " . $row['nm_alternatif'] . "</td>
                                <td>" . $row['id_kriteria'] . " - " . $row['nm_kriteria'] . "</td>
                                <td>" . $row['id_bobot'] . " - " . $row['value'] . "</td>
                                <td>" . $row['nilai'] . " - " . $row['keterangan'] . "</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Tidak ada data yang ditemukan</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>