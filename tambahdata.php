  <!DOCTYPE html>
  <html>
  <head>
  	<title>Arkadmy</title>
  	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <style type="text/css">
      body {
       padding-top: 70px; 

      }
      
      .jumbotron {
        color: #2c3e50;
        background: #ecf0f1;

      }
      .navbar-inverse {
        background: #2c3e50;
        color: white;
      }

      .navbar-brand {
        width: 100px;
      }
      .navbar-inverse .navbar-brand, .navbar-inverse a{
        color:white;
      }
      .navbar-inverse .navbar-nav>li>a  {
        color: white;
      } 
      .navbar-header .navbar-brand>img {
        width: 50px;
      }

    </style>

  </head>
  <body>
  	<nav class="navbar navbar-inverse navbar-fixed-top">
  		<div class="container">
  			<div class="navbar-header">
  				 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav-demo" aria-expanded="false">
  	        <span class="sr-only">Toggle navigation</span>
  	        <span class="icon-bar"></span>
  	        <span class="icon-bar"></span>
  	        <span class="icon-bar"></span>
  	      </button>
  				<a href="#" class="navbar-brand"><img src="logo arkademy.png"  style="display: inline-block;"> </a>
  			</div>
  			<div class="collapse navbar-collapse" id="bs-nav-demo">
  				<ul class="nav navbar-nav">
  					<li><a href="#">Arkademy Bootcamp</a></li>
  					<li><a href="#">Contact</a></li>
  				</ul>
  				<ul class="nav navbar-nav navbar-right">
  					<li><a href="#">Sign Up</a></li>
  					<li><a href="#">Login</a></li>
  				</ul>
  			</div>
  		</div>
  	</nav>

    <div class="container">

    <div class="jumbotron">
      <h1><i class="glyphicon glyphicon-plus"></i> Add Data </h1>
      <p></p> 
        <form method="post">
          <div class="form-group">
            <label>Name:</label>
            <input type="textl" class="form-control" name="names" placeholder="Enter Name">
          </div>
          <div class="form-group">
            <label >Work:</label>
            <select class="form-control"name="id_work">
              <option value="1">Front End</option>
              <option value="2">Back End</option>
            </select>
          </div>
          <div class="form-group">
            <label >Salary:</label>
            <select class="form-control" name="id_salary">
              <option value="1">Rp10.000.000</option>
              <option value="2">RP12.000.000</option>
            </select>
          </div>
        <br> <br> 
        <div>
          <input type="submit"  class="btn btn-success" value="SAVE">
          <a href="index.php"> <input type="button" class="btn btn-primary" name="HOME" value="Kembali" > </a> <nbr>

        </div>    
      
    </form>

      <?php
    $server   = "localhost";
    $user     = "root";
    $password = "";
    $database = "arkademy";

    if (isset($_POST["names"])) {
      $nama = $_POST["names"];
      $id_work = $_POST["id_work"];
      $id_salary = $_POST["id_salary"];

      $koneksi = mysqli_connect($server,$user,$password,$database);
      if (!$koneksi) {
          die("Connection failed: " . mysqli_connect_error());
      }

      $sql = "INSERT INTO name (names, id_work, id_salary)
          VALUES ( '".$nama."' ,'". $id_work."', '".$id_salary."' )";

      if (mysqli_query($koneksi, $sql)) {
          echo "Berhasil Menambah 1 Karyawan";
      } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
      }

    }


  ?>
    </div>


    </div>
 
  <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
  </html>

