<?php
////require 'db/connect.php';
//setcookie('user_login', 'admin', time() + 3600);
//setcookie('is_login',true,time() + 3600);
//if (isset($_POST['btn_add_connect'])){
//    $username = $_POST['username'];
//    $content = $_POST['content'];
//    echo $content;
//
//    if(!empty($username) && !empty($content)){
//        $sql = "INSERT INTO `tbl_comment` (`username`, `content`) VALUES ('$username', '$content')";
//        $result = mysqli_query($conn,$sql);
//        if(!$result)
//            echo mysqli_error($conn);
//        else{
//            echo "Bạn đã comment thành công";
//        }
//    }
//}
//$sql = "SELECT * FROM `tbl_comment`";
//$result = mysqli_query($conn,$sql);
//$list_comment = array();
//
//while ($row = mysqli_fetch_assoc($result)){
//    $list_comment[] = $row;
//}
?>
<html>
<head>
    <title>Lỗi Bảo Mật XSS</title>
</head>
<body>
<h1>Bình Luận</h1>

<!-- Form bình luận -->
<form action="xulybinhluan.php" method="post">
    <label for="ten">Tên:</label>
    <input type="text" id="ten" name="ten" required><br><br>

    <label for="binhluan">Bình Luận:</label><br>
    <textarea id="binhluan" name="binhluan" rows="4" cols="50" required></textarea><br><br>

    <input type="submit" value="Gửi Bình Luận">
</form>

<!-- Hiển thị bình luận -->
<h2>Bình Luận Gần Đây:</h2>
<div id="hienthibinhluan">
    <!-- Bình luận sẽ được hiển thị ở đây sau khi gửi -->
</div>
</body>
</html>
