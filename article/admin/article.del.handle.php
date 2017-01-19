<?php 
//文章添加处理程序
require_once('../connect.php');
$id = $_GET["id"];
$delesql = "delete from article where id=$id";

if(mysql_query($delesql)) {
    echo "<script>alert('删除成功');window.location.href = 'article.manage.php';</script>";
}else{
    echo "<script>alert('删除失败');window.location.href = 'article.manage.php';</script>";
}
?>