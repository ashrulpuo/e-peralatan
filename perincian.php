<!doctype html>
<html lang="en">
	<?php 
		include "header.php";?>
	<?php
	$permohonanID = '';
		if(isset($_GET['permohonanID'])){
	    	$permohonanID = $_GET['permohonanID'];
	 	} 
	?>
	<?php 		
		$result = mysql_query("SELECT * FROM permohonan WHERE id_permohonan = '".$permohonanID."'") or die(mysql_error());         
						   
		if(mysql_num_rows($result) == 1)
		{                  
			$row = mysql_fetch_array( $result );
			
			$result_peralatan1 = mysql_query("SELECT * FROM peralatan WHERE no_aset = '".$row['peralatan1']."'") or die(mysql_error());
			$row1 = mysql_fetch_array( $result_peralatan1 );

			$result_peralatan2 = mysql_query("SELECT * FROM peralatan WHERE no_aset = '".$row['peralatan2']."'") or die(mysql_error());
			$row2 = mysql_fetch_array( $result_peralatan2 );
			

			$result_peralatan3 = mysql_query("SELECT * FROM peralatan WHERE no_aset = '".$row['peralatan3']."'") or die(mysql_error());
			$row3 = mysql_fetch_array( $result_peralatan3 );
		}
		else
		{
			echo "<script>alert('Nombor rujukan tiada dalam sistem'); window.location = './semak.php';</script>";
		}
	?>
  <body>
	<div class="container">
		<div class="col-lg-12">
			<div class="card">
			  <div class="card-body shadow">
				<center><img src="img/6.png" class="img-fluid header" alt="Responsive image"></center>
				<?php include "navbar2.php"; ?>
				<div class="row justify-content-md-center">
					<div class="col col-lg-8" id="printableArea">
						
						<h4>
						  Maklumat Pemohon
						</h4>
						<table class="table table-bordered">
						  <tbody>
							<tr>
							  <th scope="row">No. Permohonan</th>
							  <td><?php echo $_GET['permohonanID'] ?></td>
							</tr>
							<tr>
							  <th scope="row">Nama</th>
							  <td><?php echo $row['nama_pemohon'] ?></td>
							</tr>
							<tr>
							  <th scope="row">Jawatan</th>
							  <td><?php echo $row['jawatan'] ?></td>
							</tr>
							<tr>
							  <th scope="row">Bahagian</th>
							  <td><?php echo $row['nama_unit'] ?></td>
							</tr>
							<tr>
							  <th scope="row">Tujuan</th>
							  <td><?php echo $row['tujuan'] ?></td>
							</tr>
							<tr>
							  <th scope="row">Tempat Digunakan</th>
							  <td><?php echo $row['tempat_digunakan'] ?></td>
							</tr>
							<tr>
							  <th scope="row">Tarikh Pinjam</th>
							  <td><?php echo $row['tarikh_pinjam'] ?></td>
							</tr>
							<tr>
							  <th scope="row">Tarikh Dijangka Pulang</th>
							  <td><?php echo $row['tarikh_dijangkapulang'] ?></td>
							</tr>
							<tr>
							  <th scope="row">Status</th>
							  <td>
								<?php 
								
									if($row['status'] == '0')
									{
										echo "Sedang Dalam Proses";
									}
									
									else if($row['status'] == '1')
									{
										echo "Diluluskan";
									}
									
									else
									{
										echo "Tidak Diluluskan";
									}
								
								?>							  </td>
							</tr>
						  </tbody>
						</table>
						<br>
						<h4>
						  Maklumat Peralatan
						</h4>
						<table class="table table-bordered">
						  <tbody>
							<tr>
							  <th scope="row">Peralatan 1</th>
							  <td>
								<strong><?php echo $row1['peralatan'] ?></strong><br>
								Model : <?php echo $row1['model'] ?><br>
								No. Aset : <?php echo $row1['no_aset'] ?>
							  </td>
							</tr>
							<tr>
							  <th scope="row">Peralatan 2</th>
							  <td>
								<strong><?php echo $row2['peralatan'] ?></strong><br>
								Model : <?php echo $row2['model'] ?><br>
								No. Aset : <?php echo $row2['no_aset'] ?>
							  </td>
							</tr>
							<tr>
							  <th scope="row">Peralatan 3</th>
							  <td>
								<strong><?php echo $row3['peralatan'] ?></strong><br>
								Model : <?php echo $row3['model'] ?><br>
								No. Aset : <?php echo $row3['no_aset'] ?>
							  </td>
							</tr>
							</tr>
						  </tbody>
						</table>
						<center>
							<?php 
							
								if($row['status'] == '0')
								{
									echo '
									<a href="lulus.php?permohonanID='.$_GET['permohonanID'].'" class="btn btn-success btn-sm" role="button">Diluluskan</a>
									<a href="tidak_lulus.php?permohonanID='.$_GET['permohonanID'].'" class="btn btn-danger btn-sm" role="button">Tidak Diluluskan</a>
									<a href="ubah_peralatan.php?permohonanID='.$_GET['permohonanID'].'" class="btn btn-secondary btn-sm" role="button">Ubah Peralatan</a>
									
									
								
								
									<a href="javascript:history.go(-1)" class="btn btn-dark btn-sm" role="button">Kembali <<</a>';
								}
								
								else
								{
									echo '
									
										<a href="nama pengeluar.php?permohonanID='.$_GET['permohonanID'].'" class="btn btn-secondary btn-sm" role="button">Nama Pengeluar</a>
									
									
									<a href="kewpa.php?permohonanID='.$_GET['permohonanID'].'"<input type="button" onclick="printDiv("printableArea")" value="Cetak Maklumat Ini!" class="btn btn-primary btn-sm" role="button">Cetak Maklumat Ini</a>
									<a href="javascript:history.go(-1)" class="btn btn-dark btn-sm" role="button">Kembali <<</a>';
								}
							
							?>
						</center>
					</div>
				</div>
				<?php include "footer.php";?>
			  </div>
			</div>
		</div>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
	<script>
		function printDiv(divName) {
			 var printContents = document.getElementById(divName).innerHTML;
			 var originalContents = document.body.innerHTML;

			 document.body.innerHTML = printContents;

			 window.print();

			 document.body.innerHTML = originalContents;
		}
	</script>
  </body>
</html>