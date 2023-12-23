
<?php

$host="localhost";
$user="root";
$password="";
$db="student";

$data=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['add_courses']))
{
$username=$_POST['name'];
$user_email=$_POST['email'];
$user_phone=$_POST['phone'];
$user_password=$_POST['password'];
$user_courses=$_POST['courses'];
$usertype="student";

$check= " SELECT * FROM user WHERE username='$username'";


$check_user=mysqli_query($data,$check);

$row_count=mysqli_num_rows($check_user);

if($row_count==1){
  echo "<script type='text/javascript'>
  alert('Username already exist')
  </script>";
}
else{


$sql="INSERT INTO user(username,email,phone,usertype,password,courses)
      VALUES(' $username ','$user_email','$user_phone','$usertype','$user_password','$user_courses')";


$result=mysqli_query($data,$sql);



if($result){
    echo "<script type='text/javascript'>
    alert('Data Upload Successfully')
    </script>";
}
else{
  echo "Upload Failed";
}

}
}








 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>
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
      width:400px;
      padding-top: 70px;
      padding-bottom: 70px;
    }
  </style>
  <?php


include 'admin_css.php';


   ?>
</head>
<body>

  <?php



include 'admin_side.php';




   ?>


	<div class="content">
<center>
		<h1>ADD COURSES</h1>

    <div class="div_deg">
      <form action="#" method="POST">

       <div>
         <label>Username</label>
         <input type="text" name="name">
       </div>

       <div>
         <label>E-mail</label>
         <input type="email" name="email">
       </div>


       <div>
         <label>Phone</label>
         <input type="number" name="phone">
       </div>


       <div>
         <label>Password</label>
         <input type="text" name="password">
       </div>
       <div>
         <label>Courses</label>
         <input type="text" name="courses">
       </div>
       <div>
         <input type="submit" class="btn btn-primary" name="add_courses" value="Add Course">
       </div>

      </form>
    </div>

</center>
	</div>

</body>
</html>
