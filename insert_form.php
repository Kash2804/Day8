<?php
$connection=mysqli_connect("localhost","root","","db_form");
if($_POST){
    $Name=$_POST['txt1'];
    $gender=$_POST['txt2'];
    $dob=$_POST['txt3'];
    $email=$_POST['txt4'];
    $password=$_POST['txt5'];
    $mobile=$_POST['txt6'];
    $address=$_POST['txt7'];
    $area=$_POST['txt8'];
    $bloodgroup=$_POST['txt9'];
    $q=mysqli_query($connection,
        "insert into tbl_student(st_name,st_gender,st_dob,st_email,st_password,st_mobile,st_address,st_area,st_bloodgroup) values('{$Name}','{$gender}','{$dob}','{$email}','{$password}','{$mobile}','{$address}','{$area}','{$bloodgroup}')") or die("Error".mysqli_error($connection));

        
if($q)
{
    echo"<script>alert('record added');</script>";
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
             <td>dob</td>
             <td><input type="date" name="txt3" required/></td>
          </tr>
          <tr>
             <td>email</td>
             <td><input type="email" name="txt4" required/></td>
          </tr>
          <tr>
             <td>password</td>
             <td><input type="password" name="txt5" required/></td>
          </tr>
          <tr>
             <td>mobile</td>
             <td><input type="number" name="txt6" required/></td>
          </tr>
          <tr>
             <td>address</td>
             <td><input type="text" name="txt7" required/></td>
          </tr>
          <tr>
             <td>area</td>
             <td><input type="text" name="txt8" required/></td>
          </tr>
          <tr>
             <td>bloodgroup</td>
             <td><input type="text" name="txt9" required/></td>
          </tr>
          <tr>
            <td><input type="submit"/></td>
          </tr>
       </table>
     </form>

  </body>
</html>

<a href='3_table2.php'>Display Record</a>
