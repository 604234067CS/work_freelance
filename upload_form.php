<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Imge Form</title>
</head>
<body>
<?php
    require 'conn.php';
    if(isset($_POST['add-imge']))
    {
        $csm_Id=$_POST['csm_Id'];
        $csm_name=$_POST['csm_Name'];
        $csm_Sname=$_POST['csm_Sname'];
        $scm_Address=$_POST['scm_Address'];
        $csm_Phone=$_POST['csm_Phone'];

        

        $images=$_FILES['csm_image']['name'];
        $tmp_dir=$_FILES['csm_image']['tmp_name'];
        $imageSize=$_FILES['csm_image']['size'];

        $upload_dir='uploads/';
        $imgExt=strtolower(pathinfo($images,PATHINFO_EXTENSION));
        $valid_extensions=array('jpeg','jpg','png','gif','pdf');
        $picProduct=rand(1000, 1000000).".".$imgExt;
        move_uploaded_file($tmp_dir, $upload_dir.$picProduct);
        $stmt=$db_con->prepare('INSERT INTO cusumer (csm_Id, csm_Name, csm_Sname, scm_Address, csm_Phone, csm_imge)
         VALUES(:csm_Id, :csm_Name, : csm_Sname, :scm_Address, :csm_Phone, :csm_imge)');
        $stmt->bindParam(':csm_Id', $csm_Id);
        $stmt->bindParam(':csm_Name', $csm_name);
        $stmt->bindParam(':csm_Sname',  $csm_Sname);
        $stmt->bindParam(':scm_Address',$scm_Address);
        $stmt->bindParam(':csm_Phone', $csm_Phone);
        $stmt->bindParam(':csm_imge', $picProduct);
        if($stmt->execute())
        {
?>
            <script>
                alert("success");
                window.location.href=('upload_form.php');
            </script>
<?php 
            }else
            {
?>
            <script>
                alert("error");
                window.location.href=('upload_form.php');
            </script>
<?php
            }

        }
    
?>
<div class="container">
    <div class="add-form">
    <h1 class="text-center">Insert Cusumer</h1>
    <form method="post" enctype="multipart/form-data">
        <label>ชื่อ</label>
        <input type="text" name="csm_Name" class="form-control" required="">
        <label>นามสกุล</label>
        <input type="text" name="csm_Sname" class="form-control" required="">
        <label>ที่อยู่</label>
        <input type="text" name="scm_Address" class="form-control" required="">
        <label>รูปภาพ</label>
        <input type="file" name="csm_imge" class="form-control" required=""  accept="*/image">
        <button type="submit" name = "btn-add" class="btn btn-success">Submit</button>
    </form>
        
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>