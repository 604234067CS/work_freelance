<!DOCTYPE html>
<html>

<head>
    <title>หน้าลบข้อมูล</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
        <h1> หน้าลบข้อมูล</h1>
        <a href="index.html"> หน้าแรก </a>
        <a href="insert_form.php"> เพิ่มข้อมูล </a>
        <a href="delete_form.php"> ลบข้อมูล </a>
        <a href="update_form.php"> แก้ไขข้อมูล </a>
    <hr>
    <form action="" method="post" >
        Cusumer ID :
        <input type="number" name="csm_Id" required />
        <input type="submit" value="ค้นหา" /> <br>
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
        
                        echo "<tr>";
                        echo "<td>" . $row["csm_Id"] . "</td>";
                        echo "<td>" . $row["csm_Name"] . "</td>";
                        echo "<td>" . $row["csm_Sname"] . "</td>";
                        echo "<td>" . $row["scm_Address"] . "</td>";
                        echo "<td>" . $row["csm_Phone"] . "</td>";
                        echo "</tr>";
        }
        ?>
</table>

    </form>
    <form method="POST">
        <input type="hidden" name="keydel" value="<?php echo $row['csm_Id'];?>" readonly> <br/>
        <input type="submit" name="del" value="ลบข้อมูล" /> 
    </form>

    <?php
        require 'conn.php';
        $id = filter_input(INPUT_POST, 'keydel');
        $del = " DELETE FROM cusumer WHERE csm_Id = '$id'";
        $result = mysqli_query($con, $del);
    ?>


</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>