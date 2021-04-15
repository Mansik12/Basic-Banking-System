<!DOCTYPE html>
<html>
<head>
     <title>Basic Banking System</title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
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
<div class="container-fluid">
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1>TSF Bank</h1>
                </div>
              </div>
            <div class="container-fluid">
              <div class="col-sm-12 col-md img text-center">
                <img src="images/bank.jpg" class="img-fluid pt-2">
              </div>
            </div>
           
          <section class="my-5">
            <div class="py-5">
              <h2 class="text-center">Our Services</h2>
            </div>

            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                 <div class="card">
                  <img class="card-img-top pt-2" src="images/customer1.png" alt="Card image">
                     <div class="card-body">
                       <h4 class="card-title">TSF Bank</h4>
                            <a href="view_customers.php" class="btn btn-primary">View Customers & Transfer money</a>
                     </div>
                 </div>
                </div>

                

                
                 </div>
                </div>
              </div>
            </div>
          </section>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>