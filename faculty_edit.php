<?php
include 'db.php';

$id=$_GET['id'];

$q=mysqli_query(
$conn,
"select * from faculty where id=$id"
);

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

<h4 class="text-white text-center">
CMS
</h4>

<a href="index.php">Dashboard</a>
<a href="student_view.php">Student</a>
<a href="faculty_view.php">Faculty</a>

</div>


<!-- Content -->

<div class="col-md-10">

<nav class="navbar navbar-dark bg-dark">
<span class="navbar-brand ms-3">
Edit Faculty
</span>
</nav>


<div class="container mt-4">

<div class="form-box">

<h3>Edit Faculty</h3>

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

<label>Subject</label>
<input type="text"
name="subject"
value="<?php echo $r['subject']; ?>"
class="form-control">

<br>

<input type="submit"
name="update"
class="btn btn-success">

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
$s=$_POST['subject'];

mysqli_query(
$conn,
"update faculty set
name='$n',
email='$e',
subject='$s'
where id=$id"
);

header("location:faculty_view.php");

}
?>