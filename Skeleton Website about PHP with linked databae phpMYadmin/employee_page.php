<?php

$host = "localhost";
$username = "root";
$password = ".znbaME_IYZHaBVw";
$database = "employee_system";

$connection = new mysqli($host,$username,$password,$database);

if($connection->connect_error){
    echo $connection->connect_error;
}

$sql = "SELECT * FROM employees";
$emp = $connection->query($sql) or die ($connection->error);
$row = $emp->fetch_assoc();

/*do{
    echo $row['Name'];
}while($row = $emp->fetch_assoc());*/

?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Trust | Information Reliablity</title>
        <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
        
        <style>
            body{
                font-family: Arial;
                color: white;
                height: 100vh;
                background-size: cover;
                background-position: center;
                background-repeat: repeat;
            }
            table{
                border: 1px solid black;
                width: 75%;
            }
            th, td{
                text-align: center;
                padding: 5px;
                border-bottom: 2px solid #ddd;
            }
            tr:nth-child(even){
                background-color: #1b5e7a;
            }
            h1{
                text-align: center;
                font-family: 'DM Serif Display', serif;
                font-size: 40px;
            }

        </style>

        
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">

    </head>
    <body  background="img/blue3.jpg"  style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(img/blue3.jpg);
            height: 100vh;
            background-size: cover;
            background-position: center;
            background-repeat: repeat;">

<nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
  <a class="navbar-brand" href="homepage.php">Trust</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="homepage.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

      
     
    </ul>

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active"> </li>
  </ul>
  </div>


  </div>
</nav>

<div class="container mt-4">
<h1 id="text">Employee Management System</h1>
        <center>
        <table>
            <thead>
            <tr>
                <th><center>Employee ID</center></th>
                <th><center>Name</center></th>
                <th><center>Address</center></th>
                <th><center>Age</center></th>
            </tr>
            </thead>
            <tbody>
                <?php do{ ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['Name'];?></td>
                <td><?php echo $row['Address'];?></td>
                <td><?php echo $row['Age'];?></td>
            </tr>
            <?php }while($row = $emp->fetch_assoc()) ?>
            </tbody>
        </table>
        </center>   
<hr>

</div>

        
    </body>
</html>