<?php
include '../config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_alternatif = $_POST['id_alternatif'];
    $id_bobot = $_POST['id_bobot'];
    $id_skala = $_POST['id_skala'];

    $sql = "INSERT INTO matrixkeputusan (id_alternatif, id_bobot, id_skala) VALUES ('$id_alternatif', '$id_bobot', '$id_skala')";

    if ($conn->query($sql) === TRUE) {
        echo "Matrix Keputusan berhasil ditambahkan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
