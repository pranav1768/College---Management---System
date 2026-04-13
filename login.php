<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>

<title>Login</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/style.css">

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body class="login-bg">

<div class="login-container">

<div class="login-card">

<h3 class="text-center mb-3">
<i class="fa fa-user"></i> Admin Login
</h3>

<form method="post">

<div class="mb-3">

<label>Username</label>

<input type="text"
name="user"
class="form-control"
placeholder="Enter username">

</div>


<div class="mb-3">

<label>Password</label>

<input type="password"
name="pass"
class="form-control"
placeholder="Enter password">

</div>


<input type="submit"
name="login"
value="Login"
class="btn btn-primary w-100">

</form>

</div>

</div>

</body>
</html>


<?php

if(isset($_POST['login'])){

$u=$_POST['user'];
$p=$_POST['pass'];

if($u=="admin" && $p=="123"){

$_SESSION['login']=1;

header("location:index.php");

}else{

echo "<script>alert('Wrong login');</script>";

}

}

?>