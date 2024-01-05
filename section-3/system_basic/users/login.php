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
