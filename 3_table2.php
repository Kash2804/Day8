<?php
//db connection
$connection= mysqli_connect("localhost","root","","db_form");
//query
$q=mysqli_query($connection,"select * from tbl_student")or die(mysqli_error($connection));
echo"<table border='1'>";
echo"<tr>";
echo"<th>ID</th>";
echo"<th>NAME</th>";
echo"<th>GENDER</th>";
echo"<th>DOB</th>";
echo"<th>EMAIL</th>";
echo"<th>PASSWORD</th>";
echo"<th>MOBILE</th>";
echo"<th>ADDRESS</th>";
echo"<th>AREA</th>";
echo"<th>BLOODGROUP</th>";
echo"<th>ACTION</th>";
echo"</tr>";

while($row=mysqli_fetch_array($q)){
    echo"<tr>";
    echo"<td>{$row['st_id']}</td>";
    echo"<td>{$row['st_name']}</td>";
    echo"<td>{$row['st_gender']}</td>";
    echo"<td>{$row['st_dob']}</td>";
    echo"<td>{$row['st_email']}</td>";
    echo"<td>{$row['st_password']}</td>";
    echo"<td>{$row['st_mobile']}</td>";
    echo"<td>{$row['st_address']}</td>";
    echo"<td>{$row['st_area']}</td>";
    echo"<td>{$row['st_bloodgroup']}</td>";
    echo"<td><a href='edit_form.php?id={$row['st_id']}'>Edit</a> | <a href='delete1.php?deleteid={$row['st_id']}'>Delete</a></td>";
    echo"</tr>";
}
echo"</table>";

echo"<a href='insert_form.php'>Add Record</a>";


