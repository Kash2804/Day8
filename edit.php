<?php
$connection= mysqli_connect("localhost","root","","db_internship");


if(!isset($_GET['id']) || empty($_GET['id'])){
    header("location:3_table1.php");
}

$editid=$_GET['id'];
//select Data From Table
$editq=mysqli_query($connection,"select * from tbl_user1 where user1_id='{$editid}'") or die(mysqli_error($connection));
$editdata=mysqli_fetch_array($editq);
//print_r($editdata);
if($_POST){
    $txt1=$_POST['txt1'];
    $txt2=$_POST['txt2'];
    $txt3=$_POST['txt3'];
    
    $uq=mysqli_query($connection,"update tbl_user1 set user1_name='{$txt1}',user1_gender='{$txt2}',user1_mobile='{$txt3}' where user1_id='{$editid}'")or die(mysqli_error($connection));
    if($uq){
        echo"<script>alert('Record Updated');window.location='3_table1.php';</script>";
    }
}
?>
<html>
    <body>
        <form method="POST">
            Name:<input type="text" value="<?php echo $editdata['user1_name']; ?>" name="txt1">
            <br/>
            Gender:male<input type="radio"
            <?php if($editdata['user1_gender']=="male"){echo"checked";} ?>                  
            value="male" name="txt2"/>
            female<input type="radio"
            <?php if($editdata['user1_gender']=="female"){echo"checked";} ?>                  
            value="female" name="txt2"/>
            <br/>
            Mobile:<input type="text" value="<?php echo $editdata['user1_mobile']; ?>" name="txt3"/>
            <br/>
            <input type="submit"/> 
        </form>
    </body>
</html>

