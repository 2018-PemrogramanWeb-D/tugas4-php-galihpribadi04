<?php
	session_start();
	if (isset($_SESSION['nama'])) {
		echo "for the safety of your account, please logout first <a href='tugas5.php'>click here</a>";
	}
	else{
?>
<html>
<head>
	<title>TEST PHP</title>
	<link rel="stylesheet" type="text/css" href="tugas5.css">
</head>  
<body>
	<h1 style="text-align: center;">Welcome to Unknown</h1>
	<section>
		<div class="box-login">
			<form action="http://localhost/webku/tugas5.php" method="post">
				<font style="font-size: 26px;color: #fff;">Login</font><br>
				Email:<br><input type="text" name="email"><br>
				Password:<br><input type="password" name="pwd"><br>
				<input type="submit" name="login" value="Login">
			</form>
			<?php
				include "connect.php";
				if(isset($_POST['login'])){
					$cek = mysqli_query($conn, "SELECT * FROM user WHERE email = '".$_POST['email']."'AND password= '".$_POST['pwd']."'");
					$hasil = mysqli_fetch_array($cek);
					$count = mysqli_num_rows($cek);
					$nama_user = $hasil['nama'];
					if($count > 0){
						session_start();
						$_SESSION['nama'] = $nama_user;
						header("location:tugas5.php");
					}
					else{
						echo "Gagal untuk login";
					}
				}
			?>
		</div>
	</section>
</body>
</html>
<?php } ?>