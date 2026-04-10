<?php
include 'db.php';

$id=$_GET['id'];

$q=mysqli_query($conn,
"select * from students where id=$id");

$r=mysqli_fetch_array($q);
?>

<!DOCTYPE html>
<html>
<head>

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

<h4 class="text-center text-white">CMS</h4>

<a href="index.php">Dashboard</a>
<a href="student_view.php">View Student</a>
<a href="faculty_view.php">View Faculty</a>

</div>


<!-- Content -->

<div class="col-md-10">

<nav class="navbar navbar-dark bg-dark">
<span class="navbar-brand ms-3">
Edit Student
</span>
</nav>


<div class="container mt-4">

<div class="form-box">

<h3>Edit Student</h3>

<form method="post">

<label>Name</label>
<input type="text"
name="name"
value="<?php echo $r['name']; ?>"
class="form-control">

<br>

<label>Email</label>
<input type="text"
name="email"
value="<?php echo $r['email']; ?>"
class="form-control">

<br>

<label>Course</label>
<input type="text"
name="course"
value="<?php echo $r['course']; ?>"
class="form-control">

<br>

<input type="submit"
name="update"
class="btn btn-primary">

</form>

</div>

</div>

</div>
</div>
</div>
</body>
</html>


<?php

if(isset($_POST['update'])){

$n=$_POST['name'];
$e=$_POST['email'];
$c=$_POST['course'];

mysqli_query(
$conn,
"update students set
name='$n',
email='$e',
course='$c'
where id=$id"
);

header("location:student_view.php");

}
?>