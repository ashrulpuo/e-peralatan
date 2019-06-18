<?php 	
	include 'connection.php';
	
	$update = "UPDATE permohonan SET status='1' WHERE id_permohonan='".$_REQUEST['permohonanID']."'";
	mysql_query($update)or die(mysql_error());

	//header('Location: administrator.php?page=1');
				
	echo "<script>
	alert('Permohonan telah diluluskan');
	window.location.href='administrator.php?page=1';
	</script>";
?>