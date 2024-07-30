<?php

    $connection = mysqli_connect('localhost', 'root', '', 'stud');
    $query = "SELECT * FROM `student` ";
    $result = mysqli_query($connection, $query);

    $students = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><hr><br>
    <form action="./datashow.php" method="post">
        <input type="hidden" name="id">
        <input type="text" name="name" id="" placeholder="Enter Your Name">
        <input type="text" name="course" id="" placeholder="Enter Your Course">
        <input type="text" name="email" id="" placeholder="Enter Your Email">
        <input type="text" name="mobile" id="" placeholder="Enter Your Mobile Number">
        <input type="text" name="addr" id="" placeholder="Enter Your Address">
        <input type="submit" value="Submit">
    </form><br><hr><br>

    <table border="1">
        <thead>
            <th>NAME</th>
            <th>COURSE</th>
            <th>EMAIL</th>
            <th>MOBILE</th>
            <th>ADDRESS</th>
            <th>DELETE</th>
            <th>UPDATE</th>
        </thead>
        <tbody>
        <?php foreach($students as $student) { ?>
            <tr>
            <td><?= $student['name']?></td>
            <td><?= $student['course']?></td>
            <td><?= $student['email']?></td>
            <td><?= $student['mobile']?></td>
            <td><?= $student['addr']?></td>
            <td><a href="./delete.php?id=<?= $student['id']?>">DELETE</a></td>
            <td><a href="./update.php?id=<?= $student['id']?>">UPDATE</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</body>
</html>