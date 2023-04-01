<?php
    session_start();
    $username = "1";
    $password = "1";
    if (isset($_SESSION['username'])) { 
        header('location: info.php');
    }
    else {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            if ($_POST['username'] == $username && $_POST['password'] == $password){
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                header('location: info.php');
            }
            else {
                echo "<script>alert('Tài khoản hoặc mật khẩu không chính xác')</script>";
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
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">    

</head>
<body>
    <?php 
        $username = $password = '';
    ?>
    <div class="container bg-light mt-3" style="width: 400px">
        <div class="row">
            <h3 class="fw-bold text-center mt-2">ĐĂNG NHẬP</h3>
        </div>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
            
            <input type="text" class="form-control mt-3" name="username" placeholder="Username" value='<?php echo $username?>'>
            <input type="password" class="form-control mt-3" name="password" placeholder="Password" value='<?php echo $password?>'>
            <div class = "text-center">
                <input type="submit" class="form btn btn-outline-primary mt-3" name="submit" value="Login">
            </div>
        </form>
        <div class="row">
            <div class="col-lg-12" style="height: 20px"></div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>