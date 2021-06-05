<?php
$connection=mysqli_connect("localhost","root","","db_internship");
if($_POST){
    $name=$_POST['txt1'];
    $gender=$_POST['txt2'];
    $mobile=$_POST['txt3'];
    $q=mysqli_query($connection,
        "insert into tbl_user1(	user1_name,user1_gender,user1_mobile) values('{$name}','{$gender}','$mobile}')") or die("Error".mysqli_error($connection));

    if($q){
         echo"<script>alert('record added')</script>";
    }
}  
  

?>
<html>
  <body>
     <form method="post">
       <table>
          <tr>
             <td>Name</td>
             <td><input type="text" name="txt1" required/></td>
          </tr>
          <tr>
            <td>gender</td>
            <td><select name="txt2">
                <option>male</option>
                <option>female</option>
                </select>
            </td>
          </tr>
          <tr>
             <td>mobile</td>
             <td><input type="number" name="txt3" required/></td>
          </tr>
          <tr>
            <td><input type="submit"/></td>
          </tr>
       </table>
     </form>

  </body>
</html>

<a href='3table1.php'>Display Record</a>