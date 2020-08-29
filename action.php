<!DOCTYPE html>
<html>
<head>
<title>หน้าเพิ่มรายการอาหาร</title>
</head>
<body>
<body>
<?php
require 'conn.php';//สำหรับเพิ่มข้อมูล
    $id = $_POST['csm_Id'];
    $name = $_POST['csm_Name'];
    $sname = $_POST['csm_Sname'];
    $address = $_POST['scm_Address'];
    $phone = $_POST['csm_Phone'];

    $adddat = "INSERT INTO cusumer VALUE ('$id','$name','$sname','$address','$phone') ";
    $result = mysqli_query($con, $adddat);
if ($result)
{
    echo "เพิ่มข้อมูลสำเร็จ" . "<br>";
    echo '<a href="show_form.php">แสดงข้อมูล</a>';//ลิ้งกลับหน้าหลัก
}
else
{
    echo 'เพิ่มข้อมูลไม่สำเร็จ';
}
?>
</body>
</html>
