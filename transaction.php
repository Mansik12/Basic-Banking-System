<!DOCTYPE html>
<html>
<head>
     <title>View transactions</title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/transaction.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TSF Bank</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="view_customers.php">VIEW CUSTOMERS & TRANSFER MONEY</a>
        </li>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<h1 class="heading"> Transaction Details </h1>
    <?php
    $host= "127.0.0.1";
    $username="root";
    $password="";
    $dbname="basic_banking_system";
    
    $from=$_GET['we'];
    
    $conn= mysqli_connect($host,$username,$password,$dbname);

    if(!$conn){
        die("Connection Failed:" . mysqli_connect_error());
    }

    echo "<form class='transaction_form' action='transfer.php?from=$from'  method='POST'>";
    ?>
    <!-- <label for="tto">Transfer To:</label> -->
    <input type="text" placeholder="Transfer To" name="tto" id="tto"></br>
    <!-- <label for="amnt">Transfer Amount:</label> -->
    <input type="number" name="amnt" placeholder="Transfer Amount" id="amnt"></br>
    <input type="submit" id="sbmt">
   <?php
    echo "</form>";
    ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>