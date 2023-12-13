<!-- ======= Buku Section ======= -->
<section id="buku" class="buku">
	<div class="container">

		<!-- Modal -->
		<div class="modal fade" id="ModalAddBuku" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog " role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Tambah Buku</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="buku_proses.php" method="post">
						<div class="modal-body">
							<?php 
							$tanggal = date('Y-m-d');
							$jam = date('H:i:s');
							$waktu = $tanggal.' '.$jam;
							?>
							<input type="hidden" name="tgl_input" value="<?php echo $waktu; ?>">
							<div class="form-group">
								<label for="">Judul Buku</label>
								<input type="text" class="form-control" name="judul" >
							</div>
							<div class="form-group">
								<label for="">Pengarang</label>
								<input type="text" class="form-control" name="pengarang">
							</div>
							<div class="form-group">
								<label for="">Penerbit</label>
								<input type="text" class="form-control" name="penerbit">
							</div>
							<div class="form-group">
								<label for="">Tahun Terbit</label>
								<select class="form-control" name="thn_terbit">
									<option value="">Pilih Tahun</option>
									<option value="2015">2015</option>
									<option value="2014">2014</option>
									<option value="2013">2013</option>
									<option value="2012">2012</option>
									<option value="2011">2011</option>
									<option value="2010">2010</option>
									<option value="2009">2009</option>
									<option value="2008">2008</option>
									<option value="2007">2007</option>
									<option value="2006">2006</option>
									<option value="2005">2005</option>
									<option value="2004">2004</option>
									<option value="2003">2003</option>
									<option value="2002">2002</option>
									<option value="2001">2001</option>
									<option value="2000">2000</option>
									<option value="1999">1999</option>
									<option value="1998">1998</option>
									<option value="1997">1997</option>
									<option value="1996">1996</option>
									<option value="1995">1995</option>
									<option value="1994">1994</option>
									<option value="1993">1993</option>
									<option value="1992">1992</option>
									<option value="1991">1991</option>
									<option value="1990">1990</option>
								</select>
							</div>
							<div class="form-group">
								<label for="">Kode ISBN</label>
								<input type="text" class="form-control" name="isbn">
							</div>
							<div class="form-group">
								<label for="">Jumlah</label>
								<input type="text" class="form-control" name="jumlah_buku">
							</div>
							<div class="form-group">
								<label for="">Lokasi</label>
								<select class="form-control" name="lokasi">
									<option value="">Pilih Lokasi</option>
									<option value="rak1">Rak 1</option>
									<option value="rak2">Rak 2</option> 
									<option value="rak3">Rak 3</option>                    
								</select>
							</div>
							
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="section-title">
			<h2>Data Buku</h2>
			<!-- Button trigger modal --><!-- 
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalAddBuku">
				+ Tambah Buku
			</button> -->
		</div>
		<table id="example" class="table table-striped table-bordered" style="width:100%">
			<thead>
				<tr>
					<th width="5%" >No</th>
					<th width="30%">Judul Buku</th>
					<th width="20%">Pengarang</th>
					<th width="15%">Penerbit</th>
					<th width="15%">Jumlah</th>
					<!-- <th width="8%">Edit</th>
					<th width="8%">Hapus</th> -->
				</tr>
			</thead>
			
			<tbody>
				<?php
				$sql = mysqli_query( $konek,"SELECT * FROM tbl_buku ORDER by judul");
				$total = mysqli_num_rows($sql);
				$no = 1;

				while ($data=mysqli_fetch_array($sql)) { 
					?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><a href="#" data-toggle="modal" data-target="#modal-detil-buku<?php echo $data['id']; ?>"> <?php echo $data['judul']; ?></a></td>
						<td><?php echo $data['pengarang']; ?></td>
						<td><?php echo $data['penerbit']; ?></td>
						<td><?php echo $data['jumlah_buku']; ?></td>
						<!-- <td><a href="#" data-toggle="modal" data-target="#modal-edit-buku<?php echo $data['id']; ?>"><img src="../images/edit.png"/ width="15px" height="15px"></a>
							<td><a href="buku_hapus.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Anda yakin ingin menghapus data buku <?php echo $data['judul']; ?> ?')"><img src="../images/delete.png"/ width="15px" height="15px"></a></td> -->
						</tr>
						<?php $no++; } ?>
					</tbody>
					
				</table>
				<?php
				$sql = mysqli_query($konek,"SELECT * FROM tbl_buku ORDER by judul");
				$total = mysqli_num_rows($sql);
				$no = 1;

				while ($data_buku=mysqli_fetch_array($sql)) { 
					?>

					<!-- Modal Edit Buku -->
					<div class="modal fade" id="modal-edit-buku<?php echo $data_buku['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog " role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Edit Buku</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<form action="buku_proses_edit.php" method="post">
									<div class="modal-body">
          						<!-- <?php 
          						$tanggal = date('Y-m-d');
          						$jam = date('H:i:s');
          						$waktu = $tanggal.' '.$jam;
          						?> -->
          						<input type="hidden" name="tgl_input" value="<?php echo $waktu; ?>">
          						<div class="form-group">
          							<label for="">Judul Buku</label>
          							<input type="hidden" name="id" value="<?php echo $data_buku['id']; ?>">
          							<input type="text" class="form-control" name="judul" value="<?php echo $data_buku['judul']; ?>">
          						</div>
          						<div class="form-group">
          							<label for="">Pengarang</label>
          							<input type="text" class="form-control" name="pengarang" value="<?php echo $data_buku['pengarang']; ?>">
          						</div>
          						<div class="form-group">
          							<label for="">Penerbit</label>
          							<input type="text" class="form-control" name="penerbit" value="<?php echo $data_buku['penerbit']; ?>">
          						</div>
          						<div class="form-group">
          							<label for="">Tahun Terbit</label>
          							<select class="form-control" name="thn_terbit">
          								<option value="">Pilih Tahun</option>
          								<option value="2015" <?php if( $data_buku['thn_terbit']=='2015'){echo "selected"; } ?>>2015</option>
          								<option value="2014" <?php if( $data_buku['thn_terbit']=='2014'){echo "selected"; } ?>>2014</option>
          								<option value="2013" <?php if( $data_buku['thn_terbit']=='2013'){echo "selected"; } ?>>2013</option>
          								<option value="2012" <?php if( $data_buku['thn_terbit']=='2012'){echo "selected"; } ?>>2012</option>
          								<option value="2011" <?php if( $data_buku['thn_terbit']=='2011'){echo "selected"; } ?>>2011</option>
          								<option value="2010" <?php if( $data_buku['thn_terbit']=='2010'){echo "selected"; } ?>>2010</option>
          								<option value="2009" <?php if( $data_buku['thn_terbit']=='2009'){echo "selected"; } ?>>2009</option>
          								<option value="2008" <?php if( $data_buku['thn_terbit']=='2008'){echo "selected"; } ?>>2008</option>
          								<option value="2007" <?php if( $data_buku['thn_terbit']=='2007'){echo "selected"; } ?>>2007</option>
          								<option value="2006" <?php if( $data_buku['thn_terbit']=='2006'){echo "selected"; } ?>>2006</option>
          								<option value="2005" <?php if( $data_buku['thn_terbit']=='2005'){echo "selected"; } ?>>2005</option>
          								<option value="2004" <?php if( $data_buku['thn_terbit']=='2004'){echo "selected"; } ?>>2004</option>
          								<option value="2003" <?php if( $data_buku['thn_terbit']=='2003'){echo "selected"; } ?>>2003</option>
          								<option value="2002" <?php if( $data_buku['thn_terbit']=='2002'){echo "selected"; } ?>>2002</option>
          								<option value="2001" <?php if( $data_buku['thn_terbit']=='2001'){echo "selected"; } ?>>2001</option>
          								<option value="2000" <?php if( $data_buku['thn_terbit']=='2000'){echo "selected"; } ?>>2000</option>
          								<option value="1999" <?php if( $data_buku['thn_terbit']=='1999'){echo "selected"; } ?>>1999</option>
          								<option value="1998" <?php if( $data_buku['thn_terbit']=='1998'){echo "selected"; } ?>>1998</option>
          								<option value="1997" <?php if( $data_buku['thn_terbit']=='1997'){echo "selected"; } ?>>1997</option>
          								<option value="1996" <?php if( $data_buku['thn_terbit']=='1996'){echo "selected"; } ?>>1996</option>
          								<option value="1995" <?php if( $data_buku['thn_terbit']=='1995'){echo "selected"; } ?>>1995</option>
          								<option value="1994" <?php if( $data_buku['thn_terbit']=='1994'){echo "selected"; } ?>>1994</option>
          								<option value="1993" <?php if( $data_buku['thn_terbit']=='1993'){echo "selected"; } ?>>1993</option>
          								<option value="1992" <?php if( $data_buku['thn_terbit']=='1992'){echo "selected"; } ?>>1992</option>
          								<option value="1991" <?php if( $data_buku['thn_terbit']=='1991'){echo "selected"; } ?>>1991</option>
          								<option value="1990" <?php if( $data_buku['thn_terbit']=='1990'){echo "selected"; } ?>>1990</option>
          								<option value="1989" <?php if( $data_buku['thn_terbit']=='1989'){echo "selected"; } ?>>1989</option>
          							</select>
          						</div>
          						<div class="form-group">
          							<label for="">Kode ISBN</label>
          							<input type="text" class="form-control" name="isbn" value="<?php echo $data_buku['isbn']; ?>">
          						</div>
          						<div class="form-group">
          							<label for="">Jumlah</label>
          							<input type="text" class="form-control" name="jumlah_buku" value="<?php echo $data_buku['jumlah_buku']; ?>">
          						</div>
          						<div class="form-group">
          							<label for="">Lokasi</label>
          							<select class="form-control" name="lokasi">
          								<option value="rak1" <?php if( $data_buku['lokasi']=='rak1'){echo "selected"; } ?>>Rak 1</option>
          								<option value="rak2" <?php if( $data_buku['lokasi']=='rak2'){echo "selected"; } ?>>Rak 2</option> 
          								<option value="rak3" <?php if( $data_buku['lokasi']=='rak3'){echo "selected"; } ?>>Rak 3</option>                   
          							</select>
          						</div>

          					</div>
          					<div class="modal-footer">
          						<button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
          						<button type="submit" class="btn btn-primary">Save</button>
          					</div>
          				</form>
          			</div>
          		</div>
          	</div>

          	<?php $no++; } ?>

          	<?php
          	$sql = mysqli_query( $konek,"SELECT * FROM tbl_buku ORDER by judul");
          	$total = mysqli_num_rows($sql);
          	$no = 1;

          	while ($data_buku_detil=mysqli_fetch_array($sql)) { 
          		?>

          		<!-- Modal Detil Buku -->
          		<div class="modal fade" id="modal-detil-buku<?php echo $data_buku_detil['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          			<div class="modal-dialog " role="document">
          				<div class="modal-content">
          					<div class="modal-header">
          						<h5 class="modal-title" id="exampleModalLabel">Detil Buku</h5>
          						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          							<span aria-hidden="true">&times;</span>
          						</button>
          					</div>
          					<form action="buku_proses_edit.php" method="post">
          						<div class="modal-body">
          						<!-- <?php 
          						$tanggal = date('Y-m-d');
          						$jam = date('H:i:s');
          						$waktu = $tanggal.' '.$jam;
          						?> -->
          						<input type="hidden" name="tgl_input" value="<?php echo $waktu; ?>">
          						<div class="form-group">
          							<label for="">Judul Buku</label>
          							<input type="hidden" name="id" value="<?php echo $data_buku_detil['id']; ?>">
          							<input type="text" disabled class="form-control" name="judul" value="<?php echo $data_buku_detil['judul']; ?>">
          						</div>
          						<div class="form-group">
          							<label for="">Pengarang</label>
          							<input type="text" disabled class="form-control" name="pengarang" value="<?php echo $data_buku_detil['pengarang']; ?>">
          						</div>
          						<div class="form-group">
          							<label for="">Penerbit</label>
          							<input type="text" disabled class="form-control" name="penerbit" value="<?php echo $data_buku_detil['penerbit']; ?>">
          						</div>
          						<div class="form-group">
          							<label for="">Tahun Terbit</label>
          							<select class="form-control" disabled name="thn_terbit">
          								<option value="">Pilih Tahun</option>
          								<option value="2015" <?php if( $data_buku_detil['thn_terbit']=='2015'){echo "selected"; } ?>>2015</option>
          								<option value="2014" <?php if( $data_buku_detil['thn_terbit']=='2014'){echo "selected"; } ?>>2014</option>
          								<option value="2013" <?php if( $data_buku_detil['thn_terbit']=='2013'){echo "selected"; } ?>>2013</option>
          								<option value="2012" <?php if( $data_buku_detil['thn_terbit']=='2012'){echo "selected"; } ?>>2012</option>
          								<option value="2011" <?php if( $data_buku_detil['thn_terbit']=='2011'){echo "selected"; } ?>>2011</option>
          								<option value="2010" <?php if( $data_buku_detil['thn_terbit']=='2010'){echo "selected"; } ?>>2010</option>
          								<option value="2009" <?php if( $data_buku_detil['thn_terbit']=='2009'){echo "selected"; } ?>>2009</option>
          								<option value="2008" <?php if( $data_buku_detil['thn_terbit']=='2008'){echo "selected"; } ?>>2008</option>
          								<option value="2007" <?php if( $data_buku_detil['thn_terbit']=='2007'){echo "selected"; } ?>>2007</option>
          								<option value="2006" <?php if( $data_buku_detil['thn_terbit']=='2006'){echo "selected"; } ?>>2006</option>
          								<option value="2005" <?php if( $data_buku_detil['thn_terbit']=='2005'){echo "selected"; } ?>>2005</option>
          								<option value="2004" <?php if( $data_buku_detil['thn_terbit']=='2004'){echo "selected"; } ?>>2004</option>
          								<option value="2003" <?php if( $data_buku_detil['thn_terbit']=='2003'){echo "selected"; } ?>>2003</option>
          								<option value="2002" <?php if( $data_buku_detil['thn_terbit']=='2002'){echo "selected"; } ?>>2002</option>
          								<option value="2001" <?php if( $data_buku_detil['thn_terbit']=='2001'){echo "selected"; } ?>>2001</option>
          								<option value="2000" <?php if( $data_buku_detil['thn_terbit']=='2000'){echo "selected"; } ?>>2000</option>
          								<option value="1999" <?php if( $data_buku_detil['thn_terbit']=='1999'){echo "selected"; } ?>>1999</option>
          								<option value="1998" <?php if( $data_buku_detil['thn_terbit']=='1998'){echo "selected"; } ?>>1998</option>
          								<option value="1997" <?php if( $data_buku_detil['thn_terbit']=='1997'){echo "selected"; } ?>>1997</option>
          								<option value="1996" <?php if( $data_buku_detil['thn_terbit']=='1996'){echo "selected"; } ?>>1996</option>
          								<option value="1995" <?php if( $data_buku_detil['thn_terbit']=='1995'){echo "selected"; } ?>>1995</option>
          								<option value="1994" <?php if( $data_buku_detil['thn_terbit']=='1994'){echo "selected"; } ?>>1994</option>
          								<option value="1993" <?php if( $data_buku_detil['thn_terbit']=='1993'){echo "selected"; } ?>>1993</option>
          								<option value="1992" <?php if( $data_buku_detil['thn_terbit']=='1992'){echo "selected"; } ?>>1992</option>
          								<option value="1991" <?php if( $data_buku_detil['thn_terbit']=='1991'){echo "selected"; } ?>>1991</option>
          								<option value="1990" <?php if( $data_buku_detil['thn_terbit']=='1990'){echo "selected"; } ?>>1990</option>
          								<option value="1989" <?php if( $data_buku_detil['thn_terbit']=='1989'){echo "selected"; } ?>>1989</option>
          							</select>
          						</div>
          						<div class="form-group">
          							<label for="">Kode ISBN</label>
          							<input type="text" disabled class="form-control" name="isbn" value="<?php echo $data_buku_detil['isbn']; ?>">
          						</div>
          						<div class="form-group">
          							<label for="">Jumlah</label>
          							<input type="text" disabled class="form-control" name="jumlah_buku" value="<?php echo $data_buku_detil['jumlah_buku']; ?>">
          						</div>
          						<div class="form-group">
          							<label for="">Lokasi</label>
          							<select class="form-control" disabled name="lokasi">
          								<option value="rak1" <?php if( $data_buku_detil['lokasi']=='rak1'){echo "selected"; } ?>>Rak 1</option>
          								<option value="rak2" <?php if( $data_buku_detil['lokasi']=='rak2'){echo "selected"; } ?>>Rak 2</option> 
          								<option value="rak3" <?php if( $data_buku_detil['lokasi']=='rak3'){echo "selected"; } ?>>Rak 3</option>                   
          							</select>
          						</div>
          						<div class="form-group">
          							<label for="">Tanggal Input</label>
          							<input type="text" disabled class="form-control" name="jumlah_buku" value="<?php echo $data_buku_detil['tgl_input']; ?>">
          						</div>

          					</div>
          					<div class="modal-footer">
          						<button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
          						<!-- <button type="submit" class="btn btn-primary">Save</button> -->
          					</div>
          				</form>
          			</div>
          		</div>
          	</div>

          	<?php $no++; } ?>
          	
          </div>

          

      </div>
  </section>
    <!-- End Buku Section