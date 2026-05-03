<?php
include_once "contr/menucontr.php";
$contr = new menucontr();
if(isset($_GET['hapus'])) {
    $contr->model->hapus($_GET['hapus']);
    header("location=../index.php");
}
include_once "views/list.php";
?>