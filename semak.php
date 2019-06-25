<!doctype html>
<html lang="en">
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
-->
</style>
  <?php include "header.php";?>
  <body>
	<div class="container">
		<div class="col-lg-12">
			<div class="card">
			  <div class="card-body shadow">
				<center><img src="img/6.png" class="img-fluid header" alt="Responsive image"></center>
				<?php include "navbar.php"; ?>
				<div class="row justify-content-md-center">
					<div class="col col-lg-8">
						<center>
          
						<form class="form-inline" method="GET" action="semakan.php">
						  <div class="form-group mb-2">
							<?
							$value =  $_POST['id_permohonan'];
							?>
                <label for="staticEmail2" class="sr-only"><em><font size="2">No. 
                Permohonan</font></em></label>
							<input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="No. Permohonan" name="test">
						  </div>
						  <div class="form-group mx-sm-3 mb-2">
				
                <label for="inputPassword2" class="sr-only"><em><font size="2">No. 
                Permohonan</font></em></label>
							<input type="text" class="form-control" id="inputPassword2" value="" placeholder="No. Permohonan" name="id_permohonan">
						  </div>
						  
              <button type="submit" name="submit" class="btn btn-primary mb-2"><em><font size="2">Semak 
              Permohonan</font></em></button>
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