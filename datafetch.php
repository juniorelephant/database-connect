<?php

$mysqli_connect = new mysqli('localhost', 'root', '', 'course_management');

if ($mysqli_connect->connect_errno) {
    echo 'Faild to connect to the server :(' . $mysqli_connect->connect_errno . ')' . $mysqli_connect->connect_errno;
}

$result = $mysqli_connect->query("SELECT * FROM employee");
$rows = $result->fetch_all(MYSQLI_ASSOC); // fetch all rows as array
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table border="1" style="width: 100%; padding:20px; text-align:center;">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Salary</td>
                <td>Designation</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($rows as $r){ ?>
            <tr>
                <td><?= $r['id'] ?></td>
                <td><?= $r['name'] ?></td>
                <td><?= $r['email'] ?></td>
                <td><?= $r['salary'] ?></td>
                <td><?= $r['designation'] ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>
