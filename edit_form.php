<?php
$connection= mysqli_connect("localhost","root","","db_form");


if(!isset($_GET['id']) || empty($_GET['id'])){
    header("location:3_table2.php");
}

$editid=$_GET['id'];
//select Data From Table
$editq=mysqli_query($connection,"select * from tbl_student where st_id='{$editid}'") or die(mysqli_error($connection));
$editdata=mysqli_fetch_array($editq);
//print_r($editdata);
if($_POST){
    $txt1=$_POST['txt1'];
    $txt2=$_POST['txt2'];
    $txt3=$_POST['txt3'];
    $txt4=$_POST['txt4'];
    $txt5=$_POST['txt5'];
    $txt6=$_POST['txt6'];
    $txt7=$_POST['txt7'];
    $txt8=$_POST['txt8'];
    $txt9=$_POST['txt9'];
    $uq=mysqli_query($connection,"update tbl_student set st_name='{$txt1}',st_gender='{$txt2}',st_dob='{$txt3}',st_email='{$txt4}',st_password='{$txt5}',st_mobile='{$txt6}',st_address='{$txt7}',st_area='{$txt8}',st_bloodgroup='{$txt9}' where st_id='{$editid}'")or die(mysqli_error($connection));
    if($uq){
        echo"<script>alert('Record Updated');window.location='3_table2.php';</script>";
    }
}
?>
<html>
    <body>
        <form method="POST">
            Name:<input type="text" value="<?php echo $editdata['st_name']; ?>" name="txt1">
            <br/>
            Gender:male<input type="radio"
            <?php if($editdata['st_gender']=="male"){echo"checked";} ?>                  
            value="male" name="txt2"/>
            female<input type="radio"
            <?php if($editdata['st_gender']=="female"){echo"checked";} ?>                  
            value="female" name="txt2"/>
            <br/>
            DOB:<input type="date" value="<?php echo $editdata['st_dob']; ?>" name="txt3">
            <br/>
            Email:<input type="email" value="<?php echo $editdata['st_email']; ?>" name="txt4">
            <br/>
            Password:<input type="password" value="<?php echo $editdata['st_password']; ?>" name="txt5"/>
            <br/>
            Mobile:<input type="number" value="<?php echo $editdata['st_mobile']; ?>" name="txt6">
            <br/>
            Address:<input type="text" value="<?php echo $editdata['st_address']; ?>" name="txt7">
            <br/>
            Area:<input type="text" value="<?php echo $editdata['st_area']; ?>" name="txt8">
            <br/>
            Bloodgroup:<input type="text" value="<?php echo $editdata['st_bloodgroup']; ?>" name="txt9">
            <br/>
            <input type="submit"/> 
        </form>
    </body>
</html>

