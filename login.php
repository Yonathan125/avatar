<!DOCTYPE html>
<html>
<head>
<div class='header' src="header2.jpg" align='center'></div>
<style>
.header{
position: relative;
margin: auto;
padding:35px;
overflow: hidden;
background:url(header2.jpg) no-repeat center center;
width:975px;
height: 280px;
}
.login-container {
  float: right;
}
.topnav {
  background-color: #333;
  overflow: hidden;
  }
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  horizontal-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  }
.topnav a:hover {
  background-color: #ddd;
  color: black;
  }
.topnav a.active {
  background-color: #4CAF50;
  color: white;
  }
h1 {
font-family: Calibri;
}
p {
font-family: Calibri;
}
.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}
.home {
 vertical-align: middle;
 width: 70px;
 height: 70px;
 border-radius: 50%;
 }
 .home2{
 vertical-align: middle;
 width: 130px;
 height: 130px;
 border-radius: 50%;
 }
 * {
  box-sizing: border-box;
}
.dropdown {
  float: left;
  overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px; 
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}

/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #4CAF50;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}
</style>
<div class='topnav'>
  <a class='active' href='avatar1.html'><img alt='Avatar' class='home' src='logo.jpg'>
  </img></a>
    <a href='apa1.php'><img alt='Avatar' class='avatar' src='adopt.jpg'/> Adopt</a>
  <a href='donate.html'><img alt='Avatar' class='avatar' src='Untitled-5-Recovered.jpg'/>Donate</a>
  <div class='login-container'>
   <div class="dropdown">
    <button class="dropbtn">Hubungi Kami
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">0856789108</a>
      <a href="#">0812364527</a>
      <a href="#">0819223734</a>
    </div>
  </div> 
  <a href='add2.php'>input</a>
  <a href='login.html'>Login</a>
  </div>
</div>
<br>
<br>
<meta charset="UTF-8">
	<title>FORM Login</title>
	</head>
</head>
<body>
	<?php 
	$nama =  $_POST["username"];
	 ?>

Selamat Datang <?php echo $_POST["username"]; ?> <br>
</body>
</html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FORM Login</title>
	</head>
<body>



