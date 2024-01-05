<?php
    require 'lib/data.php';
    if(isset($_FILES['file'])){


    show_array($_FILES);

    //Thư mục chứa file upload
    $upload_dir = 'upload/';
    //Đường dẫn của file sau upload
    $upload_file = $upload_dir.$_FILES['file']['name'];
    if(move_uploaded_file($upload_file($_FILES['file']['tmp_name']), $upload_dir)){
        echo "Upload file thành công";
    }else{
        echo "Upload file không thành công";
    }
    }
 ?>