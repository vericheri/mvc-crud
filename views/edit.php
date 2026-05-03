<?php
include_once "../contr/menucontr.php";
$contr = new menucontr();
$id = $_GET['id'];
$data = $contr->model->getbyid($id);
$row = $data->fetch_assoc();
if(isset($_POST[update])) {
    $contr->model->update($id, $_POST['minuman'], $_POST['harga']);
    header("location:../index.php");
}
?>
<h2>Edit Menu</h2>
<form method="POST">
     Minuman:
    <input type="text" name="minuman" value="<?=$row['minuman'];?>">
    <br><br>
    Harga:
    <input type="text" name="harga" value="<?=$row['harga'];?>">
    <br><br>
    <button type="submit" name="update">Update</button>
</form>