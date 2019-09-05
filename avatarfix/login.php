<html>
<head>
	<title>Welcome To The Avatar</title>
<div class='header' src="homepage.png" align='center'></div>
<style type="text/css"  href="style.css">
	body {
		background: #db4040;
	}
	h1 {
		color: white;
	}
	h2 {
		color: white;
	}
	.header {
		position: relative;
margin: auto;
padding:35px;
overflow: hidden;
background:url(homepage.png) no-repeat center center;
width:975px;
height: 280px;
	}
	.wrapper {
		text-align: center;
}
	.button {
  background-color: #333; /* Hijau */
  border: none;
  color: white;
  padding: 32px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
}
</style>	
</head>
<body>
		<h1 align='center'>ADOPT. DONATE.</h1>
	<br>
	<h2 align='center'>Selamat Datang di Halaman Internal Avatar</h2>
		<div class="wrapper">
		<?php 
	$nama =  $_POST["username"];
	 ?>
<?php echo "<h2>".$_POST["username"]."</h2>"; 
?>
</div>
	<br>
	<br>
	<div class="wrapper">
	<a href="index.php"><button class="button">Data Anak</button></a>
    <a href="index1.php"><button class="button">Data Donasi</button></a>
</div>
	<br>
	<br>
<div class="wrapper">
</div>
</body>
</html>