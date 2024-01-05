<?php
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

?>

<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE tbl_users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Tạo bảng thành công";
} else {
    echo "Tạo bảng không thành công: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
