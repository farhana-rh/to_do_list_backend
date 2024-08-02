<?php
$db = mysqli_connect("localhost", "root", "", "to_do_list");

if (isset($_POST['submit'])) {
    $task = $_POST['task'];
    mysqli_query($db, "INSERT INTO tasks (task) VALUES ('$task')");
    header('location:index.php');
}

$tasks = mysqli_query($db, "SELECT * FROM tasks");

if (isset($_GET['del_task'])) {
    $id = $_GET['del_task'];
    mysqli_query($db, "DELETE FROM tasks WHERE id=$id");

    header('location: index.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="myDIV" class="header">
        <h2>My To Do List</h2>
        <form action="index.php" method="POST">
            <input type="text" id="myInput" name="task" placeholder="Title...">

            <button type="submit" name="submit" class="addBtn"> ADD</button>
        </form>
    </div>

    <ul id="myUL">
        <?php while ($row = mysqli_fetch_array($tasks)) {  ?>
            <li> <?php echo $row['Id']; ?></li>
            <li><?php echo $row['task']; ?></li>

        <?php } ?>
    </ul>
    <script src="script.js"></script>
</body>

</html>