<?php 
include '../conn/koneksi.php';
$nis = $_GET['nis'];
$sql = mysqli_query($konek,"SELECT * FROM tbl_anggota where nis='$nis'");
$data = mysqli_fetch_array($sql);
$nis = $data['nis'];
$nama = $data['nama'];
$tempat = $data['tempat_lahir'];
$tgl_lahir = $data['tgl_lahir'];
$jk = $data['jk'];
$kelas = $data['kelas'];
$thn = $data['thn_masuk'];

?>
<!-- menu tengah -->
	<div id="menu-tengah">
    	<div id="bg_menu">Data Anggota
    	</div>
    	<div id="content_menu">
        <div id="menu_header">
        	<table width="100%" height="100%" style="background-color:#9cc;">
            	<tr>
                	<td align="center">Edit Anggota</td>
                </tr>
            </table>
            
    	</div>
   	    <div class="table_input">
        <form action="?page=anggota_proses_edit" method="post">
          <input type="hidden" name="nis" size="50%" value="<?php echo $nis; ?>"></td>
   	      <table width="100%" height="80%" align="center" cellspacing="0" cellpadding="5">
   	        <tbody>
            	<tr>
                	<td width="25%" align="right">NIS</td>
                    <td><input type="text" name="nis1" size="50%" value="<?php echo $nis; ?>"></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Nama Lengkap</td>
                    <td><input type="text" name="nama" size="50%" value="<?php echo $nama; ?>"></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Tempat Lahir</td>
                    <td><input type="text" name="tempat_lahir" size="50%" value="<?php echo $tempat; ?>"></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Tanggal Lahir</td>
                    <td><input type="date" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>"></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Jenis Kelamin</td>
                    <td><?php if ($data['jk'] === "L") : ?>
                    <input type="radio" name="jk" value="L" checked />Laki-Laki</label>
            		<input type="radio" name="jk" value="P" />Perempuan</label>
                    <?php else : ?>
            		<input type="radio" name="jk" value="L" />Laki-Laki</label>
            		<input type="radio" name="jk" value="P" checked />Perempuan</label>
            		<?php endif; ?>
                    	</select>
                    </td>
                </tr>
                <tr>
                	<td width="20%" align="right">Kelas</td>
                    <td><select name="kelas">
                    		<option>Pilih Kelas</option>
                            <option value="kelas 10" <?php if ($kelas=='kelas 10') {echo "selected";} ?>>Kelas 10</option>
                            <option value="kelas 11"  <?php if ($kelas=='kelas 11') {echo "selected";} ?>>Kelas 11</option>
                            <option value="kelas 12" <?php if ($kelas=='kelas 12') {echo "selected";} ?>>Kelas 12</option>
                    	</select>
                    </td>
                </tr>               
                <tr>
                	<td width="20%" align="right">Tahun Masuk</td>
                    <td><input type="text" name="thn_masuk" size="50%" value="<?php echo $thn; ?>"></td>
                </tr>
                <tr>
                	<td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
                <tr>
                    <td><a href="?page=anggota">Kembali</td>
                </tr>
            
            </tbody>
          </table>
          </form>
 	      </div>
   	  </div>
    </div>