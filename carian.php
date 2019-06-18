<!doctype html>
<html lang="en">
	<?php include "header.php";?>
	<?php 		
		if(isset($_POST['submit']))
		{
			if(!empty($_POST['id_pemohon']))
			{				
		
				$result = mysql_query("SELECT * FROM permohonan WHERE id_permohonan = '".$_POST['id_pemohon']."'") or die(mysql_error());     
						   
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
			}
		
			else
					echo "<script>alert('Sila isi ruangan kosong'); window.location = './semak.php';</script>";
		}
	?>
  <body>
	<div class="container">
		<div class="col-lg-12">
			<div class="card">
			  <div class="card-body shadow">
				<img src="img/3.png" class="img-fluid header" alt="Responsive image">
				<?php include "navbar2.php"; ?>
				<div class="row justify-content-md-center">
					<div class="col col-lg-8" id="printableArea">
						<center>
            <h3> <font size="3"><em>Maklumat Permohonan Sistem e-Peralatan </em> 
              </font> 
              <!--<small class="text-muted">With faded secondary text</small> --></center> 
            </h3>
						
            <h4> <font size="2"><em>Maklumat Pemohon</em></font> </h4>
						<table class="table table-bordered">
						  <tbody>
							<tr>
							  
                  <th scope="row"><em><font size="2">No. Permohonan</font></em></th>
							  <td><?php echo $_POST['id_pemohon'] ?></td>
							</tr>
							<tr>
							  
                  <th scope="row"><em><font size="2">Nama</font></em></th>
							  <td><?php echo $row['nama_pemohon'] ?></td>
							</tr>
							<tr>
							  
                  <th scope="row"><em><font size="2">Jawatan</font></em></th>
							  <td><?php echo $row['jawatan'] ?></td>
							</tr>
							<tr>
							  
                  <th scope="row"><em><font size="2">Bahagian</font></em></th>
							  <td><?php echo $row['bahagian'] ?></td>
							</tr>
							<tr>
							  <th scope="row"><font size="2"><em>Tujuan</em></font></th>
							  <td><?php echo $row['tujuan'] ?></td>
							</tr>
							<tr>
							  <th scope="row"><font size="2"><em>Tempat Digunakan</em></font></th>
							  <td><?php echo $row['tempat_digunakan'] ?></td>
							</tr>
							<tr>
							  
                  <th scope="row"><em><font size="2">Tarikh Pinjam</font></em></th>
							  <td><?php echo $row['tarikh_pinjam'] ?></td>
							</tr>
							<tr>
							  
                  <th scope="row"><em><font size="2">Tarikh Pulang</font></em></th>
							  <td><?php echo $row['tarikh_pulang'] ?></td>
							</tr>
							<tr>
							  
                  <th scope="row"><em><font size="2">Status</font></em></th>
								<?php 
								
									if($row['status'] == '0')
									{
										echo "<td class='bg-warning'>Sedang Dalam Proses</td>";
									}
									
									else if($row['status'] == '1')
									{
										echo "<td class='bg-success'>Diluluskan</td>";
									}
									
									else
									{
										echo "<td class='bg-danger'>Tidak Diluluskan</td>";
									}
								
								?>
							</tr>
						  </tbody>
						</table>
						<br>
						
            <h4> <font size="3"><em>Maklumat Peralatan </em></font></h4>
						<table class="table table-bordered">
						  <tbody>
							<tr>
							  
                  <th scope="row"><em><font size="2">Peralatan 1</font></em></th>
							  <td>
								<strong><?php echo $row1['peralatan'] ?></strong><br>
                    <font size="2"><em>Model :</em></font> <?php echo $row1['model'] ?><br>
								<font size="2"><em>No. Aset :</em></font> <?php echo $row1['no_aset'] ?>
							  </td>
							</tr>
							<tr>
							  
                  <th scope="row"><em><font size="2">Peralatan 2</font></em></th>
							  <td>
								<strong><?php echo $row2['peralatan'] ?></strong><br>
                    <font size="2"><em>Model :</em></font> <?php echo $row2['model'] ?><br>
                    <font size="2"><em>No. Aset :</em></font> <?php echo $row2['no_aset'] ?> 
                  </td>
							</tr>
							<tr>
							  
                  <th scope="row"><em><font size="2">Peralatan 3</font></em></th>
							  <td>
								<strong><?php echo $row3['peralatan'] ?></strong><br>
                    <font size="2"><em>Model : </em></font><?php echo $row3['model'] ?><br>
                    <em>No. Aset :</em> <?php echo $row3['no_aset'] ?> </td>
							</tr>
							</tr>
						  </tbody>
						</table>
						<center><input type="button" onClick="printDiv('printableArea')" value="Cetak Maklumat Ini!" class="btn btn-primary btn-sm" role="button" /> <a href="cari.php" class="btn btn-dark btn-sm" role="button">Kembali <<</a></center>
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