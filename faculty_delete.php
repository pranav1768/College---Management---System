<?php
include 'db.php';

$id=$_GET['id'];

mysqli_query(
$conn,
"delete from faculty where id=$id"
);

header("location:faculty_view.php");

?>