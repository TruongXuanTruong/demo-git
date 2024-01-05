<?php
get_header();
?>
<?php
$sql = "SELECT * FROM `tbl_user`";
$result = mysqli_querry($conn,$sql);
$list_users = array();
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $list_users[] = $row;
    }
}
?>
<div id="content">
    <a class="add_new" href="?mod=users&act=add">Thêm mới</a>
    <style>
        .table_data thead tr td{
            font-weight: bold;
            border-bottom: 2px solid #333;
        }
        .table_data tr td{
            border-bottom: 1px solid #333;
            padding: 8px 15px;
        }
    </style>
    <h1>Danh sách thành viên</h1>
    <table class="table_data">
        <thead>
            <tr>
                <td>STT</td>
                <td>ID</td>
                <td>Fullname</td>
                <td>Username</td>
                <td>Email</td>
                <td>Giới tính</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>STT</td>
                <td>ID</td>
                <td>Fullname</td>
                <td>Username</td>
                <td>Email</td>
                <td>Giới tính</td>
            </tr>
            <tr>
                <td>STT</td>
                <td>ID</td>
                <td>Fullname</td>
                <td>Username</td>
                <td>Email</td>
                <td>Giới tính</td>
            </tr>
            <tr>
                <td>STT</td>
                <td>ID</td>
                <td>Fullname</td>
                <td>Username</td>
                <td>Email</td>
                <td>Giới tính</td>
            </tr>
        </tbody>
    </table>
</div>
<?php
get_footer();
?>