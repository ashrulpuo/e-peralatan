<?php 	
	session_start();
	include 'connection.php';
	
	if(isset($_POST['submit']))
	{
		$insert = "INSERT INTO permohonan nama_pengeluar='".$_POST['nama_pengeluar']."' WHERE id_permohonan='".$_SESSION['id_permohonan']."'";
		
		mysql_query($update)or die(mysql_error());
		
		header('Location: perincian.php?permohonanID='.$_SESSION['id_permohonan']);
	}
?>