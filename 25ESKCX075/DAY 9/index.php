<?php
include('db_connect.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <h2 class="text-center mb-4">Student Registration Form</h2>

    <form action="process_form.php" method="POST">

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Branch</label>
            <input type="text" name="branch" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>CGPA</label>
            <input type="number" step="0.01" name="cgpa" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Photo Filename</label>
            <input type="text" name="photo" class="form-control">
        </div>

        <div class="mb-3">
            <label>Address</label>
            <textarea name="address" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>Course</label>
            <input type="text" name="course" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Register</button>

    </form>

</div>

</body>
</html>
