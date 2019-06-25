<?php include "header.php";?>
<?php
	if(empty($_SESSION['id_permohonan']))
	{
		echo "<META http-equiv=\"refresh\" content=\"0;URL=semakan.php\">";
	}
	
	else
	{
?>
<!doctype html>
<html lang="en">
	<?php 		
		$result = mysql_query("SELECT * FROM permohonan WHERE id_permohonan = '".$_SESSION['id_permohonan']."'") or die(mysql_error());
		$row = mysql_fetch_array( $result );
		
		$result_peralatan1 = mysql_query("SELECT * FROM peralatan WHERE no_aset = '".$row['peralatan1']."'") or die(mysql_error());
		$row1 = mysql_fetch_array( $result_peralatan1 );

		$result_peralatan2 = mysql_query("SELECT * FROM peralatan WHERE no_aset = '".$row['peralatan2']."'") or die(mysql_error());
		$row2 = mysql_fetch_array( $result_peralatan2 );
		
		$result_peralatan3 = mysql_query("SELECT * FROM peralatan WHERE no_aset = '".$row['peralatan3']."'") or die(mysql_error());
		$row3 = mysql_fetch_array( $result_peralatan3 );
	?>
  <body>
	<div class="container">
		<div class="col-lg-12">
			<div class="card">
			  <div class="card-body shadow">
				<center><img src="img/6.png" class="img-fluid header" alt="Responsive image"></center>
				<?php include "navbar.php"; ?>
				<div class="row justify-content-md-center">
					<div class="col col-lg-8" id="printableArea">
						<center><h3>
						  Maklumat Permohonan Sistem e-Peralatan 
						  <!--<small class="text-muted">With faded secondary text</small> -->
						</center></h3>
						<h4>
						  Maklumat Pemohon
						</h4>
						<table class="table table-bordered">
						  <tbody>
							<tr>
							  <th scope="row">No. Permohonan</th>
							  <td><?php echo $_SESSION['id_permohonan'] ?></td>
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
						<center><input type="button" onClick="printDiv('printableArea')" value="Cetak Maklumat Ini!" class="btn btn-primary btn-sm" role="button" /></center>
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
<?php	
	}
?>