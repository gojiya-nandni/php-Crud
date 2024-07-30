<?php

   $id = $_GET['id'];

    $connection = mysqli_connect('localhost', 'root', '', 'stud');
    $query = "SELECT * FROM `student` WHERE `id`=$id ";
    $row = mysqli_query($connection, $query);
    $student = mysqli_fetch_assoc($row);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./updateprocess.php" method="post">
        <input type="hidden" name="id" value="<?= $student['id'] ?>">
        <input type="text" name="name" id="" placeholder="Enter Your Name" value="<?= $student['name'] ?>">
        <input type="text" name="course" id="" placeholder="Enter Your Course" value="<?= $student['course'] ?>">
        <input type="text" name="email" id="" placeholder="Enter Your Email" value="<?= $student['email'] ?>">
        <input type="text" name="mobile" id="" placeholder="Enter Your Mobile Number" value="<?= $student['mobile'] ?>">
        <input type="text" name="addr" id="" placeholder="Enter Your Address" value="<?= $student['addr'] ?>">
        <input type="submit" value="Submit">
    </form>
</body>
</html>