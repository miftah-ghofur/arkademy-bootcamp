  <!DOCTYPE html>
  <html>
  <head>
  	<title>Arkadmy</title>
  	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
      <h1><i class="fa fa-money"></i> Arkademy Salary </h1>
      <p></p> 

      <?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "arkademy";

    $koneksi = mysqli_connect($server,$user,$password,$database);
    if (!$koneksi) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT name.id, name.names, work.name, salary.salary FROM salary INNER JOIN (name inner JOIN work ON name.id_work = work.id) on work.id_salary=salary.id";
    $result = mysqli_query($koneksi, $sql);

  
    if (mysqli_num_rows($result) > 0) { ?>
        <!-- // output data of each row
        echo "<table border=1>";
        echo "<tr>";
        echo "<td>Id</td>";
        echo "<td>Name</td>";
        echo "<td>Work</td>";
        echo "<td>Salary</td>";
        echo "<td>ACTION</td>";
        echo "</tr>"; --> 
        <table class="table">
      <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Work</th>
        <th>Salary</th>
        <th>Action</th>
      </tr>
      </thead>
      <tbody>
        <?php         while($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["names"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["salary"] . "</td>";
            echo "<td>
                <a href='edit.php?id=" . $row["id"] . "'> 
                EDIT </a>
                <a href='hapus.php?id=" . $row["id"] . "'> 
                DELETE </a>
              </td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }   
    ?>
  <br>
    <a href="tambahdata.php"> <input type="button" class="btn btn-success" name="Tambah" value="ADD" > </a> <nbr>
    </div>


    </div>
 
  <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
  </html>