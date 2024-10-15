<?php
include '../config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nm_alternatif = $_POST['nm_alternatif'];

    $sql = "INSERT INTO alternatif (nm_alternatif) VALUES ('$nm_alternatif')";

    if ($conn->query($sql) === TRUE) {
        echo "Alternatif berhasil ditambahkan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
