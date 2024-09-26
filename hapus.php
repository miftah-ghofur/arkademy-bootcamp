<!DOCTYPE html>
<html>
<head>
	<title>Delete Data</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <style type="text/css">
      body {
       padding-top: 25px; 

      }
      
      .jumbotron {
        color: #2c3e50;
        background: #ecf0f1;
        position: center;
        text-align: center;
      } 

      </style>
</head>
<body>


	<?php
		$server = "localhost";
		$user = "root";
		$password = "";
		$database = "arkademy";

		if (isset($_GET["id"])) {
			$names = $_GET["id"];

			$koneksi = mysqli_connect($server,$user,$password,$database);
			if (!$koneksi) {
			    die("Connection failed: " . mysqli_connect_error());
			}

			$sql = "DELETE FROM name
					WHERE id = $names";

			if (mysqli_query($koneksi, $sql)) { ?>
			   <div class="jumbotron">
			    <h1><i class="glyphicon glyphicon-ok"></i></h1>
      			<br><h3>Succesfully delete 1 row! </h3>
			    <br><a href='index.php'><button class="btn btn-success">OK</button></a>
			   </div> 
			<?php
			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
			}

		} else {
			echo "Error";
			echo "<br><a href='index.php'>kembali</a>";
			
		}

	?>
</body>
</html>