<?php

    $id = $_POST['id'];
    $name = $_POST['name'];
    $course = $_POST['course'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $addr = $_POST['addr'];

    $connection = mysqli_connect('localhost', 'root', '', 'stud');
    $query = "UPDATE `student` SET `name`='$name',`course`='$course',`email`='$email',`mobile`='$mobile',`addr`='$addr' WHERE `id`='$id'; ";
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