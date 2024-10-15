<?php
include '../config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $keterangan = $_POST['keterangan'];
    $value = $_POST['value'];

    $sql = "INSERT INTO skala (keterangan, value) VALUES ('$keterangan', '$value')";

    if ($conn->query($sql) === TRUE) {
        echo "Skala berhasil ditambahkan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
