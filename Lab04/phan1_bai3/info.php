<?php
   session_start();
   if (!isset($_SESSION['username'])) {
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">    
</head>
<body>
    <div class="container bg-light mt-3" style="width: 400px">
        <div class="row">
            <h3 class="fw-bold text-center mt-2">THÔNG TIN</h3>
        </div>

        <div class="row">
            <div class="col-lg-12" style="height: 166px">
                <h6 class="fw-bold text-center mt-3">Tên đăng nhập của bạn: <?php echo $_SESSION['username'] ?></h6>
                <div class="col-lg-12" style="height: 50px"></div>
                <form method="post" action="logout.php">
                    <div class = "text-center">
                        <input type="submit" class="form btn btn-outline-danger mt-3" name="submit" value="Logout">
                    </div>
                </form>
            </div>
        </div>
       

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>