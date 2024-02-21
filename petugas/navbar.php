<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.php">Beranda</a>
  <a href="data_barang.php">Data Barang</a>
  <a href="pembelian.php">Pembelian</a>
  <a href="../logout.php">Logout</a>
</div>
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  display: none;
  height: 100%;
  width: 250px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.php">Beranda</a>
  <a href="data_barang.php">Data Barang</a>
  <a href="pembelian.php">Pembelian</a>
  <a href="../logout.php">Logout</a>
</div>
<div class="card mt-5">
	<div class="card-body">
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Halaman Petugas</span>
</div>
</div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.display = "block";
}

function closeNav() {
  document.getElementById("mySidenav").style.display = "none";
}
</script>
  
</div>