<?php
include './dbconfig.php';

session_start();
$name  = $_SESSION["UserID"];
$qty = $_POST['txtQty'];
$size = $_POST['txtSize'];
$color = $_POST['txtColor'];
$remark = $_POST['txtRemark'];
$type = $_POST['txtType'];


$sqlprint = "INSERT INTO print_log (print_id, qty, size, color, type, remark, create_by) "
        . "VALUES('', $qty, $size, $color, $type, $remark, '$name')";

$objQueryNewBill = mysqli_query($dbconfig, $sqlprint);

if ($objQueryNewBill) {
    echo "<script>
alert('Success');
window.location.href='index.php';
</script>";
} else {
    echo 'NO';
}

?>

