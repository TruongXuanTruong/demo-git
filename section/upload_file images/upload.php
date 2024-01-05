<?php
    require 'lib/data.php';
    if(isset($_FILES['file'])){

    
    show_array($_FILES);
    $error = array();
    #Xử lý upload đúng file ảnh
        $type_allow = array('png','jpg','gif','jepg');
        $type = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        echo $type;
        if(in_array(strtolower($type),$type_allow)){
            $error['type'] = "Chỉ được upload file có đuôi png,jpg,gif,jpeg";
        }

        if(empty($error)){
            echo "File đạt chuẩn";
        }else{
            show_array($error);
        }


    //Thư mục chứa file upload
//    $upload_dir = 'upload/';
//    //Đường dẫn của file sau upload
//    $upload_file = $upload_dir.$_FILES['file']['name'];
//    if(move_uploaded_file($upload_file($_FILES['file']['tmp_name']), $upload_dir)){
//        echo "Upload file thành công";
//    }else{
//        echo "Upload file không thành công";
//    }
    }
 ?>