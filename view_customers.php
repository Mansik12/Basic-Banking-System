<!DOCTYPE html>
<html>
<head>
     <title>View customers</title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/customers.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="customers">
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

<h1 class="heading">View all Customers</h1>
<p><a href="index.php">&lt&lt Back to home</a></p>
<p class="cus">Click on the first name to view the customer balance details</p>
<script src="main.js"></script>

<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "basic_banking_system";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn-> connect_error) {
    die("Connection failed:" . $conn->connect_error);
}

$sql = "select * from customers";
$result = $conn->query($sql);

echo "<div class='viewcustomer'>";
echo "<table border='1' class='tableformat'>
     <tr>
     <th>Customer Id</th>
     <th>First name</th>
     <th>Last name</th>
     <th>Phone No</th>
     <th>Email Id</th>
     </tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Customer_Id"] ."</td><td><a href='details.php?cid=$row[Customer_Id]'>" . $row["First_name"] ."</a></td><td>". $row["Last_name"] ."</td><td>". $row["Phone"] ."</td><td>". $row["Email_Id"] ."</td></tr>";
    }
} else {
    echo "0 results";

}
echo "</table";
echo "</div>";
$conn->close();

?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>