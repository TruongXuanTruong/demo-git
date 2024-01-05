<?php
get_header();
?>
<?php
//Kết nối database
$conn = mysql_connect('localhost','root','','Xuân Trường');
if(!$conn)
    echo "Kết nối không thành công.".mysqli_connect_error();
else{
    echo "Kết nối thành công";
}
?>
<div id="content">
    <h1>Them mới</h1>
</div>
<?php
get_footer();
?>
