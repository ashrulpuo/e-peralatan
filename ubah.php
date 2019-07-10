<?php 	
	session_start();
	include 'connection.php';
	
	if(isset($_POST['submit']))
	{
		$test = "SELECT * FROM permohonan WHERE id_permohonan = '".$_SESSION['id_permohonan']."'";
		$test=mysql_query($test);

		while($lists=mysql_fetch_array($test)) { 
			$peralatan1 = $lists['peralatan1'];
			$peralatan2 = $lists['peralatan2'];
			$peralatan3 = $lists['peralatan3'];
		}

        $string1 = preg_replace('/\s+/', '', $peralatan1);
        $string2 = preg_replace('/\s+/', '', $peralatan2);
        $string3 = preg_replace('/\s+/', '', $peralatan3);

        //print_r($string1);
       	//echo '<script type="text/javascript">alert("'.$string1.'");</script>';
		
		//peralatan1 change
		if ($peralatan1 == 'Tiada') {
			$update = "UPDATE peralatan SET peralatan_status=1 WHERE no_aset = '".$_POST['peralatan1']."' ";
				mysql_query($update)or die(mysql_error());
		} else if ($peralatan1 != 'Tiada') {
		 	$update = "UPDATE peralatan SET peralatan_status=0 WHERE no_aset = '".$string1."' ";
			mysql_query($update)or die(mysql_error());

			$update = "UPDATE peralatan SET peralatan_status=1 WHERE no_aset = '".$_POST['peralatan1']."' ";
			mysql_query($update)or die(mysql_error());
		} else {

		}
		
		//peralatan2 change
		if ($peralatan2 == 'Tiada') {
			$update = "UPDATE peralatan SET peralatan_status=1 WHERE no_aset = '".$_POST['peralatan2']."' ";
				mysql_query($update)or die(mysql_error());
		} else if ($peralatan2 != 'Tiada') {
		 	$update = "UPDATE peralatan SET peralatan_status=0 WHERE no_aset = '".$string2."' ";
			mysql_query($update)or die(mysql_error());

			$update = "UPDATE peralatan SET peralatan_status=1 WHERE no_aset = '".$_POST['peralatan2']."' ";
			mysql_query($update)or die(mysql_error());
		} else {

		}
		
		

		//peralatan3 change
		if ($peralatan3 == 'Tiada') {
			$update = "UPDATE peralatan SET peralatan_status=1 WHERE no_aset = '".$_POST['peralatan3']."' ";
				mysql_query($update)or die(mysql_error());
		} else if ($_POST['peralatan3'] != $peralatan3){
		 	$update = "UPDATE peralatan SET peralatan_status=0 WHERE no_aset = '".$string3."' ";
			mysql_query($update)or die(mysql_error());

			$update = "UPDATE peralatan SET peralatan_status=1 WHERE no_aset = '".$_POST['peralatan3']."' ";
			mysql_query($update)or die(mysql_error());
		} else {

		}
		

		$update = "UPDATE permohonan SET peralatan1='".$_POST['peralatan1']."', peralatan2='".$_POST['peralatan2']."', peralatan3='".$_POST['peralatan3']."' WHERE id_permohonan='".$_SESSION['id_permohonan']."'";
		mysql_query($update)or die(mysql_error());

		
		$semua = "SELECT * FROM pulang WHERE id_permohonan = '".$_SESSION['id_permohonan']."' and status=0";
		$peralatan=mysql_query($semua);
			$counter = 1;
			while ($items=mysql_fetch_array($peralatan)) {
				$counter2 = $counter++;   
				
				if ($counter2 == 1) {
		          $update = "UPDATE pulang SET peralatan='".$_POST['peralatan1']."' WHERE id_permohonan='".$_SESSION['id_permohonan']."' and id_pemulang='".$items['id_pemulang']."'";
		          mysql_query($update)or die(mysql_error());
		        }

		        if ($counter2 == 2) {
		          $update = "UPDATE pulang SET peralatan='".$_POST['peralatan2']."' WHERE id_permohonan='".$_SESSION['id_permohonan']."' and id_pemulang='".$items['id_pemulang']."'";
		          mysql_query($update)or die(mysql_error());
		        }

		        if ($counter2 == 3) {
		          $update = "UPDATE pulang SET peralatan='".$_POST['peralatan3']."' WHERE id_permohonan='".$_SESSION['id_permohonan']."' and id_pemulang='".$items['id_pemulang']."'";
		          mysql_query($update)or die(mysql_error());
		        }
				
				
	    }

		
		

		


		header('Location: perincian.php?permohonanID='.$_SESSION['id_permohonan']);
	}
?>