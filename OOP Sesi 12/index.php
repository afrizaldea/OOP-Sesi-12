<?php
include 'pengunjung.php';

	$pengunjung = new user(); //-gith./afrizaldea
	$pengunjung-> setnama('dea'); 
	$pengunjung->setnamabelakang('afrizal');
	$pengunjung->setkomen('oop php');

?>
<!DOCTYPE HTML>
<HTML lang='id'>
	<head>
		<title>afrizaldea</title>
	</head>
	
		<body>
		
				<h3>Pengunjung</h3>
					<p>First Name : <?php echo $pengunjung->getnama(); ?></p>
					<p>Last Name: <?php echo $pengunjung->getnamabelakang(); ?></p>
					<p>Coments : <?php echo $pengunjung->getkomen(); ?></p>
		</body>
</html>