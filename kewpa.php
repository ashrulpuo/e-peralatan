<?php

session_start();

if(!isset($_SESSION['sess_user']))
{

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="e-peralatan"; // Database name


// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

  $permohonanID = '';
  if(isset($_GET['permohonanID'])){
      $permohonanID = $_GET['permohonanID'];
      //echo $permohonanID;
  } 
  $sql="SELECT * FROM permohonan WHERE id_permohonan='".$permohonanID."'";
//$sql="SELECT permohonan.permohonan_id, permohonan.nama_pemohon, permohonan.jawatan, permohonan.peralatan1, permohonan.peralatan2, permohonan.peralatan3 FROM permohonan INNER JOIN peralatan ON permohonan.peralatan1 = peralatan.id_no";
$result=mysql_query($sql);
//print_r($result);
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>kewpa9</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
</head>

<body>



<div class="w3-container" align="right">
 <p>AM 2.4 Lampiran A</p>
  <h3>KEW.PA-9</h3>

  <div class="w3-border">
    <div class="w3-container w3-margin w3-green">

      <p>No.Permohonan :<?php echo $permohonanID ?></p>
	    
		
		
    </div>
  </div>
</div>


<h3 align="center">BORANG PERMOHONAN PERGERAKAN/PINJAMAN ASET ALIH</h3>

<div align="center"><br />
  <br />
  <br />
  
  <table width="1017" border="1" cellspacing="0" cellpadding="0">

<?php
while($rows=mysql_fetch_array($result))
  //print_r($rows);
{
?>

 
    <tr>
      <td width="245">Nama Pemohon </td>
      <td width="239"><?php echo $rows['nama_pemohon']; ?></td>
      <td width="145">Tujuan : </td>
      <td width="370"><?php echo $rows['tujuan']; ?></td>
    </tr>
    <tr>
      <td>Jawatan : </td>
      <td><?php echo $rows['jawatan']; ?></td>
      <td>Tempat Digunakan : </td>
      <td><?php echo $rows['tempat_digunakan']; ?></td>
    </tr>
    <tr>
      <td>Bahagian : </td>
      <td><?php echo $rows['nama_unit']; ?></td>
      <td>Nama Pengeluar : </td>
      <td><?php echo $rows['nama_pengeluar']; ?></td>
     
    </tr>
	 
	

<?php
}
?>

	
	
  </table>
	
  <br />
  <br />
  <br />
  <table width="1015" border="1" cellspacing="0" cellpadding="0">
    <tr>
      <td width="31" rowspan="2"><div align="center">Bil.</div></td>
      <td width="184" rowspan="2"><div align="center">No Siri Pendaftaran </div></td>
      <td width="159" rowspan="2"><div align="center">Keterangan Aset </div></td>
      <td colspan="2"><div align="center">Tarikh </div></td>
	  
    <td width="175" rowspan="2"><div align="center">(Lulus/Tidak Lulus)</div></td>
	  
    <td colspan="2"><div align="center">Tarikh </div></td>
      <td width="139" rowspan="2"><div align="center">Catatan</div></td>
    </tr>
      
    <tr>
      <td width="57"><div align="center">Dipinjam</div></td>
      <td width="96"><div align="center">Dijangka Pulang</div></td>
      <td width="57"><div align="center">Dipulang</div></td>
      <td width="96"><div align="center">Diterima</div></td>
    </tr>
    
    <?php
        $all="SELECT * FROM permohonan WHERE id_permohonan='".$permohonanID."'";
        $all=mysql_query($all);
        while($items=mysql_fetch_array($all)) { 
        $peralatan1 = $items['peralatan1'];
        $peralatan2 = $items['peralatan2'];
        $peralatan3 = $items['peralatan3'];
      };

      
      
      if ($peralatan1 == 'tiada') {
        $test = "SELECT permohonan.*, b.peralatan as nama_peralatan2, c.peralatan as nama_peralatan3 FROM permohonan JOIN peralatan b ON permohonan.peralatan2 = b.no_aset JOIN peralatan c ON permohonan.peralatan3 = c.no_aset WHERE id_permohonan='".$permohonanID."'";
      } 

      if($peralatan1 != 'tiada' && $peralatan2 != 'tiada' && $peralatan3 != 'tiada') {
        $test = "SELECT permohonan.*, a.peralatan AS nama_peralatan1, b.peralatan as nama_peralatan2, c.peralatan as nama_peralatan3 FROM permohonan JOIN peralatan a ON permohonan.peralatan1 = a.no_aset JOIN peralatan b ON permohonan.peralatan2 = b.no_aset JOIN peralatan c ON permohonan.peralatan3 = c.no_aset  WHERE id_permohonan='".$permohonanID."'";
      }
          
          $test=mysql_query($test);
          while($lists=mysql_fetch_array($test)) { 
      
      $tarikhPulang="SELECT * FROM pulang WHERE id_permohonan='".$permohonanID."'";
        $tarikhPulang=mysql_query($tarikhPulang);
        while($pulangs=mysql_fetch_array($tarikhPulang)) { 
      
    ?>
    <tr>
      <td></td>
      <td><?php echo $lists['peralatan1']; ?></td>
      <td><?php echo $lists['nama_peralatan1'] ; ?></td>
      <td><?php echo $lists['tarikh_pinjam']; ?></td>
      <td><?php echo $lists['tarikh_dijangkapulang']; ?></td>
      <td><?php echo ($lists['status'] == 1) ? 'Lulus' : 'Tidak Lulus' ; ?></td>
      <td><?php echo $pulangs['tarikh_pulang']; ?></td>
      <td><?php echo $pulangs['tarikh_pulang']; ?></td>
      <td></td>
    </tr> <tr>
      <td></td>
      <td><?php echo $lists['peralatan2']; ?></td>
      <td><?php echo $lists['nama_peralatan2'] ; ?></td>
      <td><?php echo $lists['tarikh_pinjam']; ?></td>
      <td><?php echo $lists['tarikh_dijangkapulang']; ?></td>
      <td><?php echo ($lists['status'] == 1) ? 'Lulus' : 'Tidak Lulus' ; ?></td>
      <td><?php echo $pulangs['tarikh_pulang']; ?></td>
      <td><?php echo $pulangs['tarikh_pulang']; ?></td>
      <td></td>
    </tr> 
    <tr>
      <td></td>
      <td><?php echo $lists['peralatan3']; ?></td>
      <td><?php echo $lists['nama_peralatan3'] ; ?></td>
      <td><?php echo $lists['tarikh_pinjam']; ?></td>
      <td><?php echo $lists['tarikh_dijangkapulang']; ?></td>
      <td><?php echo ($lists['status'] == 1) ? 'Lulus' : 'Tidak Lulus' ; ?></td>
      <td><?php echo $pulangs['tarikh_pulang']; ?></td>
      <td><?php echo $pulangs['tarikh_pulang']; ?></td>
	    <td></td>
    </tr> 
    <?php }} ?> 
    
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
</body>
</html>
<?php
}
?>