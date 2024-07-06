<<<<<<< HEAD
<?php
include '../../koneksi.php';
$uid = $_GET["uid"];
$delete = mysqli_query($koneksi, "delete from user where uid='$uid'");
if ($delete){
    header("location:../../admin.php");
}
=======
<?php
include '../../koneksi.php';
$uid = $_GET["uid"];
$delete = mysqli_query($koneksi, "delete from user where uid='$uid'");
if ($delete){
    header("location:../../admin.php");
}
>>>>>>> aa9b696 (ngetest lagi)
?>