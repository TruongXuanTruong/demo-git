<?php
function construct(){
    load_model('index');
    load('lib','validation');
}
function reAction(){
    global $error,$username,$password,$email,$fullname;
    if(isset($_POST['btn_reg'])){
        $error = array();
        if(empty($_POST['fullname'])){
            $error['fullname'] = "Không được để trống họ tên";
        }else{
            $fullname = $_POST['fullname'];
        }
        if(empty($_POST['username'])){
            $error['username'] = "Không được để trống tên đăng nhập";
        }else{
            if(!is_username($_POST['username'])){
                $error['username'] = "Tên đăng nhập không đúng định dạng ";
            }else{
                $username = $_POST['username'];
            }
        }
        if(empty($_POST['password'])){
            $error['password'] = "Mật khẩu không được bỏ trống";
        }else{
            if(!is_password($_POST['password'])){
                $error['password'] = "Mật khẩu không đúng định dạng";
            }else{
                $password = md5($_POST['password']);
            }
        }
        if(empty($_POST['email'])){
            $error['email'] = "Không được bỏ trống email";
        }else{
            if(!is_email($_POST['password'])){
                $error['email'] = "Email không đúng định dạng";
            }else{
                $password = $_POST['email'];
            }
        }

        if(empty($error)){
            if(!user_exists($username,$email)){
                $data = array(
                    'fullname' => $fullname,
                    'username' => $username,
                    'password' => $password,
                    'email' => $email
                );
                add_user($data);
                redirect("?mod=user&action=login");
            }else{
                $error['account'] = "Email hoặc username đã tồn tại trên hệ thống";
            }
        }
    }
    load_view('reg');
}