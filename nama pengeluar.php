<!doctype html>
<html lang="en"><title>nama pengeluar</title>
	<?php 

	include "header.php";
	?>
	
	<?php
		if(empty($_SESSION['id_pengguna']))
		{
			header('Location:login.php');;
		}
	?>
	
	<?php
	$permohonanID = '';
	if(isset($_GET['permohonanID'])){
    	$permohonanID = $_GET['permohonanID'];
    	//echo $permohonanID;
 	} 
	?>
	<?php 		
		$result = mysql_query("SELECT * FROM permohonan WHERE id_permohonan = '".$permohonanID."'") or die(mysql_error());
		$row = mysql_fetch_array( $result );
		
		$_SESSION['id_permohonan'] = $permohonanID ;
	?>
	
	<?php
if(isset($_POST['submit']))
{

		//if(isset($_GET['permohonanID']) && !empty($_GET['permohonanID'])){
    		//echo "App = ".$_GET['permohonanID'];
		//} else {
    		//echo "App is empty";
		//}
		//$sql=("INSERT INTO permohonan(nama_pengeluar) VALUES ('".$_POST['nama_pengeluar']."')");
		$sql=("UPDATE permohonan SET nama_pengeluar = '".$_POST['nama_pengeluar']."' WHERE id_permohonan ='".$_GET['permohonanID']."'");
		$result=mysql_query($sql);
		if($result)
		{
		  ?>
        
        <script type="text/javascript">
		alert(" Nama pengeluar peralatan telah dikemaskini ");
		window.location.href='senarai.php';
		</script>         
    <?php
		
		}
		else
		{	
	?>
        <script type="text/javascript">
		alert(" INVALID TO PROCEED ! ");
		window.location.href='nama pengeluar.php';
		</script>       
    <?php
	
		}
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
						
						<h3>
						  Nama Pengeluar
						  <!-- <small class="text-muted">Sila masukkan No. Permohonan</small> -->
						</h3>
						<center>
						<form method="POST" action="nama pengeluar.php?permohonanID=<?php echo $permohonanID ?>">
						  <div class="form-group row " align="center">
							 <div class="form-group row">
							
                
                <div class="" align="center">
                 <center>
				  <select name="nama_pengeluar" class="form-control">
                    <span class="col-sm-8">
                    <label>
                    
                    <option value="Mohd Khoir Bin Shafie">Mohd Khoir Bin Shafie</option>
                    <option value="Raja Mohd Noor Aizal Bin Raja Ismail">Raja Mohd Noor Aizal Bin Raja Ismail</option>
                    <option value="Nurnajihan Binti Nasoha">Nurnajihan Binti Nasoha</option>
                    <option value="Mohd Isham Bin Ishak">Mohd Isham Bin Ishak</option>
                    <option value="Mohd Hafiz Bin Mohd Sharif">Mohd Hafiz Bin Mohd Sharif</option>
                    <option value="Nura Binti Hj. Abdul Raof">Nura Binti Hj. Abdul Raof</option>
                    <option value="Noor Ain Binti Hj. Abdul Rahim">Noor Ain Binti Hj. Abdul Rahim</option>
                   
                  </select>
				  </center>
                  
                  </label>
</div>
							</div>
						  </div>
						  <div class="form-group row">
							<label for="staticEmail" class="col-sm-2 col-form-label"></label>
						  </div>
						  <div class="form-group row"></div>
						  <button type="submit" name="submit" class="btn btn-primary mb-2">Kemaskini</button> 
						  <a href="javascript:history.go(-1)" class="btn btn-dark mb-2" role="button">Kembali <<</a>
						</form></center>
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