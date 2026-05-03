<?php
include_once "../contr/menucontr.php";
$contr = new menucontr();
if(isset($_POST[simpan])) {
    $contr->model->tambah($_POST['minuman'], $_POST['harga']);
    header("location:../index.php");
}
?>

<h2>Tambah Menu</h2>
<form method="POST">
    Minuman:
    <input type="text" name="minuman">
    <br><br>
    Harga:
    <input type="text" name="harga">
    <br><br>
    <button type="submit" name="simpan">Simpan</button>
</form>