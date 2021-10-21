<?php
require_once "config.php";
$id=$_GET['id'];
$con=connection();
$sql_delete="DELETE from patient where patientid='$id'";
$is_update = mysqli_query($con, $sql_delete);
echo "Xóa thành công";
?>
<a href="hienthi.php">Quay lại</a>