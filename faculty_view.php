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

<h2>Faculty List</h2>

<input type="text"
id="search"
placeholder="Search faculty..."
class="form-control mb-3"
onkeyup="searchTable()">


<table
id="table"
class="table table-striped table-hover table-bordered">

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Subject</th>
<th>Edit</th>
<th>Delete</th>
</tr>

<?php

$q=mysqli_query(
$conn,
"select * from faculty"
);

while($r=mysqli_fetch_array($q)){

echo "<tr>";

echo "<td>".$r['id']."</td>";
echo "<td>".$r['name']."</td>";
echo "<td>".$r['email']."</td>";
echo "<td>".$r['subject']."</td>";

echo "<td>
<a class='btn btn-warning'
href='faculty_edit.php?id=".$r['id']."'>
Edit
</a>
</td>";

echo "<td>
<a class='btn btn-danger'
onclick='return confirmDelete()'
href='faculty_delete.php?id=".$r['id']."'>
Delete
</a>
</td>";

echo "</tr>";

}

?>

</table>

</div>


<script>

function confirmDelete(){
return confirm("Are you sure?");
}

function searchTable() {

let input =
document.getElementById("search");

let filter =
input.value.toLowerCase();

let table =
document.getElementById("table");

let tr =
table.getElementsByTagName("tr");

for (let i = 1; i < tr.length; i++) {

let td =
tr[i].getElementsByTagName("td")[1];

if (td) {

let txt =
td.textContent;

if (txt.toLowerCase().indexOf(filter) > -1) {

tr[i].style.display = "";

} else {

tr[i].style.display = "none";

}

}

}
}
</script>
</body>
</html>