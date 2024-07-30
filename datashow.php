<?php

    $name = $_POST['name'];
    $course = $_POST['course'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $addr = $_POST['addr'];

    $connection = mysqli_connect('localhost', 'root', '', 'stud');
    $query = "INSERT INTO `student`(`name`, `course`, `email`, `mobile`, `addr`) VALUES ('$name','$course','$email','$mobile','$addr')";
    $row = mysqli_query($connection, $query);

    if ($row > 0)
    {
        return header('Location: ./index.php');
    }
    else
    {
        echo "Failed to insert data";
    }

?>