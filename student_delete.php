<?php

include 'db.php';

$id=$_GET['id'];

mysqli_query(
$conn,
"delete from students where id=$id"
);

header("location:student_view.php");

?>