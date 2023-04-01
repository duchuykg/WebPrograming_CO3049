<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "shop";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $id = $img = $name = $price = $des = "";
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);
    
    if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["submit"] == "Create") {
            $id = isset($_POST['id']) ? $_POST['id']:null;
            $name = $_POST["name"];
            $price = $_POST["price"];
            $des = $_POST["des"];
            $img = $_POST["img"];

            if (!$id && $id != 0) {
                echo '<script>alert("Nhập ID")</script>';
            }
            else if (!preg_match("/^[0-9]{1,100}$/", $id)) {
                echo '<script>alert("ID kiểu số nguyên")</script>';
            }
            // else if (!preg_match("/^[a-zA-Z0-9 ]{5,40}$/", $name)) 
            //      echo '<script>alert("Name chuỗi từ 5-40 ký tự, không bao gồm ký tự đặc biệt")</script>';
            else if (strlen($name) < 5 || strlen($name) > 40) {
                echo '<script>alert("Name chuỗi từ 5-40 ký tự")</script>';
            }
            else if (strlen($des) > 5000) {
                echo '<script>alert("Description tối đa 5000 ký tự")</script>';
            }
            else if (!is_numeric($price)) {
                echo '<script>alert("Nhập Price kiểu số thực")</script>';
            }
            else if (strlen($img) > 255) {
                echo '<script>alert("Image tối đa 255 ký tự")</script>';
            }
            else {
                $test = 0;
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        if ($id == $row["id"]){
                            echo '<script>alert("ID đã tồn tại")</script>';
                            $test = 1;
                        }
                    }
                }
                if ($test == 0){
                    $newsql = "INSERT INTO products (id, name, description, price, image) VALUES ('$id', '$name', '$des', '$price', '$img')";

                    if ($conn->query($newsql) === TRUE) echo '<script>alert("Complete !")</script>';
                }
                
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab3_phan2_bai3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container bg-light" style="width: 600px">
        <div class="row">
        <h2 class="fw-bold text-center mt-2">CREATE NEW PRODUCT</h2>
        </div>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
            
            <input type="text" class="form-control mt-3" name="id" placeholder="ID" value='<?php echo $id?>'>
            <input type="text" class="form-control mt-3" name="name" placeholder="Name" value='<?php echo $name?>'>
            <input type="text" class="form-control mt-3" name="des" placeholder="Description" value='<?php echo $des?>'>
            <input type="text" class="form-control mt-3" name="price" placeholder="Price" value='<?php echo $price?>'>
            <input type="text" class="form-control mt-3" name="img" placeholder="Image" value='<?php echo $img?>'>

            <div class="row">
                <div class="col">
                    <input type="submit" class="form-control btn btn-outline-danger mt-3" name="submit" value="Create">
                </div>
                <div class="col">
                    <input type="submit" class="form-control btn btn-outline-primary mt-3" name="submit" value="Clear">
                </div>
            </div>
            <a class="form-control btn btn-dark mt-3" href="a.php">Read products</a><br>

        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
