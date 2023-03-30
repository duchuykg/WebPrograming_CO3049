<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "shop";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lab2_phan1_bai2</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link type="text/css" rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</head>
<body>

  
  <!-- Body -->
  <div class="container">
    <div class="row">
    <!-- Top Products -->
    <div class="col-md-12 col-lg-12 mt-2 top_product">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="black" href="list.php">Home</a></li>
            <li class="breadcrumb-item"><a class="black" href="list.php">Main Category</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sub Category</li>
          </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 col-lg-6 col-xl-6 mt-1">
                <div class="row mt-2"> 
                  <img src='<?php
                        $sql = "SELECT * FROM `products` WHERE id = " . $_GET['id'] . ";";
                        $result = $conn->query($sql);
                        echo $result->fetch_assoc()["image"];
                    ?>' class="img-thumbnail" alt="">
                </div>
                <div class="row">
                  <div class="col">
                    <img src='<?php
                        $sql = "SELECT * FROM `products` WHERE id = " . $_GET['id'] . ";";
                        $result = $conn->query($sql);
                        echo $result->fetch_assoc()["image"];
                    ?>' class="img-thumbnail mt-2" alt="">
                  </div>
                  <div class="col">
                    <img src='<?php
                        $sql = "SELECT * FROM `products` WHERE id = " . $_GET['id'] . ";";
                        $result = $conn->query($sql);
                        echo $result->fetch_assoc()["image"];
                    ?>' class="img-thumbnail mt-2" alt="">
                  </div>
                  <div class="col">
                    <img src='<?php
                        $sql = "SELECT * FROM `products` WHERE id = " . $_GET['id'] . ";";
                        $result = $conn->query($sql);
                        echo $result->fetch_assoc()["image"];
                    ?>' class="img-thumbnail mt-2" alt="">
                  </div>
                  <div class="col">
                    <img src='<?php
                        $sql = "SELECT * FROM `products` WHERE id = " . $_GET['id'] . ";";
                        $result = $conn->query($sql);
                        echo $result->fetch_assoc()["image"];
                    ?>' class="img-thumbnail mt-2" alt="">
                  </div>
                </div>
            </div>
            
            <div class="col-md-12 col-lg-6 col-xl-6 mt-2">
              <h2><?php
                        $sql = "SELECT * FROM `products` WHERE id = " . $_GET['id'] . ";";
                        $result = $conn->query($sql);
                        echo $result->fetch_assoc()["name"];
                    ?></h2>
                <h4>Summary:</h4>
                <p><?php
                        $sql = "SELECT * FROM `products` WHERE id = " . $_GET['id'] . ";";
                        $result = $conn->query($sql);
                        echo $result->fetch_assoc()["description"];
                    ?></p>
                <div class="text-center p-3">
                    <button class="btn btn-outline-secondary"> Buy Now </button>
                </div>
            </div>
        </div>

        <div class="row mt-3">
          <h4>Description:</h4>
          <p><?php
                        $sql = "SELECT * FROM `products` WHERE id = " . $_GET['id'] . ";";
                        $result = $conn->query($sql);
                        echo $result->fetch_assoc()["description"];
                    ?></p>
        </div>
      </div> 
      <!-- Sale -->


  </div>
   
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>