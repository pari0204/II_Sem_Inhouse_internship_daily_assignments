<?php
include('db_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $branch = mysqli_real_escape_string($conn, $_POST['branch']);
    $cgpa = $_POST['cgpa'];
    $photo = mysqli_real_escape_string($conn, $_POST['photo']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);

    $sql = "INSERT INTO students
    (name,email,branch,cgpa,photo,address,course)
    VALUES
    ('$name','$email','$branch','$cgpa','$photo','$address','$course')";

    if(mysqli_query($conn,$sql))
    {
        echo "<h2>Student Registered Successfully!</h2>";
        echo "<a href='students.php'>View Students</a>";
    }
    else
    {
        echo "Error : ".mysqli_error($conn);
    }

}
?>
