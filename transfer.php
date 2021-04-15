<!DOCTYPE html>
<html>
<head>
     <title>Transaction</title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/transfer.css">
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="transfer.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$link = mysqli_connect("127.0.0.1", "root", "", "basic_banking_system");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$from = $_GET['from'];
$to = mysqli_real_escape_string($link, $_REQUEST['tto']);
$amount = mysqli_real_escape_string($link, $_REQUEST['amnt']);
 
$sql = "INSERT INTO transactions (TransferFrom_Id, TransferedTo, Amount) VALUES ('$from', '$to', '$amount')";
$update1 = "UPDATE customers SET current_balance = current_balance+$amount WHERE first_name='$to'";
$update2 = "UPDATE customers SET current_balance = current_balance-$amount WHERE Customer_Id=$from";


if(mysqli_query($link, $sql) && mysqli_query($link, $update1) && mysqli_query($link, $update2)){
    echo "<p>Transaction successfull.</p>";
    echo "<button><a href='index.php'>Back to home</a></button>";
} else{
    echo "ERROR: Could not able to execute . " . mysqli_error($link);
}
 
mysqli_close($link);
?>   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>