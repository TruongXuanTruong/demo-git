<?php
#Mảng dữ liệu user
/*Thông tin user:
* Họ và tên => fullname
 * Tên đăng nhập => username
 * Mật khẩu => password
 * Email => email
 * Id => id
 */
$list_users = array(
    1 => array(
        'id' => 1,
        'fullName' => 'Trương Xuân Trường',
        'username' => 'Truongtom',
        'password' => md5('xuantruong@.edu'),
        'email' => 'xuantruong.28@gmail.com'
    ),
    2 => array(
        'id' => 1,
        'fullName' => 'Hoàng Văn A',
        'username' => 'vanA',
        'password' => md5('hoangvana@.edu'),
        'email' => 'hoangvana.28@gmail.com'
    ),
    3 => array(
        'id' => 1,
        'fullName' => 'Võ Hoàng Anh',
        'username' => 'hoanganh',
        'password' => md5('hoanganh@.edu'),
        'email' => 'hoanganh.28@gmail.com'
    ),
);