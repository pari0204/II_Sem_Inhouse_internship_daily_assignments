<?php
include('db_connect.php');
?>

<!DOCTYPE html>
<html>

<head>

<title>Students List</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2 class="text-center">Registered Students</h2>

<table class="table table-bordered table-hover">

<thead class="table-dark">

<tr>

<th>ID</th>

<th>Name</th>

<th>Email</th>

<th>Branch</th>

<th>CGPA</th>

<th>Photo</th>

<th>Address</th>

<th>Course</th>

<th>Date Registered</th>

</tr>

</thead>

<tbody>

<?php

$sql="SELECT * FROM students";

$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result))
{

echo "<tr>";

echo "<td>".$row['id']."</td>";

echo "<td>".$row['name']."</td>";

echo "<td>".$row['email']."</td>";

echo "<td>".$row['branch']."</td>";

echo "<td>".$row['cgpa']."</td>";

echo "<td>".$row['photo']."</td>";

echo "<td>".$row['address']."</td>";

echo "<td>".$row['course']."</td>";

echo "<td>".$row['date_registered']."</td>";

echo "</tr>";

}

?>

</tbody>

</table>

</div>

</body>

</html>
