<?php
include "conn/koneksi.php";

$id	=$_GET['id'];
$judul= $_GET['judul'];

$us=mysqli_query($konek,"UPDATE tbl_transaksi SET status='Kembali' WHERE id='$id'")or die ("Gagal update".mysqli_error());
$uj=mysqli_query($konek,"UPDATE tbl_buku SET jumlah_buku=(jumlah_buku+1) WHERE judul='$judul'")or die ("Gagal update".mysqli_error());

	if ($us || $uj) {
		echo "<script>alert('Berhasil Dikembalikan')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=transaksi'>";
	} else {
		echo "<script>alert('Gagal Dikembalikan')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=transaksi'>";
	}
?>