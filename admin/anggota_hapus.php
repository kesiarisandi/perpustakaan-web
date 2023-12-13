<?php
include '../conn/koneksi.php';

$nis= $_GET['nis'];
$query = mysqli_query($konek,"DELETE FROM tbl_anggota WHERE nis='$nis'");
if ($query) {
		echo "<script>alert('Data berhasil dihapus')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=anggota'>";
	} else {
		echo "Data anda gagal dihapus. Ulangi sekali lagi";
		echo "<meta http-equiv='refresh' content='0; url=?page=anggota'>";
	}


?>