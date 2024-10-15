<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Bobot</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Input Bobot</h2>
        <form action="../action/insert_bobot.php" method="post">
            <div class="mb-3">
                <label for="id_kriteria" class="form-label">Pilih Kriteria</label>
                <select class="form-select" id="id_kriteria" name="id_kriteria" required>
                    <option value="">-- Pilih Kriteria --</option>
                    <?php
                    // Mengambil data kriteria dari database
                    include '../config.php';
                    $result = $conn->query("SELECT id_kriteria, nm_kriteria FROM kriteria");
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row['id_kriteria'] . "'>" . $row['nm_kriteria'] . "</option>";
                        }
                    } else {
                        echo "<option disabled>Tidak ada kriteria tersedia</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="value" class="form-label">Value Bobot</label>
                <input type="text" class="form-control" id="value" name="value" placeholder="Masukkan value bobot" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
