<?php
include_once "contr/menucontr.php";
$contr = new menucontr();
$data = $contr->model->getall();
?>
<h2>Menu</h2>
<a href="views/tambah.php">Tambah Menu</a>
<br><br>
<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Minuman</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>
<?php
$no = 1;
while($row = $data->fetch_assoc()) {
?>
<tr>
    <td><?=$no++;?></td>
    <td><?=$row['minuman'];?></td>
    <td><?=$row['harga'];?></td>
    <td>
        <a href="views/edit.php?id=<?=$row['id'];?>">Edit</a>
        <a href="index.php?hapus=<?=$row['id'];?>">Hapus</a>
    </td>
</tr>
<?php } ?>
</table>