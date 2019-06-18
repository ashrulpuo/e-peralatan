<!doctype html>
<html lang="en">
  <?php include "header.php";?>
  <?php 
		
		if(isset($_POST['submit']))
		{
			if(!empty($_POST['username']))
			{				
				$username = mysql_real_escape_string(trim($_POST['username']));
				$password = mysql_real_escape_string(trim($_POST['password']));
				
				$query = mysql_query("select * from pengguna where username = '".$username."' and password = '".$password."'");      
					   
				if(mysql_num_rows($query) == 1)
				{                   
					$_SESSION['username'] = $_POST['username'];
					$_SESSION['password'] = $_POST['password'];
					$_SESSION['id_pengguna'] = mysql_result($query,0,'id_pengguna');
					$_SESSION['nama_penuh'] = mysql_result($query,0,'nama_penuh');
					$_SESSION['jawatan'] = mysql_result($query,0,'jawatan');	
					$_SESSION['bahagian'] = mysql_result($query,0,'bahagian');			
					
					echo "<META http-equiv=\"refresh\" content=\"0;URL=administrator.php?page=1\">";
				}
				else
				{
					echo "<script>alert('ID Pengguna atau Katalaluan yang anda gunakan mungkin salah. Sila cuba sekali lagi.'); window.location = './login.php';</script>";
				}
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
					<div class="col col-lg-4">
						
						<form method="POST" action="<?php echo $_SERVER['REQUEST_URI'];?>" onSubmit="window.location.reload()">
						  <div class="form-group">
							<label for="exampleInputEmail1">ID Pengguna</label>
							<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID Pengguna" name="username">
						  </div>
						  <div class="form-group">
							<label for="exampleInputPassword1">Katalaluan</label>
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Katalaluan" name="password">
						  </div>
						  <button type="submit" name="submit" class="btn btn-primary">Log Masuk</button>
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