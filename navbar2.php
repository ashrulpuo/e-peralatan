<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php"><b>e-Peralatan</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
	<ul class="navbar-nav">
	  <li <?php if (basename($_SERVER['PHP_SELF']) == "administrator.php") echo 'class="nav-item active"';?>>
		<a class="nav-link" href="administrator.php?page=1">Permohonan Baru</a>
	  </li>
	  <li <?php if (basename($_SERVER['PHP_SELF']) == "senarai.php") echo 'class="nav-item active"';?>>
		<a class="nav-link" href="senarai.php?page=1">Senarai Semua Permohonan</a>
	  </li>
	  <li <?php if (basename($_SERVER['PHP_SELF']) == "logout.php") echo 'class="nav-item active"';?>>
		<a class="nav-link" href="cari.php">Carian Permohonan</a>
	  </li>
	  
	 
	  
	  
	  
	  
	  
	  <li <?php if (basename($_SERVER['PHP_SELF']) == "logout.php") echo 'class="nav-item active"';?>>
		<a class="nav-link" href="logout.php">Log Keluar</a>
	  </li>
	</ul>
  </div>
</nav>