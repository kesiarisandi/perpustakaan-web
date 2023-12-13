   <?php
   include '../conn/koneksi.php';
   include 'transaksi_fungsi.php';
   ?>
   
   <!-- menu tengah -->
	<div id="menu-tengah">
    	<div id="bg_menu">Data Transaksi
    	</div>
    	<div id="content_menu">
        <div id="menu_header">
        	<form action="?page=transaksi_search" method="post">
        	<table width="100%" height="100%" style="border:1px solid #9cc;">
            	<tr>
                	<td width="80%"><a href="?page=transaksi_input1">Input Transaksi</a></td>
                </tr>
            
            </table>
            </form>
            
    	</div>
   	    <div class="zebra-table">
   	      <table width="100%" height="100%" align="center" cellspacing="0" cellpadding="5">
   	        <thead align="center">
   	          <tr>
   	            <th align="center" width="5%" >No</th>
   	            <th width="25%">Judul Buku</th>
   	            <th width="25%">Peminjam</th>
   	            <th width="15%">Tgl Pinjam</th>
   	            <th width="15%">Tgl Kembali</th>
                <th width="10%">Terlambat</th>
              </tr>
            </thead>
            <?php
            //$pp = echo "$_SESSION['nama']=$nama;";
				$sql = mysqli_query($konek,"SELECT * FROM tbl_transaksi WHERE nama ='udin' ORDER by id");
				$total = mysqli_num_rows($sql);
				$no = 1;
				
				while ($data=mysqli_fetch_array($sql)) {
			?>
   	        <tbody>
   	          <tr>
   	            <td align="center"><?php echo $no; ?></td>
   	            <td><?php echo $data['judul']; ?></a></td>
   	            <td><?php echo $data['nama']; ?></td>
   	            <td align="center"><?php echo $data['tgl_pinjam']; ?></td>
   	            <td align="center"><?php echo $data['tgl_kembali']; ?></td>
                <td align="center">
                <?php
					$tgl_dateline=$data['tgl_kembali'];
					$tgl_kembali=date('d-m-Y');
					$lambat=terlambat($tgl_dateline, $tgl_kembali);
					$denda=$lambat*$denda1;
					if ($lambat>0) {
						echo "<font color='red'>$lambat hari<br>(Rp $denda)</font>";
					}
					else {
						echo $lambat." hari";
					}
				?>
                
                </td>
              </tr>              
            <?php $no++; } ?>
            
            </tbody>
          </table>
          </div>
          <div id="menu_bottom">
        	<table width="100%" style="border:0px solid #9cc;">
            	<tr>
                	<td width="50%">Jumlah : <?php echo $total; ?> Transaksi</td>
                    
                </tr>
            </table>
    	</div>
   	  </div>
    </div>