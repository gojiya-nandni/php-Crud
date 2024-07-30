<?php

    $id = $_GET['id'];

    $connection = mysqli_connect('localhost', 'root', '', 'stud');
    $query = "DELETE FROM `student` WHERE `id`=$id ";
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