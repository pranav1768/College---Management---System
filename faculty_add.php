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

<h3>Add Faculty</h3>

<?php
if(isset($_POST['save'])){

$n=$_POST['name'];
$e=$_POST['email'];
$s=$_POST['subject'];

mysqli_query(
$conn,
"insert into faculty(name,email,subject)
values('$n','$e','$s')"
);

echo "<div class='alert alert-success'>
Faculty added successfully
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

<label>Subject</label>
<input type="text"
name="subject"
class="form-control"
required>

<br>

<input type="submit"
name="save"
value="Add Faculty"
class="btn btn-success">

<a href="index.php"
class="btn btn-secondary">
Back to Dashboard
</a>

</form>

</div>
</div>
</body>
</html>