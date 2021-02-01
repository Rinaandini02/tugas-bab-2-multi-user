<!DOCTYPE html>
<html>
<head>
	<title>Halaman andmin</title>
</head>
<body>
	<?php 
			session_start();
			if($_SESSION['level']==""){
				header("location:index.php?pesan=gagal");
			}
	 ?>
	 		<h1>Halaman Admin</h1>
	 		<p>Halo<b><?php echo $_SESSION['Usermane'];?></b>anda telah login sebagai <b><?php echo $_SESSION['level'];?></b>.</p>
	 		<a href="logout.php">LOGOUT</a>
	 		<br/>
</body>
</html>