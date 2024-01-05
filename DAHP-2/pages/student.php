
<?php
$url = $_SERVER['DOCUMENT_ROOT']."DAHP-2/pages/student.php";
define('ROOT_PATH', $url);
use connectMysql\DatabaseConnectionMySql;
require_once 'C:\Users\XuanTruong\Desktop\php\DAHP-2\data\DatabaseConnectionMySql.php';
$connection = new DatabaseConnectionMySql();
$db = $connection->connectData();


$sql = "select * from tb_sinhvien ";

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
    <link rel="stylesheet" href="../css/tb_sinhvien.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Quản Lý Sinh Viên</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 200px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Bảng Sinh Viên</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="?page=jobstudent">Thông Tin Công Việc</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="?page=job">Có Việc</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="?page=specialized">Chuyên Ngành</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="?page=salary">Mức Lương</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
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
        <th scope="col">Full Name</th>
        <th scope="col">Ngày Sinh</th>
        <th scope="col">Mã Sinh Viên</th>
        <th scope="col">Lớp</th>
        <th scope="col">Khóa</th>
        <th scope="col">Khoa</th>
        <th scope="col">Địa Chỉ</th>
        <th scope="col">Số Điện Thoại</th>
        <th scope="col">Email</th>

    </tr>
    </thead>
    <tbody >
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";

            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['fullname']}</td>";
            echo "<td>{$row['ngaysinh']}</td>";
            echo "<td>{$row['ma_sv']}</td>";
            echo "<td>{$row['lop']}</td>";
            echo "<td>{$row['khoa']}</td>";
            echo "<td>{$row['khoa_nganh']}</td>";
            echo "<td>{$row['dia_chi']}</td>";
            echo "<td>{$row['sdt']}</td>";
            echo "<td>{$row['email']}</td>";

            echo "<td>
                         <button class='btn btn-success me-1'><i class='fa-solid fa-user-pen'>Cập nhật</i></button>
                    </td>";

            echo "</tr>";
        }
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
</body>
</html>
