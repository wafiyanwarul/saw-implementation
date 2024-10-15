<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Kriteria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Input Kriteria</h2>
        <form action="../action/insert_kriteria.php" method="post">
            <div class="mb-3">
                <label for="nm_kriteria" class="form-label">Nama Kriteria</label>
                <input type="text" class="form-control" id="nm_kriteria" name="nm_kriteria" placeholder="Masukkan nama kriteria" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
