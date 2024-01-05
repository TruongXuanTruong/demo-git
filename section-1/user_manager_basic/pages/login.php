<?php
if(isset($_POST['btn-login'])){
    $error = array();
    #Kiểm tra username
    if( empty($_POST['username'])){
        $error['username'] = "Không được để trống username";
    }else{
        $pattern = '/^[A-Za-z0-9_\.](6,32)$/';
        if(!preg_match($pattern,$_POST['username'])){
            $error['username'] = "Tên đăng nhập không đúng định dạng";
        }else{
            $username = $_POST['username'];
        }
    }
    #Kiểm tra mật khẩu
    if( empty($_POST['password'])){
        $error['password'] = "Không được để trống password";
    }else{
        $pattern = '/^[A-Za-z0-9_\.!@#$%^&()](6,32)$/';
        if(!preg_match($pattern,$_POST['password'])){
            $error['password'] = "Mật Khẩu không đúng định dạng";
        }else{
            $password = $_POST['password'];
        }
    }
    #Kết Luận
    if(empty($error)){
        //Xử Lý Login
        echo "Xử lý login";
    }
}
?>
<html>
<head>
    <title>Trang Đăng Nhập</title>
    <link rel="stylesheet" href="../public/login.css">
</head>
<body>
    <div id="wp-form-login">
        <h1 class="page-title">Đăng Nhập</h1>
        <form id="form-login" action="" method="post">
            <input type="text" name="username" id="username" value="" placeholder="Username">
            <?php
                if(!empty($error['username'])){
                    ?>
                <p class="error"><?php echo $error['username'] ?></p>
                    <?php
                }
            ?>
            <input type="password" name="password" id="password" value="" placeholder="Password">
            <?php
            if(!empty($error['password'])){
                ?>
                <p class="error"><?php echo $error['password'] ?></p>
                <?php
            }
            ?>
            <input type="submit" id="btn-login" name="btn-login" value="Đăng Nhập">

        </form>
        <a href="" id="lost-pass">Quên Mật Khẩu ? | <a href="" id="lost-pass">Đăng Ký</a></a>
    </div>

</body>
</html>
