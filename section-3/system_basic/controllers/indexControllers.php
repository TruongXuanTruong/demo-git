<?php
function construct(){
    // echo " Dùng chung,load đầu tiên";
    load_model('index');
}
function indexAction(){
    $list_users = get_list_users();
    $data['list_users'] = $list_users;
    load_view('index',$data);
}
function addAction(){
    echo "Thêm dữ liệu";
}
function editAction(){
    $id = (int)$_GET['id'];
    $item = get_user_by_id($id);
    show_array($item); 
}