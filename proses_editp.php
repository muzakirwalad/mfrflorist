<?php
// 1. membuat koneksi
include_once("koneksi.php");

// 2. mengambil seluruh nilai input dan dimasukkan ke variabel
$id = $_POST['id'];
$nama = $_POST['nama'];
$barang = $_POST['barang'];
$tanggal = $_POST['tanggal'];
$total = $_POST['total'];
$hp = $_POST['hp'];
$alamat = $_POST['alamat'];
$pengantar = $_POST['pengantar'];

// 3. membuat query insert 
$qry = "UPDATE pemesanan SET nama='$nama', barang='$barang', tanggal='$tanggal', total='$total', hp='$hp', alamat='$alamat', pengantar='$pengantar' WHERE id='$id'";

// 4. menjalankan query
$simpan = mysqli_query($con,$qry);

// 5. alihkan ke halaman pengantar.php
?>
<script>
    document.location = "pengantaran.php";
</script>
