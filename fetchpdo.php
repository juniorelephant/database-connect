<?php

mysqli_report(MYSQLI_REPORT_OFF);

$mysqli = new mysqli("localhost", "root", "", "course_management");

if ($mysqli->connect_errno) {
    echo "failed to connect to the server :(" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
    exit();
}

$sql = "SELECT * FROM employee";

if ($stmt = $mysqli->prepare($sql)) {
    $stmt->execute();
    $stmt->bind_result($id,$name, $email, $salary, $designation);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Employee List</title>
    </head>
    <body>

    <table border="1" style="width: 100%;">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Salary</th>
                <th>Designation</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($stmt->fetch()) { ?>
            <tr>
                <td><?= ($id) ?></td>
                <td><?= ($name) ?></td>
                <td><?= ($email) ?></td>
                <td><?=($salary) ?></td>
                <td><?= ($designation) ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    </body>
    </html>

    <!-- php start -->
    <?php
    $stmt->close();
} else {
    echo "Statement Error: " . $mysqli->error;
}

$mysqli->close();
?>
