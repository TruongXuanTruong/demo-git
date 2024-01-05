<?php
//$servername = "localhost";
//$username = "username";
//$password = "password";
//$dbname = "myDB";
//
//// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
//
//// Check connection
//if ($conn->connect_error) {
//    die("Kết nối thất bại: " . $conn->connect_error);
//}
//
//// prepare and bind
//$stmt = $conn->prepare("INSERT INTO tb_users (firstname, lastname, email) VALUES (?, ?, ?)");
//$stmt->bind_param("sss", $firstname, $lastname, $email);
//
//// set parameters and execute
//$firstname = "Hoàng";
//$lastname = "Tuấn Anh";
//$email = "htaedu21@gmail.com";
//$stmt->execute();
//
//$firstname = "Nguyễn";
//$lastname = "Hoàng Anh";
//$email = "angry2k3@gmail.com";
//$stmt->execute();
//
//$firstname = "Trần";
//$lastname = "Vân Anh";
//$email = "vanhcuti410@gmail.com";
//$stmt->execute();
//
//echo "Bản ghi mới được tạo thành công";
//
//$stmt->close();
//$conn->close();
////?>
<!---->
<!---->
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE tbl_users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Bảng tbl_users được tạo thành công";
} else {
    echo "Tạo bảng không thành công: " . $conn->error;
}

$conn->close();
//?>
<!---->
<?php
//$servername = "localhost";
//$username = "username";
//$password = "password";
//$dbname = "myDBPDO";
//
//try {
//    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
//    $sql = "UPDATE tbl_users SET lastname='Tuấn Anh' WHERE id=2";
//
//
//    $stmt = $conn->prepare($sql);
//
//
//    $stmt->execute();
//
//
//    echo $stmt->rowCount() . "hồ sơ cập nhật thành công";
//} catch(PDOException $e) {
//    echo $sql . "<br>" . $e->getMessage();
//}
//
//$conn = null;
?>

<?php
//$servername = "localhost";
//$username = "username";
//$password = "password";
//$dbname = "myDB";
//
//// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
//// Check connection
//if ($conn->connect_error) {
//    die("Kết nối thất bại: " . $conn->connect_error);
//}
//
//$sql = "SELECT id, firstname, lastname FROM tbl_users ORDER BY lastname";
//$result = $conn->query($sql);
//
//if ($result->num_rows > 0) {
//    // output data of each row
//    while($row = $result->fetch_assoc()) {
//        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//    }
//} else {
//    echo "0 results";
//}
//$conn->close();
?>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO tbl_users (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// set parameters and execute
$firstname = "Trần";
$lastname = "Lan Anh";
$email = "lananh21@gmail.com";
$stmt->execute();

$firstname = "Hoàng";
$lastname = "Mai Nga";
$email = "ngatran1@gmail.com";
$stmt->execute();

$firstname = "Triệu";
$lastname = "Quang Thanh";
$email = "quangtt45@gmail.com";
$stmt->execute();

echo "Bản ghi mới được tạo thành công";

$stmt->close();
$conn->close();
?>

<?php
$servername = "localhosts";
$username = "usernames";
$password = "passwords";
$dbname = "myDBs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM tbl_users ORDER BY lastname";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
