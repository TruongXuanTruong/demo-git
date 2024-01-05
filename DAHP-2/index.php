<?php
require 'lib/template.php';
get_header();
?>
<?php

$page = !empty($_GET['pages'])?$_GET['pages']:'login';

$path = "pages/{$page}.php";

//echo $path;
if(file_exists($path)){
    require $path;
}else{
    require 'inc/404.php';
}
?>


<?php
get_footer();
?>

