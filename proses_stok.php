<?php
// 1. membuat koneksi
include_once("koneksi.php");


// 2, mengambil seluruh nilai input dan dimasukkan ke variabel
$kode         = $_POST['kode'];
$nama           = $_POST['nama'];
$jumlah        = $_POST['jumlah'];


// 3. membuat query insert 
$qry = "INSERT INTO stok (kode,nama,jumlah) VALUES 
('$kode','$nama','$jumlah')";


// 4. menjalankan query
$simpan = mysqli_query($con,$qry);


// 5. alihkan ke halaman index.php
?>
<script>
    document.location="stockbarang.php";
</script>