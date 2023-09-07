<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "ecampuz";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT tb_mahasiswa.mhs_nama
        FROM tb_mahasiswa
        JOIN tb_mahasiswa_nilai ON tb_mahasiswa.mhs_id = tb_mahasiswa_nilai.mhs_id
        JOIN tb_matakuliah ON tb_mahasiswa_nilai.mk_id = tb_matakuliah.mk_id
        WHERE tb_matakuliah.mk_kode = 'MK303'
        ORDER BY tb_mahasiswa_nilai.nilai DESC
        LIMIT 1";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "Nama Mahasiswa dengan Nilai Tertinggi dalam MK303: " . $row["mhs_nama"];
} else {
    echo "Tidak ada data yang sesuai.";
}

$conn->close();
