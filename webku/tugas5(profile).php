<<?php
	session_start();
	if (!isset($_SESSION['nama'])) {
		echo "Please login to access Unknown <a href='Percobaan5.php'>click here</a>";
	}
	else{
?>
<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="tugas5.css">
	</head>

	<body>
		<header>
			<ul>
				<a href="tugas5.php"><li>Home</li></a>
				<a href="tugas5(profile).php"><li>Profile</li></a>
				<a href="logout.php"><li>Logout</li></a>
			<ul>
		</header>

		<section>
			<center>
				<font style="font-size: 40px;">Welcome to Unknown Profile</font>
			</center>
		</section>

		<footer>
			Copyright &copy; 2018 Argo Galih Pribadi. All Rights Reserved.
		</footer>
	</body>
</html>
<?php } ?>