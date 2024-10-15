<?php
include '../config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_kriteria = $_POST['id_kriteria'];
    $value = $_POST['value'];

    $sql = "INSERT INTO bobot (id_kriteria, value) VALUES ('$id_kriteria', '$value')";

    if ($conn->query($sql) === TRUE) {
        echo "Bobot berhasil ditambahkan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
