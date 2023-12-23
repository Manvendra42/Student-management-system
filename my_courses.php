<?php
//input type="submit" class="btn btn-primary" name="Submit" value="Submit"
session_start();

/*if(!isset($_SESSION['username']))
{
  header("location:login.php");
}
elseif($_SESSION['usertype']=='admin')
{
  header("location:login.php");
}*/

$host="localhost";

$user="root";

$password="";

$db="student";


$data=mysqli_connect($host,$user,$password,$db);

$name=$_SESSION['username'];

$sql="SELECT * FROM user WHERE username='$name' ";


$result=mysqli_query($data,$sql);

//$info=mysqli_fetch_assoc($result);

$info=$result->fetch_assoc();

if(isset($_POST['Submit']))
{
  $s_email=$_POST['email'];
  $s_phone=$_POST['phone'];
  $s_password=$_POST['password'];
  $s_courses=$_POST['courses'];
  $query="SELECT courses='$s_courses' FROM user WHERE username='$name' ";

  $result2=mysqli_query($data,$query);

  if($result2){
    echo "<script type='text/javascript'>alert('Update Success')</script>";
  }
}
 ?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>

<?php


include 'student_css.php';


 ?>
 <style type="text/css">

label{
  display: inline-block;
  text-align: right;
  width: 100px;
  padding-top: 10px;
  padding-bottom: 10px;
}
.div_deg{
  background-color: skyblue;
  width:500px;
  padding-top: 70px;
  padding-bottom: 70px;
}

 </style>
</head>
<body>

	<?php

include 'student_side.php';
	 ?>
   <div class="content">
     <center>
       <h1>Student Course</h1>
       <br><br>
     <form action="#" method="POST">

      <div class="div_deg">


       <div>
        <label>E-Mail</label>
         <input type="email" name="email" value="<?php echo "{$info['email']}" ?>">
       </div>
       <div>
         <label>Phone</label>
         <input type="number" name="phone" value="<?php echo "{$info['phone']}" ?>">
       </div>
       <div>
         <label>Password</label>
         <input type="text" name="password" value="<?php echo "{$info['password']}" ?>">
       </div>
       <div>
         <label>Courses</label>
         <input type="text" name="courses" value="<?php echo "{$info['courses']}" ?>">
       </div>
     </div>
     </form>
   </center>
   </div>

</body>
</html>
