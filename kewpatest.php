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
  $sql="SELECT * FROM tandatangan WHERE id_permohonan='".$permohonanID."'";

$result=mysql_query($sql);

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>kewpatest</title>

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
  
  
	
  <br />
  <br />
  <br />
  
  
  
  
  <table width="1017" border="1" cellspacing="0" cellpadding="0">
    <?php
while($rows=mysql_fetch_array($result))
  //print_r($rows);
{
?>
    <tr>
      <td width="245">Nama Peminjam : </td>
      <td width="239"><?php echo $rows['nama_a']; ?></td>
      <td width="145">Nama Pelulus : </td>
      <td width="370"><?php echo $rows['nama_b']; ?></td>
    </tr>
    <tr>
      <td>Jawatan : </td>
      <td><?php echo $rows['jawatan_a']; ?></td>
      <td>Jawatan : </td>
      <td><?php echo $rows['jawatan_b']; ?></td>
    </tr>
    <tr>
      <td>Bahagian : </td>
      <td><?php echo $rows['bahagian_a']; ?></td>
      <td>Bahagian : </td>
      <td><?php echo $rows['bahagian_b']; ?></td>
    </tr>
    <tr>
      <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
      <td width="245">Nama Pemulang : </td>
      <td width="239"><?php echo $rows['nama_c']; ?></td>
      <td width="145">Nama Penerima : </td>
      <td width="370"><?php echo $rows['nama_d']; ?></td>
    </tr>
    <tr>
      <td width="245">Jawatan : </td>
      <td width="239"><?php echo $rows['jawatan_c']; ?></td>
      <td width="145">Jawatan : </td>
      <td width="370"><?php echo $rows['jawatan_d']; ?></td>
    </tr>
    <tr>
      <td width="245">Bahagian : </td>
      <td width="239"><?php echo $rows['bahagian_c']; ?></td>
      <td width="145">Bahagian : </td>
      <td width="370"><?php echo $rows['bahagian_d']; ?></td>
    </tr>
    <?php
}
?>
  </table>
  <p>&nbsp;</p>
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