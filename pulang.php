<!doctype html>
<html lang="en">
<style type="text/css">
	<!--
	.style2 {
		font-weight: bold;
		font-family: "Times New Roman", Times, serif;
		font-size: 18px;
	}
	-->
</style>
<?php include "header.php";?>
<?php
$permohonanID = '';
if(isset($_GET['permohonanID'])){
	$permohonanID = $_GET['permohonanID'];
    	// 	echo $permohonanID;
} 
?>
<?php 

if(isset($_POST['submit']))
{
	if(!empty($_POST['nama_pemulang']))
	{		

		//
		//echo $_POST['peralatan1'];
		
		$nama = $_POST['nama_pemulang'];
		$tarikh = $_POST['tarikh_pulang'];
		$jawatan = $_POST['jawatan_pemulang'];
		$alatan1 = $_POST['1'];
		$alatan2 = $_POST['2'];
		$alatan3 = $_POST['3'];

		if ($alatan1) {
			mysql_query("UPDATE pulang SET nama_pemulang = '$nama',jawatan_pemulang = '$jawatan',tarikh_pulang = '$tarikh',status = '1' WHERE peralatan = '$alatan1'");
		
			mysql_query("UPDATE peralatan SET peralatan_status = '0' WHERE no_aset ='$alatan1'");
		}

		if ($alatan2) {
			mysql_query("UPDATE pulang SET nama_pemulang = '$nama',jawatan_pemulang = '$jawatan',tarikh_pulang = '$tarikh',status = '1' WHERE peralatan = '$alatan2'");
		
			mysql_query("UPDATE peralatan SET peralatan_status = '0' WHERE no_aset ='$alatan2'");
		}

		if ($alatan3) {
			mysql_query("UPDATE pulang SET nama_pemulang = '$nama',jawatan_pemulang = '$jawatan',tarikh_pulang = '$tarikh',status = '1' WHERE peralatan = '$alatan3'");
		
			mysql_query("UPDATE peralatan SET peralatan_status = '0' WHERE no_aset ='$alatan3'");
		}
		


				//echo "<script>
				//alert('Permohonan anda telah diterima');
				//window.location.href='cetak.php';
				//</script>";

		$result = mysql_query("SELECT * FROM pulang ORDER BY id_pemulang DESC") or die(mysql_error());
		$row = mysql_fetch_array( $result );

		$no_pemulang = $row['id_pemulang'];

		$_SESSION['no_pemulang'] = $no_pemulang;


		header('Location: senarai.php');
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
					<?php include "navbar2.php"; ?>
					<div class="row justify-content-md-center">
						<div class="col col-lg-8">

							<h3 align="left"> <span class="style2">Nama Pemulang </span> 
								<!--<small class="text-muted">With faded secondary text</small> -->
							</h3>
							<form method="POST" action="<?php echo $_SERVER['REQUEST_URI'];?>" id="pulangForm" onSubmit="window.location.reload()" >
								<div class="form-group row">

									<label for="inputEmail3" class="col-sm-4 col-form-label"><em><font size="2">Nama</font></em></label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="inputEmail3" placeholder="Nama" name="nama_pemulang" autocomplete="off">
									</div>
								</div>
								<div class="form-group row">

									<label for="inputPassword3" class="col-sm-4 col-form-label"><em><font size="2">Jawatan</font></em></label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="inputPassword3" placeholder="Jawatan" name="jawatan_pemulang" autocomplete="off">
									</div>
								</div>



								<div class="form-group row">

									<label for="inputPassword3" class="col-sm-4 col-form-label"><font size="2"><em>Tarikh 
									Pulang</em></font></label>
									<div class="col-sm-8">
										<input name="tarikh_pulang" id="datepicker2" width="312" autocomplete="off"/>
										<script>
											$('#datepicker2').datepicker({ format: 'dd mmmm yyyy' });
										</script>
									</div>
								</div>
								<div class="form-group row">
									<?php 
									
									$tarikhPulang="SELECT * FROM pulang WHERE id_permohonan='".$permohonanID."'";
							        $tarikhPulang=mysql_query($tarikhPulang);
							        while ($pulangs=mysql_fetch_array($tarikhPulang)) {
							          $is[] = $pulangs['peralatan'];
							          
							        }
							        //echo "<pre>";
							        //print_r($is);
							        //echo "</pre>";

									
									
									?>
									<label for="inputEmail3" class="col-sm-4 col-form-label"><em><font size="2">Peralatan</font></em></label>
									<div class="col-sm-8">
										<div class="row">
											<ul class="list-unstyled">
												<?php
													$semua = "SELECT * FROM pulang WHERE id_permohonan = '".$permohonanID."' and status=0";
													$peralatan=mysql_query($semua);
													$counter = 1;   
													while ($items=mysql_fetch_array($peralatan)) {
														$counter2 = $counter++;
							          				
							          				echo "<li>
							                              <label><input type='checkbox' id='peralatan' name='".$counter2."' value='".$items['peralatan']."'>".$items['peralatan']."</label>
							                            </li>";
											    }
												?>		
											</ul>
										</div>
									</div>
								</div>
								<div class="form-group row">

									<label for="inputPassword3" class="col-sm-4 col-form-label"></label>
								</div>
								<div class="form-group row"></div>



								<div class="form-group row">
									<div class="col-sm-10">

										<button type="submit" name="submit" id="submit" align="center" class="btn btn-primary btn-sm"><em>Sahkan Pemulangan</em></button>


										<a href="javascript:history.go(-1)" class="btn btn-dark btn-sm" role="button">Kembali <<</a>



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
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
</body>
</html>