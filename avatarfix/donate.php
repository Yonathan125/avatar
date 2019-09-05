<html>
<head>
<title>AVATAR | ADOPT. DONATE.</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<div class='header' src="home1.jpg" align='center'></div>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
.header {
    position: relative;
margin: auto;
padding:35px;
overflow: hidden;
background:url(home1.jpg) no-repeat center center;
width:975px;
height: 280px;
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
  background-color: #db4040;
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

/* Column container */
.row { 
  display: flex;
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  flex: 30%; /* Set the width of the sidebar */
  background-color: #fff; /* Grey background color */
  padding: 20px; /* Some padding */
}

/* Main column */
.main { 
  flex: 70%; /* Set the width of the main content */
  background-color: white; /* White background color */
  padding: 20px; /* Some padding */
}



/* The flip box container - set the width and height to whatever you want. We have added the border property to demonstrate that the flip itself goes out of the box on hover (remove perspective if you don't want the 3D effect */
.flip-box {
  background-color: transparent;
  width: 300px;
  height: 200px;
  border: 1px solid #f1f1f1;
  perspective: 1000px; /* Remove this if you don't want the 3D effect */
}

/* This container is needed to position the front and back side */
.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

/* Style the front side */
.flip-box-front {
  background-color: #bbb;
  color: black;
}

/* Style the back side */
.flip-box-back {
  background-color: #4caf50;
  color: white;
  transform: rotateY(180deg);
}
.column {
  float: left;
  width: 33.33%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.column2 {
  float: left;
  width: 50%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
* {box-sizing: border-box;}

/* Style the input container */
.input-container {
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

/* Style the form icons */
.icon {
  padding: 10px;
  background: #4CAF50;
  color: white;
  min-width: 50px;
  text-align: center;
}

/* Style the input fields */
.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid #333;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
/* Style the input container */
.topnav .login-container {
  float: right;
}

/* Style the input field inside the navbar */
.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  width: 150px; /* adjust as needed (as long as it doesn't break the topnav) */
}

/* Style the button inside the input container */
.topnav .login-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .login-container button:hover {
  background: #ccc;
}

/* Add responsiveness - On small screens, display the navbar vertically instead of horizontally */
@media screen and (max-width: 600px) {
  .topnav .login-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .login-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc; 
  }
}
.footer {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  background-color: #db4040;
  color: white;
  text-align: center;
}
.container {
  position: relative; 
  max-width: 800px; /* Maximum width */
  margin: 0 auto; /* Center it */
}

.container .content {
  position: absolute; /* Position the background text */
  bottom: 0; /* At the bottom. Use top:0 to append it to the top */
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1; /* Grey text */
  width: 100%; /* Full width */
  padding: 20px; /* Some padding */
}
s {
font-family: Retro Thunders;
}
* {
  box-sizing: border-box;
}
.rectangle {
  height: 200px;
  width: 250px;
  background-color: #4caf50;
}
.vl {
  border-left: 6px black;
  height: 200px;
}

</style>
<div class="topnav">
  <a class="active" href="home.html"><img src="side1.png" alt="Avatar" class="home"></a>
    <a href="adopt.php"><img src="adopt1.png" alt="Avatar" class="avatar">ADOPT</a>
  <a href="donate.php"><img src="donate1.png" alt="Avatar" class="avatar">DONATE</a>
  <div class="login-container">
  <a href="aboutus.html">TENTANG KAMI</a>
  <a href="masuk.html"> HUBUNGI KAMI</a>
  </div>
</div>
</div>
</head>
<body>
        <fieldset>
           <table border="1" width="100%">
  <tr>
    <th>Tanggal</th>
    <th>No. Rekening</th>
    <th>Keperluan</th>
    <th>Dana Masuk</th>
  </tr>
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  $query = "SELECT * FROM donasi"; // Query untuk menampilkan semua data siswa
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr align='center'>";
    echo "<td>".$data['tanggal']."</td>";
    echo "<td>".$data['no_rek']."</td>";
    echo "<td>".$data['keperluan']."</td>";
    echo "<td>".$data['biaya']."</td>";
    echo "</tr>";
  }
  ?>
  </table>
  <br>
    <legend>DONASI</legend> 
        <p>
            <label>Rekening Atas Nama:</label>
            <label>Avatar</label> 
        </p>
     <p>
            <label>No.Rekening</label>
            <label>008301109794508</label> 
        </p>
       <p>
            <label>No.Rekening</label>
            <label>008301109794508</label> 
        </p>
       <p>
            <label>Jika sudah mendonasikan untuk anak anak panti asuhan kami harap memberitahukan di 081325274142</label> 
        </p>
   </fieldset>
</body>
<div class="footer">
  <p>&copy Avatar 2019</p>
</div>
</html>