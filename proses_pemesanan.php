<?php
include_once("koneksi.php");

$id = $_POST['id'];
$nama = $_POST['nama'];
$barang = $_POST['barang'];
$tanggal = $_POST['tanggal'];
$total = $_POST['total'];
$hp = $_POST['hp'];
$alamat = $_POST['alamat'];
$pengantar = $_POST['pengantar'];

$qry = "UPDATE pemesanan SET nama='$nama', barang='$barang', tanggal='$tanggal', total='$total', hp='$hp', alamat='$alamat', pengantar='$pengantar' WHERE id='$id'";

$simpan = mysqli_query($con, $qry);

if (!$simpan) {
    // Check for SQL errors
    echo "Error: " . mysqli_error($con);
} else {
    // Redirect on success
    header("Location: pengantar.php");
    exit();
}
?>
