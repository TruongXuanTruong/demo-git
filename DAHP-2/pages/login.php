<?php
if(isset($_POST['btn-login'])){
    $error = array();
    #Kiểm tra username
    if(empty($_POST['username'])){
        $error['username'] = "Không được để trống tên đăng nhập";
    }else{
        $pattern = '/^[A-Za-z0-9_\.]{6,32}$/';
        if (!preg_match($pattern,$_POST['username'])){
            $error['username'] = "Tên đăng nhập không đúng";
        }else{
            $username = $_POST['username'];
        }
    }
    #Kiểm tra password
    if(empty($_POST['password'])){
        $error['password'] = "Không được để trống mật khẩu";
    }else{
        $pattern = '/^[A-Za-z0-9_\.!@#$%^&*()]{6,32}$/';
        if (!preg_match($pattern,$_POST['password'])){
            $error['password'] = "Mật khẩu không đúng";
        }else{
            $password = $_POST['password'];
        }
    }
    #Kết luận
    if(empty($error)){
        echo "Xử lý login";
    }
    $username = $_POST['username'];
    $password = $_POST['password'];


    if ($username === 'Xuantruong28@gmail.com' && $password === '1111') {
        // Đăng nhập thành công
        header('Location: pages/student.php');
        exit();
    } else {
        // Đăng nhập không thành công, có thể hiển thị thông báo lỗi
        echo 'Đăng nhập thất bại.Hãy Thử Lại';
    }
}
?>
<!doctype html >
<html lang = "en" >
<head >
    <meta charset = "utf-8" >
    <meta name = "viewport"
          content = "width=device-width, user-scalable=no, initial-scale=1" >
    <meta http-equiv = "X-UA-Compatible" content = "ie=edge" >
    <title >Quản Lý Sinh Viên</title >
    <link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          integrity = "sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin = "anonymous" >
    <link rel="stylesheet" href="./css/login.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head >
<body >
<div id="wrapper">
    <form action="" id="form-login" method="post">
        <h1 class="form-heading">Đăng Nhập</h1>
        <div class="form-group">
            <i class="far fa-user"></i>
            <input type="text" name="username" id="username" class="form-input" placeholder="Tên đăng nhập">
            <?php
            if(!empty($error['username'])){
                ?>
                <p class="error"><?php echo $error['username'] ?></p>
                <?php
            }
            ?>
        </div>
        <div class="form-group">
            <i class="fas fa-key"></i>
            <input type="password" name="password" id="password" class="form-input" placeholder="Mật khẩu">
            <?php
            if(!empty($error['password'])){
                ?>
                <p class="error"><?php echo $error['password'] ?></p>
                <?php
            }
            ?>
            <div id="eye">
                <i class="far fa-eye"></i>
            </div>
        </div>
        <input type="submit" id="btn-login" name="btn-login" value="Đăng nhập" class="form-submit">
        <a href="" id="lost-pass">Quên mật khẩu ?</a>
    </form>

</div>




<script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity = "sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin = "anonymous" > </script >
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="./js/pass.js"></script>
</body >
</html >

