<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>หน้าเพิ่มข้อมูล</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
        <a href="index.html"> หน้าแรก </a>
        <a href="insert_form.php"> เพิ่มข้อมูล </a>
        <a href="delete_form.php"> ลบข้อมูล </a>
        <a href="update_form.php"> แก้ไขข้อมูล </a>
<body>
<form action="action.php" method="post" name="F1">
        <fieldset style="width:50%">
            <legend></legend>
            <table>
                <tr>
                    <td> Cusumer ID : </td>
                    <td>
                        <input type="number" name="csm_Id"  required>
                    </td>
                </tr>
                <tr>
                    <td> Cusumer Name :</td>
                    <td>
                        <input type="text" name="csm_Name" required>
                    </td>
                </tr>
                
                <tr>
                    <td> Cusumer Sname :</td>
                    <td>
                        <input type="text" name="csm_Sname" required>
                    </td>
                </tr>

                <tr>
                    <td> address :</td>
                    <td>
                        <input type="text" name="scm_Address" required>
                    </td>
                </tr>
                <tr>
                    <td> phone : </td>
                    <td> 
                    <input type="number" name="csm_Phone"  required>
                    </td>
                </tr>    
            </table>
<br>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">   
        </fieldset>
    </form>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>