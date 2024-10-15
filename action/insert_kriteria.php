<?php
include '../config.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nm_kriteria = $_POST['nm_kriteria'];

    $sql = "INSERT INTO kriteria (nm_kriteria) VALUES ('$nm_kriteria')";

    if ($conn->query($sql) === TRUE) {
        echo "Kriteria berhasil ditambahkan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
