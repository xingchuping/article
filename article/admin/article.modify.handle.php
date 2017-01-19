<?php 
//文章修改处理程序
//print_r($_POST);

require_once ('../connect.php');

//把传递过来的信息入库，在入库之前对所有的信息校验。
if(!(isset($_POST[title]) && (!empty($_POST['title'])))) {
    echo "<script>alert('标题不能为空');window.location.href = 'article.add.php';</script>";
}
$id = $_POST['id'];
$title = $_POST['title'];
$author = $_POST['author'];
$description = $_POST['description'];
$content = $_POST['content'];

$dateline = time();
$insertsql = "update article set title='$title',author='$author',description='$description',content='$content' where id='$id'";
//echo $insertsql;
if(mysql_query($insertsql)) {
    echo "<script>alert('修改文章成功');window.location.href = 'article.manage.php';</script>";
}else{
    echo "<script>alert('修改文章失败');window.location.href = 'article.manage.php';</script>";
} 
?>