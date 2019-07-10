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
	if(!empty($_POST['nama_a']))
	{				
		mysql_query("INSERT INTO tandatangan (nama_a,jawatan_a,tarikh_a,nama_a,jawatan_a,tarikh_a,nama_a,jawatan_a,tarikh_a,nama_a,jawatan_a,tarikh_a) VALUES ('".$_POST['nama_pemohon']."','".$_POST['jawatan']."','".$_POST['nama_unit']."','".$_POST['tujuan']."','".$_POST['tempat_digunakan']."','".$_POST['tarikh_pinjam']."','".$_POST['tarikh_dijangkapulang']."','".$_POST['peralatan1']."','".$_POST['peralatan2']."','".$_POST['peralatan3']."')");

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

							
      <table border = "3" width = "791" height = "457">
         <tr>
            <td width="337" height="215">
									Nama Peminjam:
									  <input type="text" class="form-control" id="inputEmail3" placeholder="Nama" name="nama_a">
									
									Jawatan:
									<input type="text" class="form-control" id="inputEmail3" placeholder="Jawatan" name="jawatan_a">
									
									 Tarikh:
										<input type="date"  value="<?php echo date('Y-m-d'); ?>" name="tarikh_a"/>
             
										
										
		   </td>
           <td width="337" height="215">
									Nama Pelulus:
									  <input type="text" class="form-control" id="inputEmail3" placeholder="Nama" name="nama_b">
									
									Jawatan:
									<input type="text" class="form-control" id="inputEmail3" placeholder="Jawatan" name="jawatan_b">
									
									
									 Tarikh:
										<input type="date"  value="<?php echo date('Y-m-d'); ?>" name="tarikh_b"/>
             	
										
							
		   </td>
         </tr>
         
         <tr>
            <td width="337" height="215">
									Nama Pemulang:
									  <input type="text" class="form-control" id="inputEmail3" placeholder="Nama" name="nama_c">
									
									Jawatan:
									<input type="text" class="form-control" id="inputEmail3" placeholder="Jawatan" name="jawatan_c">
									
									
										
										 Tarikh:
										<input type="date"  value="<?php echo date('Y-m-d'); ?>" name="tarikh_c" />
             
							
		   </td>
             <td width="337" height="215">
									Nama Penerima:
									  <input type="text" class="form-control" id="inputEmail3" placeholder="Nama" name="nama_d">
									
									Jawatan:
									<input type="text" class="form-control" id="inputEmail3" placeholder="Jawatan" name="jawatan_d">
									
							        Tarikh:
										<input type="date"  value="<?php echo date('Y-m-d'); ?>" name="tarikh_d" />
         					
		   </td>
         </tr>
</table>
</body>
   <br>
   <br>
   
									<div class="col-sm-10">

										<button type="submit" name="submit" id="submit" align="center" class="btn btn-primary btn-sm"><em>Sahkan Tandatangan</em></button>

</div>
</form>
										<a href="senarai.php" class="btn btn-dark btn-sm" role="button">Kembali <<</a>



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