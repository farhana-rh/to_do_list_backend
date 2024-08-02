// add_task.php

<?php
require_once 'config.php';
if (isset($_POST['submit'])) {
    if ($_POST['task'] != "") {
        $task = $_POST['task'];

        $addtasks = mysqli_query(
            $db,
            "INSERT INTO `tasks` VALUES('', '$task', 'Pending')"
        )
            or
            die(mysqli_error($db));
        header('location:index.php');
    }
}
?>