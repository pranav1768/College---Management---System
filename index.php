<?php

session_start();

if(!isset($_SESSION['login'])){
header("location:login.php");
}

include 'db.php';


$s = mysqli_query($conn,
"select count(*) as total from students");

$sr = mysqli_fetch_array($s);
$total_students = $sr['total'];


$f = mysqli_query($conn,
"select count(*) as total from faculty");

$fr = mysqli_fetch_array($f);
$total_faculty = $fr['total'];

?>

<!DOCTYPE html>
<html>
<head>

<title>College Management System</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/style.css">

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

<div class="container-fluid">

<div class="row">


<!-- Sidebar -->

<div class="col-md-2 sidebar">

<h4 class="text-white text-center">
<i class="fa fa-school"></i> CMS
</h4>

<a href="index.php">
<i class="fa fa-home"></i> Dashboard
</a>

<a href="student_add.php">
<i class="fa fa-user-plus"></i> Add Student
</a>

<a href="student_view.php">
<i class="fa fa-users"></i> View Student
</a>

<a href="faculty_add.php">
<i class="fa fa-chalkboard-teacher"></i> Add Faculty
</a>

<a href="faculty_view.php">
<i class="fa fa-book"></i> View Faculty
</a>

<a href="logout.php">
<i class="fa fa-sign-out"></i> Logout
</a>    

</div>



<!-- Content -->

<div class="col-md-10 content">


<!-- Navbar -->

<nav class="navbar navbar-dark bg-dark">

<span class="navbar-brand ms-3">

College Management System

</span>

</nav>



<div class="container mt-4">

<h2 class="text-center">

Dashboard

</h2>



<div class="row mt-4">


<!-- Students Counter -->

<div class="col-md-4">

<div class="card bg-primary text-white">

<div class="card-body text-center">

<h4>Total Students</h4>

<h2>

<?php echo $total_students; ?>

</h2>

</div>

</div>

</div>



<!-- Faculty Counter -->

<div class="col-md-4">

<div class="card bg-success text-white">

<div class="card-body text-center">

<h4>Total Faculty</h4>

<h2>

<?php echo $total_faculty; ?>

</h2>

</div>

</div>

</div>



<!-- Info Card -->

<div class="col-md-4">

<div class="card bg-warning text-white">

<div class="card-body text-center">

<h4>Mini Project</h4>

<p>

Bootstrap + PHP + MySQL

</p>

</div>

</div>

</div>



</div>

</div>


<!-- Footer -->

<footer class="footer text-center">

College Management System © 2026

</footer>


</div>

</div>

</div>
</body>
</html>