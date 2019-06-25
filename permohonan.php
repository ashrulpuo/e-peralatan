<!doctype html>
<html lang="en">
<style type="text/css">
	<!--
	.style2 {font-weight: bold; font-family: Arial, Helvetica, sans-serif;}
	.style3 {font-family: Arial, Helvetica, sans-serif}
	.style4 {font-family: Georgia, "Times New Roman", Times, serif}
	-->
</style>
<?php include "header.php";?>
<?php 

if(isset($_POST['submit']))
{
	if(!empty($_POST['nama_pemohon']))
	{				
		mysql_query("INSERT INTO permohonan (nama_pemohon,jawatan,nama_unit,tujuan,tempat_digunakan,tarikh_pinjam,tarikh_dijangkapulang,peralatan1,peralatan2,peralatan3) VALUES ('".$_POST['nama_pemohon']."','".$_POST['jawatan']."','".$_POST['nama_unit']."','".$_POST['tujuan']."','".$_POST['tempat_digunakan']."','".$_POST['tarikh_pinjam']."','".$_POST['tarikh_dijangkapulang']."','".$_POST['peralatan1']."','".$_POST['peralatan2']."','".$_POST['peralatan3']."')");

		//cahnge peralatan status to 1 = not available 
		$check1 = $_POST['peralatan1'];
		$check2 = $_POST['peralatan2'];
		$check3 = $_POST['peralatan3'];

		if($check1) 
		{
		    mysql_query("UPDATE peralatan SET peralatan_status = '1' WHERE no_aset ='".$check1."'");
		} 

		if($check2) 
		{
		    mysql_query("UPDATE peralatan SET peralatan_status = '1' WHERE no_aset ='".$check2."'");
		} 

		if($check3) 
		{
		    mysql_query("UPDATE peralatan SET peralatan_status = '1' WHERE no_aset ='".$check3."'");
		} 
		
		?>
		<?php
			$test = "SELECT * FROM permohonan ORDER BY id_permohonan DESC LIMIT 1 ";
			$test=mysql_query($test);
			while($lists=mysql_fetch_array($test)) { 
				$id = $lists['id_permohonan'];
			}
		?>
		
		<script type="text/javascript">
			alert("Permohonan Anda Direkodkan. Sila datang ke BICT untuk pengambilan aset dan maklumkan kepada Staff BICT (Puan Nura/ Encik Isham), no permohanan anda adalah : " + '<?php echo $id; ?>');
			window.location.href='index.php';
		</script>
		
		
		<?php
		
	}	
	
	else
		echo '<script language="javascript">window.alert("Sila isi ruangan kosong");</script>';
}

?>
<body>
	<div class="container">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body shadow">
					<center><img src="img/6.png" class="img-fluid header" alt="Responsive image"></center>
					<?php include "navbar.php"; ?>
					<div class="row justify-content-md-center">
						<div class="col col-lg-8">
							
							
							<form method="POST" action="<?php echo $_SERVER['REQUEST_URI'];?>" onSubmit="window.location.reload()">
								<div class="form-group row">
									
									<label for="inputEmail3" class="col-sm-4 col-form-label style3"><font size="2">Nama</font></label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="inputEmail3" placeholder="Nama" name="nama_pemohon">
									</div>
								</div>
								<div class="form-group row">
									
									<label for="inputPassword3" class="col-sm-4 col-form-label style3"><font size="2">Jawatan</font></label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="inputPassword3" placeholder="Jawatan" name="jawatan">
									</div>
								</div>
								<div class="form-group row">
									
									<label for="inputPassword3" class="col-sm-4 col-form-label style3"><font size="2">Daerah 
									/ Bahagian</font></label>
									<div class="col-sm-8">
										<select name="nama_unit" class="form-control">
											
											<label>
												<span></span>

												<option value="Bahagian Pengurusan Sungai Dan Banjir">Bahagian Pengurusan Sungai Dan Banjir</option>
												<option value="Bahagian Pembangunan Korporat & Audit Prestasi">Bahagian Pembangunan Korporat & Audit Prestasi</option>
												<option value="Bahagian Saliran Mesra Alam">Bahagian Saliran Mesra Alam</option>
												<option value="Bahagian Pengurusan Aset">Bahagian Pengurusan Aset</option>
												<option value="Bahagian Pengurusan Maklumat">Bahagian Pengurusan Maklumat</option>
												<option value="Bahagian Pengairan & Saliran Pertanian">Bahagian Pengairan & Saliran Pertanian</option>
												<option value="Bahagian Khidmat Pengurusan">Bahagian Khidmat Pengurusan</option>
												<option value="Daerah Petaling">Daerah Petaling</option>
												<option value="Daerah Hulu Langat">Daerah Hulu Langat</option>
												<option value="Daerah Kuala Langat">Daerah Kuala Langat</option>
												<option value="Daerah Hulu Klang">Daerah Hulu Klang</option>
												<option value="Daerah Klang">Daerah Klang</option>
												<option value="Daerah Gombak">Daerah Gombak</option>
												<option value="Daerah Kuala Selangor">Daerah Kuala Selangor</option>
												<option value="Daerah Hulu Selangor">Daerah Hulu Selangor</option>
												<option value="Daerah Sabak Bernam">Daerah Sabak Bernam</option>
												<option value="Daerah Sepang">Daerah Sepang</option>
												<option value="Daerah BPME">BPME</option>
												
												
												
											</select></label> 
											
										</div>
									</div>
									<div class="form-group row">
										
										<label for="inputPassword3" class="col-sm-4 col-form-label style3"><font size="2">Tujuan </font></label>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="inputPassword3" placeholder="Tujuan" name="tujuan">
										</div>
									</div>
									<div class="form-group row">
										
										<label for="inputPassword3" class="style3 col-form-label col-sm-4"><font size="2">Tempat 
										Digunakan</font></label>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="inputPassword3" placeholder="Tempat Digunakan" name="tempat_digunakan">
										</div>
									</div>
									
									
									<div class="form-group row">
										
										<label for="inputPassword3" class="col-sm-4 col-form-label style3"><font size="2">Tarikh 
										Pinjam</font></label>
										<div class="col-sm-8">
											<input name="tarikh_pinjam" id="datepicker" width="312" />
											<script>
												$('#datepicker').datepicker({ format: 'dd mmmm yyyy' });
											</script>
										</div>
									</div>
									<div class="form-group row">
										
										<label for="inputPassword3" class="col-sm-4 col-form-label style3"><font size="2">Tarikh Dijangka
										Pulang</font></label>
										<div class="col-sm-8">
											<input name="tarikh_dijangkapulang" id="datepicker2" width="312" />
											<script>
												$('#datepicker2').datepicker({ format: 'dd mmmm yyyy' });
											</script>
										</div>
									</div>
									<div class="form-group row">
										
										<label for="inputPassword3" class="col-sm-4 col-form-label style3"><font size="2">Peralatan 
										1</font></label>
										<div class="col-sm-8">
											<select name="peralatan1" id="peralatan1" class="form-control fields-mapping">
												<option value="Tiada">--- Sila pilih ---</option>
												<?php
												$sql1 = "SELECT * FROM peralatan WHERE peralatan_status = '0' ORDER BY peralatan ASC";
												
												$rs1 = mysql_query($sql1);
												
												while($rows1 = mysql_fetch_array($rs1))
												{
													echo "<option value=\"".$rows1['no_aset']."\">".$rows1['peralatan']." - ".$rows1['model']." - ".$rows1['no_aset']."</option>\n  ";
												}
												?>
											</select>
										</div>
									</div>
									<div class="form-group row">
										
										<label for="inputPassword3" class="col-sm-4 col-form-label style3"><font size="2">Peralatan 
										2</font></label>
										<div class="col-sm-8">
											<select name="peralatan2" id="peralatan2" class="form-control fields-mapping">
												<option value="Tiada">--- Sila pilih ---</option>
												<?php
												$sql2 = "SELECT * FROM peralatan WHERE peralatan_status = '0' ORDER BY peralatan ASC";
												
												$rs2 = mysql_query($sql2);
												
												while($rows2 = mysql_fetch_array($rs2))
												{
													echo "<option value=\"".$rows2['no_aset']."\">".$rows2['peralatan']." - ".$rows2['model']." - ".$rows2['no_aset']."</option>\n  ";
												}
												?>
											</select>
										</div>
									</div>
									<div class="form-group row">
										
										<label for="inputPassword3" class="col-sm-4 col-form-label style3"><font size="2">Peralatan 
										3</font></label>
										<div class="col-sm-8">
											<select name="peralatan3" id="peralatan3" class="form-control fields-mapping">
												<option value="Tiada">--- Sila pilih ---</option>
												<?php
												$sql3 = "SELECT * FROM peralatan WHERE peralatan_status = '0' ORDER BY peralatan ASC";
												
												$rs3 = mysql_query($sql3);
												
												while($rows3 = mysql_fetch_array($rs3))
												{
													echo "<option value=\"".$rows3['no_aset']."\">".$rows3['peralatan']." - ".$rows3['model']." - ".$rows3['no_aset']."</option>\n  ";
												}
												?>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-sm-10">
											<br>
											<div align="center">
												<button name="submit" type="submit" class="btn btn-primary style4">Hantar 
												Permohonan</button>
											</div>
										</div>
									</div>
								</form>
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
		<script type="text/javascript">
			//$(".fields-mapping").change(function() {            
		        //var selectedOption = $('option:selected', this).text(); 
		        //$(".fields-mapping option").show();
		        //$(".fields-mapping option:contains('" + selectedOption + "'):not(:selected)").hide();
		   // });
		</script>
	</body>
	</html>