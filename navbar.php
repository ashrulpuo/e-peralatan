<style type="text/css">
<!--
.style1 {font-family: Verdana, Arial, Helvetica, sans-serif}
-->
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a href="index.php" class="navbar-brand style1"><b>e-Peralatan</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
	<ul class="navbar-nav">
	  <li <?php if (basename($_SERVER['PHP_SELF']) == "index.php") echo 'class="nav-item active"';?>>
		<a class="nav-link" href="index.php">Laman Utama</a>
	  </li>
	  <li <?php if (basename($_SERVER['PHP_SELF']) == "permohonan.php") echo 'class="nav-item active"';?>>
		<a class="nav-link" href="permohonan.php">Borang Permohonan</a>
	  </li>
	  <li <?php if (basename($_SERVER['PHP_SELF']) == "semak.php") echo 'class="nav-item active"';?>>
		<a class="nav-link" href="semak.php">Semak Permohonan</a>
	  </li>
	  <li <?php if (basename($_SERVER['PHP_SELF']) == "hubungi.php") echo 'class="nav-item active"';?>>
		<a class="nav-link" href="hubungi.php">Hubungi Kami</a>
	  </li>
	  <li <?php if (basename($_SERVER['PHP_SELF']) == "login.php") echo 'class="nav-item active"';?>>
		<a class="nav-link" href="login.php">Administrator</a>
	  </li>
	  
	 
	  
	</ul>
  </div>
</nav>