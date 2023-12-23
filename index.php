
<?php


error_reporting(0);
session_start();
session_destroy();




if($_SESSION['message'])
{
  $message=$_SESSION['message'];

  echo "<script type='text/javascript'>

  alert('$message');

  </script>";
}

 ?>










<!DOCTYPE html>
<html>
  <head>
    
    <title>Student Management System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </head>
  <body>
    <nav>
      <label class="logo"><img src="trans.png" width="100" height="70"></label>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="#Admission">Admission</a></li>
        <li><a href="Login.php" class="button">Login</a></li>
      </ul>
    </nav>
    <div class="section">
      <div class="stu">
        Welcome To <span class="role"></span>
        </div>
      <img class="main" src="study.jpg.avif" alt="student desk">
    </div>
    <div class="container">

      <div class="row">

        <div class="col-md-4">
          <img class="college" src="college.avif" alt="college">
        </div>


        <div class="col-md-8">
           <h1>Introduction</h1>
           <br>
           <p>Schools and Universities are the foundation of knowledge and an educational body on which students rely upon.
             Therefore, they need to maintain a proper database of its students to keep all the updated records and easily
             share information with students.Most schools and Universities count on an advanced software tool knows as
             'Student Information System (SIS)' to keep all their student records and administrative operations including,
             examinations, attendance, and other activities.Over the recent years, the performance and efficiency of the
             education industry have been enhanced by using the Student Management System. This tool has productively taken
             over the workload of the admin department with its well-organized, easy, and reliable online school management software.
             "Student Management System (SMS) is a solution tool that is designed to track, maintain and manage all the data generated
             by a School, including the grades of a student, their attendance, their interpersonal activities records, etc.,"
             SMS acts as the bottom line database to store all the day-to-day school operations, maintain the proper records of the past
             few decades, regulate the various operation modules, managing the critical tasks, efficiently handling</p>
        </div>

      </div>
    </div>
    <br><br>
     <center>
       <h1>Our Courses</h1>
       <br><br>
     </center>

<div class="container-1">
<div class="row-1">

  <div class="col-1">
    <img class="web" src="web.jpeg">
    <h1 class="design">Web Development</h1>
  </div>
  <div class="col-2">
   <img class="ai" src="ai.jpeg" alt="ai">
   <h1 class="a">Artificial Intelligence</h1>
  </div>
  <div class="col-3">
<img class="graphic" src="graphic.jpeg" alt="graphic">
<h1 class="g">Graphic Design</h1>
  </div>
</div>

</div>
<br><br><br><br>
<center>
  <h1 class="head">Admission Form</h1>
  </center>
  <br><br>
<div class="container-3" id="Admission">
<form action="data_check.php" method="POST">
  <div class="action">
  <div class="adm">
    <label class="label">Name</label>
    <input class="input" type="text" name="name" value="">
  </div>

  <div class="adm">
    <label class="label">E-mail</label>
    <input class="input" type="text" name="email" value="">
  </div>

  <div class="adm">
    <label class="label">Phone</label>
    <input class="input" type="text" name="phone" value="">
  </div>

  <div class="adm">
    <label class="label">Message</label>
    <textarea class="in" name="message"></textarea>
  </div>

  <div class="adm" id="min">
    <input class="btn btn-primary" id="submit" value="Apply" type="submit" name="Apply">
  </div>
  </div>

</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://kit.fontawesome.com/58a810656e.js" crossorigin="anonymous"></script>
    <script>
      var typeData = new Typed(".role", {
        strings: [
          "Edubin !"
        ],
        loop: true,
        typeSpeed: 100,
        backSpeed: 80,
        backDelay: 1000,
      });
    </script>
  </body>
</html>
