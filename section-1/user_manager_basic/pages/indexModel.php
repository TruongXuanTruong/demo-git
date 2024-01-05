<?php
function check_email($email){
    $check = db_num_rows("SELECT * FROM `tbl_users` WHERE `email` = '{$email}'");
    if ($check > 0)
        return true;
    return false;
}
function check_login($username, $password){
    $check_user = db_num_row("SELECT * FROM `tbl_users` WHERE `username` = '{$username}' AND `password` ='{$password}'");
    echo $check_user;
    if ($check_user > 0 )
        return true;
    return false;
}
function info_user($label = 'id'){
    $user_login = $_SESSION['user_login'];
    $user = db2_fetch_array("SELECT * FROM `tbl_users` WHERE `username` = '{$user_login}'");
    return $user[$label];
}
function add_user($data){
    return db_insert('tbl_users',$data);
}
