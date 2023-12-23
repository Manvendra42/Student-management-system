
<?php

error_reporting(0);
session_start();
$host="localhost";
$user="root";
$password="";
$db="student";


$data=mysqli_connect($host,$user,$password,$db);

$sql= " SELECT * FROM user WHERE usertype='student' ";

$result=mysqli_query($data,$sql);


 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>

  <?php


include 'admin_css.php';


   ?>
   <style type="text/css">

     .table_th{
       padding:20px;
       font-size: 20px;
     }
     .table_td{
       padding:20px;
       background-color: skyblue;
     }
     #me{
       cursor: pointer;
     }
   </style>
</head>
<body>

  <?php



include 'admin_side.php';




   ?>


	<div class="content">
    <center>

		<h1>Student Courses</h1>

    <?php
if($_SESSION['message'])
{
  echo $_SESSION['message'];
}

unset($_SESSION['message']);


     ?>
    <table border="1px">
      <tr>
        <th class="table_th">User Name</th>
        <th class="table_th">E-mail</th>
        <th class="table_th">Phone</th>
        <th class="table_th">Password</th>
        <th class="table_th">Course</th>
        <th class="table_th">Delete</th>
      </tr>


      <?php

      while($info=$result->fetch_assoc())
{

       ?>
      <tr>
        <td class="table_td">
        <?php echo "{$info['username']}" ;?></td>
        <td class="table_td">
        <?php echo "{$info['email']}" ;?></td>
        <td class="table_td">
        <?php echo "{$info['phone']}" ;?></td>
        <td class="table_td">
        <?php echo "{$info['password']}" ;?></td>
        <td class="table_td">
        <?php echo "{$info['courses']}" ;?></td>
        <td id="me" class="table_td">
        <?php echo "<a onClick=\" javascript:return confirm('Are you sure you want to delete');\" href='delete.php?student_id={$info['id']}'>Delete</a>" ;?></td>
      </tr>

      <?php
}
      ?>

    </center>
    </table>


	</div>

</body>
</html>
