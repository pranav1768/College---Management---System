<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="css/style.css">

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
rel="stylesheet">

</head>

<body>

<div class="container mt-4">

<div class="form-box">

<h3>Add Student</h3>

<?php
if(isset($_POST['save'])){

$n=$_POST['name'];
$e=$_POST['email'];
$c=$_POST['course'];

mysqli_query(
$conn,
"insert into students(name,email,course)
values('$n','$e','$c')"
);

echo "<div class='alert alert-success'>
Student added successfully
</div>";
}
?>

<form method="post">

<label>Name</label>
<input type="text"
name="name"
class="form-control"
required>

<br>

<label>Email</label>
<input type="text"
name="email"
class="form-control"
required>

<br>

<label>Course</label>
<input type="text"
name="course"
class="form-control"
required>

<br>

<input type="submit"
name="save"
value="Add Student"
class="btn btn-primary">

<a href="index.php"
class="btn btn-secondary">
Back to Dashboard
</a>

</form>

</div>

</div>
</body>
</html>