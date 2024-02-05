<?php
include_once("koneksi.php");

$nama = $_POST['nama'];
$barang = $_POST['barang'];
$tanggal = $_POST['tanggal'];
$total = $_POST['total'];
$hp = $_POST['hp'];
$alamat = $_POST['alamat'];
$pengantar = $_POST['pengantar'];

$qry = "INSERT INTO pemesanan (nama,barang,tanggal,total,hp,alamat,pengantar) VALUES 
('$nama','$barang','$tanggal','$total','$hp','$alamat','$pengantar')";

$simpan = mysqli_query($con, $qry);

?>
<script>
    document.location="pengantaran.php";
</script>
