<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Olahraga Isa</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php
$servername = "localhost";
$username = "root"; // Username default di XAMPP
$password = ""; // Password default biasanya kosong
$dbname = "db_isa";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
echo "Koneksi ke database berhasil!";
?>
<h2>Contoh Tabel</h2>
    <table border="1">
        <tr>
            <th>id_barang</th>
            <th>nama barang</th>
            <th>stok</th>
            <th>harga beli</th>
            <th>harga jual</th>
        </tr>
        <tr>
            <td>1</td>
            <td>celana</td>
            <td>123</td>
            <td>50000</td>
            <td>60000</td>
        </tr>
        <tr>
            <td>2</td>
            <td>sepatu</td>
            <td>123</td>
            <td>150000</td>
            <td>200000</td>
        </tr>
        <tr>
            <td>3</td>
            <td>kaos kaki</td>
            <td>400</td>
            <td>20000</td>
            <td>25000</td>
        </tr>
        <tr>
            <td>4</td>
            <td>raket</td>
            <td>123</td>
            <td>150000</td>
            <td>200000</td>
        </tr>
        <tr>
            <td>5</td>
            <td>bola</td>
            <td>10</td>
            <td>300000</td>
            <td>400000</td>
        </tr>
        
    </table>
    
</body>
</html>

