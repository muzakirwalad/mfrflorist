<?php
// 1. membuat koneksi
include_once("koneksi.php");

// 2. mengambil seluruh nilai input dan dimasukkan ke variabel
$id = $_POST['id'];
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];

// 3. membuat query update
$qry = "UPDATE stok SET kode='$kode', nama='$nama', jumlah='$jumlah' WHERE id='$id'";

// 4. menjalankan query
$simpan = mysqli_query($con, $qry);

// 5. Check for errors
if (!$simpan) {
    // Display error and exit
    echo "Error: " . mysqli_error($con);
    exit();
}

// 6. Redirect on success
header("Location: stockbarang.php");
exit();
?>
