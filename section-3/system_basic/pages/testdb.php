<?php
$url = $_SERVER['DOCUMENT_ROOT']."/section-3/system_basic";
define('ROOT_PATH', $url);
use connectMysql\DatabaseConnectionMySql;
require_once  ROOT_PATH.'/data/DatabaseConnectionMySql.php';
#require_once 'C:\Users\XuanTruong\Desktop\php\section-3\system_basic\data\DatabaseConnectionMySql.php';

$connection = new DatabaseConnectionMySql();
$db = $connection->connectData();

$sWhere = " 1=1 ";

if(1==2) {
    $sWhere = " ghi_chu = 'CNTT' ";
} else if (1==1) {
    $sWhere = " ghi_chu = 'DTVT' ";
}

$sql = "select * from tb_sinhvien where $sWhere ";

$result = $db->query($sql);

$connection->closeConnect($db);


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>

<div class="select-container w-25">
    <select class="form-select" aria-label="Default select example">
        <option selected>Vui lòng chọn kiểu tìm kiếm</option>
        <option value="1">Khoa</option>
        <option value="2">Khóa</option>
        <option value="3">Lớp</option>
    </select>
</div>


<table class="table table-hover text-center table-bordered border-primary mt-3 ">
    <thead>
    <tr>
        <th scope="col">STT</th>
        <th scope="col">User Name</th>
        <th scope="col">Full Name</th>
        <th scope="col">Email</th>
        <th scope="col">Ghi chu</th>
        <th scope="col">Thao tac</th>
    </tr>
    </thead>
    <tbody >

        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";

                echo "<td>{$row['user_id']}</td>";
                echo "<td>{$row['username']}</td>";
                echo "<td>{$row['fullname']}</td>";
                echo "<td>{$row['email']}</td>";
                echo "<td>{$row['ghi_chu']}</td>";

                echo "<td>
                         <button class='btn btn-success me-1'><i class='fa-solid fa-user-pen'> Sửa</i></button>
                         <button class='btn btn-warning'><i class='fa-solid fa-user-xmark'> Xóa</i></button>
                    </td>";

                echo "</tr>";
            }
        }
        ?>

    </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>
