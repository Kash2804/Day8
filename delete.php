<?php
$connection= mysqli_connect("localhost","root","","db_internship");
$id=$_GET['deleteid'];

$q=mysqli_query($connection,"delete from tbl_user1 where user1_id='{$id}'")or die("Error".mysqli_error($connection));
if($q)
{
    echo"<script>alert('Record Deleted');window.location'3table1.php';</script>";
}
?>
