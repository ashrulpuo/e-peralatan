<!doctype html>
<html lang="en">
	<?php include "header.php";?>
	<?php
		if(empty($_SESSION['id_pengguna']))
		{
			header('Location:login.php');;
		}
	?>
	<?php 		
		$result = mysql_query("SELECT * FROM permohonan WHERE id_permohonan = '".$_GET['permohonanID']."'") or die(mysql_error());
		$row = mysql_fetch_array( $result );
		
		$_SESSION['id_permohonan'] = $_GET['permohonanID'];
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
						<center><h3>
						  Ubah Peralatan Peminjam
						  <!-- <small class="text-muted">Sila masukkan No. Permohonan</small> -->
						</center></h3>
						<form method="POST" action="ubah.php">
						  <div class="form-group row">
							<label for="staticEmail" class="col-sm-2 col-form-label">Peralatan 1</label>
							<div class="form-group col-sm-10"">
								<select class="form-control" id="exampleFormControlSelect1" name="peralatan1">
									<?php
										$result_peralatan_1 = mysql_query("SELECT * FROM peralatan WHERE no_aset = '".$row['peralatan1']."'") or die(mysql_error());
										$row_peralatan_1 = mysql_fetch_array( $result_peralatan_1 );
									?>
									<option value="<?php echo $row['peralatan1'];?>"><?php echo ">> ".$row_peralatan_1['peralatan']." - ".$row_peralatan_1['model']." - ".$row_peralatan_1['no_aset']." <<";?></option>
									<?php
										$sql1 = "SELECT * FROM peralatan ORDER BY peralatan ASC";
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
							<label for="staticEmail" class="col-sm-2 col-form-label">Peralatan 2</label>
							<div class="form-group col-sm-10"">
								<select class="form-control" id="exampleFormControlSelect1" name="peralatan2">
									<?php
										$result_peralatan_2 = mysql_query("SELECT * FROM peralatan WHERE no_aset = '".$row['peralatan2']."'") or die(mysql_error());
										$row_peralatan_2 = mysql_fetch_array( $result_peralatan_2 );
									?>
									<option value="<?php echo $row['peralatan2'];?>"><?php echo ">> ".$row_peralatan_2['peralatan']." - ".$row_peralatan_2['model']." - ".$row_peralatan_2['no_aset']." <<";?></option>
									<?php
										$sql2 = "SELECT * FROM peralatan ORDER BY peralatan ASC";
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
							<label for="staticEmail" class="col-sm-2 col-form-label">Peralatan 3</label>
							<div class="form-group col-sm-10">
								<select class="form-control" id="exampleFormControlSelect1" name="peralatan3">
									<?php
										$result_peralatan_3 = mysql_query("SELECT * FROM peralatan WHERE no_aset = '".$row['peralatan3']."'") or die(mysql_error());
										$row_peralatan_3 = mysql_fetch_array( $result_peralatan_3 );
									?>
									<option value="<?php echo $row['peralatan3'];?>"><?php echo ">> ".$row_peralatan_3['peralatan']." - ".$row_peralatan_3['model']." - ".$row_peralatan_3['no_aset']." <<";?></option>
									<?php
										$sql3 = "SELECT * FROM peralatan ORDER BY peralatan ASC";
										$rs3 = mysql_query($sql3);
										
										while($rows3 = mysql_fetch_array($rs3))
										{
											echo "<option value=\"".$rows3['no_aset']."\">".$rows3['peralatan']." - ".$rows3['model']." - ".$rows3['no_aset']."</option>\n  ";
										}
									?>
								</select>
							</div>
						  </div>
						  <center><button type="submit" name="submit" class="btn btn-primary mb-2">Kemaskini</button> <a href="javascript:history.go(-1)" class="btn btn-dark mb-2" role="button">Kembali <<</a></center>
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
  </body>
</html>