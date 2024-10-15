<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Matrix Keputusan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Input Matrix Keputusan</h2>
        <form action="../action/insert_matrixkeputusan.php" method="post">
            <div class="mb-3">
                <label for="id_alternatif" class="form-label">Pilih Alternatif</label>
                <select class="form-select" id="id_alternatif" name="id_alternatif" required>
                    <option value="">-- Pilih Alternatif --</option>
                    <?php
                    // Mengambil data alternatif dari database
                    include '../config.php';
                    $result = $conn->query("SELECT id_alternatif, nm_alternatif FROM alternatif");
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row['id_alternatif'] . "'>" . $row['nm_alternatif'] . "</option>";
                        }
                    } else {
                        echo "<option disabled>Tidak ada alternatif tersedia</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="id_bobot" class="form-label">Pilih Bobot</label>
                <select class="form-select" id="id_bobot" name="id_bobot" required>
                    <option value="">-- Pilih Bobot --</option>
                    <?php
                    // Mengambil data bobot dari database
                    $result = $conn->query("SELECT id_bobot, id_kriteria, value FROM bobot");
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row['id_bobot'] . "'>Kriteria ID: " . $row['id_kriteria'] . " - Bobot: " . $row['value'] . "</option>";
                        }
                    } else {
                        echo "<option disabled>Tidak ada bobot tersedia</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="id_skala" class="form-label">Pilih Skala</label>
                <select class="form-select" id="id_skala" name="id_skala" required>
                    <option value="">-- Pilih Skala --</option>
                    <?php
                    // Mengambil data skala dari database
                    $result = $conn->query("SELECT id_skala, keterangan, value FROM skala");
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row['id_skala'] . "'>Skala: " . $row['keterangan'] . " - Value: " . $row['value'] . "</option>";
                        }
                    } else {
                        echo "<option disabled>Tidak ada skala tersedia</option>";
                    }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
