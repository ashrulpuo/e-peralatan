<?php 	
	session_start();
	include 'connection.php';
	
	if(isset($_POST['submit']))
	{
		$update = "UPDATE permohonan SET peralatan1='".$_POST['peralatan1']."', peralatan2='".$_POST['peralatan2']."', peralatan3='".$_POST['peralatan3']."' WHERE id_permohonan='".$_SESSION['id_permohonan']."'";
		mysql_query($update)or die(mysql_error());
		
		header('Location: perincian.php?permohonanID='.$_SESSION['id_permohonan']);
	}
?>