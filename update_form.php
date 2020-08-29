<!DOCTYPE html>
<html>
<head>
    <title>อัพเดทข้อมูล-แก้ไข</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
        <h1> แก้ไขรายการ </h1>
        <a href="index.html"> หน้าแรก </a>
        <a href="insert_form.php"> เพิ่มข้อมูล </a>
        <a href="delete_form.php"> ลบข้อมูล </a>
        <a href="update_form.php"> แก้ไขข้อมูล </a>
    <hr>
    <form action="" method="post">
        Cusumer ID :
        <input type="number" name="csm_Id" required />
        <input type="submit" value="ค้นหา" /> <br> 
</form>
<hr>
<table>
<tr> 
                    <th>รหัสลูกค้า</th>
                    <th>ชื่อ</th>
                    <th>นามสกุล</th>
                    <th>ที่อยู่</th>
                    <th>เบอร์โทร</th>       
</tr>
<?php
        require 'conn.php';
        if (isset($_POST['csm_Id'])) 
        {
            $id = $_POST['csm_Id'];
            $search = "SELECT * FROM cusumer WHERE csm_Id = '$id' ";
            $result = mysqli_query($con, $search);
            $row = mysqli_fetch_array($result);
        }
?>
    <form method="post" action="">
                    <td>
                        <input type="number" name="csm_Id" value="<?php echo $row['csm_Id'];?>"  readonly>
                    </td>
                    <td>
                        <input type="text" name="csm_Name" value="<?php echo $row['csm_Name'];?>" required />
                    </td>
                    <td>
                        <input type="text" name="csm_Sname" value="<?php echo $row['csm_Sname'];?>" required />
                    </td>                  
                    <td>
                        <input type="text" name="scm_Address" value="<?php echo $row['scm_Address'];?>" required />
                    </td>                   
                    <td>
                        <input type="number" name="csm_Phone" value="<?php echo $row['csm_Phone'];?>" required />
                    </td>
                
                </tr>    
            </table>  <br>
        <input type="submit" name="update" value="ยืนยัน">
    </form>

</table> <br>
<?php
        require 'conn.php';
        if(isset($_POST['update']))
        {
            $idupd = $_POST['csm_Id'];
            $nameupd = $_POST['csm_Name'];
            $snameupd = $_POST['csm_Sname'];
            $addressupd = $_POST['scm_Address'];
            $phoneupd = $_POST['csm_Phone'];
        $upd = " UPDATE cusumer SET csm_Name = '$nameupd', csm_Sname = '$snameupd', 
        scm_Address = '$addressupd', csm_Phone = '$phoneupd'  WHERE csm_Id = '$idupd'";
        $result = mysqli_query($con, $upd);
        if ($result)
            { header('Location: show_form.php');} //แก้สำเร็จจะกลับไปหน้า show
        else{ echo 'แก้ไขข้อมูลไม่สำเร็จ'; }
        }
    ?>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>