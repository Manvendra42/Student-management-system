<?php

session_start();
if(!isset($_SESSION['username']))
{
  header("location:login.php");
}
elseif($_SESSION['usertype']=='student')
{
  header("location:login.php");
}

$host="localhost";
$user="root";
$password="";
$db="student";


$data=mysqli_connect($host,$user,$password,$db);

$id=$_GET['student_id'];

$sql="SELECT * FROM user WHERE id='$id' ";

$result=mysqli_query($data,$sql);

$info=$result->fetch_assoc();



if(isset($_POST['Update']))
{
$q_name=$_POST['name'];
$q_email=$_POST['email'];
$q_phone=$_POST['phone'];
$q_password=$_POST['password'];



$query="UPDATE user SET username='$q_name',email='$q_email',phone='$q_phone',password='$q_password' WHERE id='$id'";


$result2=mysqli_query($data,$query);

if($result2){
  header("location:view_student.php");
}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>

  <?php


include 'admin_css.php';


   ?>


   <style>

label{
  display: inline-block;
  width: 100px;
  text-align: right;
  padding-top: 10px;
  padding-bottom: 10px;
}
.div_deg{

  background-color: skyblue;
  width: 400px;
  padding-bottom: 70px;
  padding-top: 70px;
}


   </style>
</head>
<body>

  <?php



include 'admin_side.php';




   ?>


	<div class="content">

<center>
		<h1>Update Student</h1>
<br><br>

    <div class="div_deg">
      <form action="#" method="POST">
        <div>
          <label>Username</label>
          <input type="text" name="name" value="<?php echo "{$info['username']} " ?>">
        </div>

        <div>
          <label>E-mail</label>
          <input type="email" name="email" value="<?php echo "{$info['email']}"?>">
        </div>

        <div>
          <label>Phone</label>
          <input type="number" name="phone" value="<?php echo "{$info['phone']}"?>">
        </div>

        <div>
          <label>Password</label>
          <input type="text" name="password" value="<?php echo "{$info['password']}"?>">
        </div>
        <div>
          <input class="btn btn-success" type="submit" name="Update" value="Update">
        </div>
      </form>
    </div>
</center>

	</div>

</body>
</html>
