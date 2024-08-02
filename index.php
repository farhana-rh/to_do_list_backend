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
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])  ?>" method="POST">
            <input type="text" id="myInput" name="task" placeholder="Title...">

            <button onclick="newElement()" type="submit" name="add" class="addBtn"> ADD</button>
        </form>
    </div>

    <ul id="myUL">

        <li class="checked">Pay bills</li>

    </ul>
    <script src="script.js"></script>
</body>

</html>


<?php
include('database.php');


echo "db is connected" . "<br>";



if (isset($_POST['add'])) {
    if ($_POST['task'] != "") {
        $task = $_POST['task'];
        $sql = "INSERT INTO tasks (task) VALUES ('$task')";
        mysqli_query($conn, $sql);
        echo "task added";
    } else {
        echo "something wrong, task is not adding";
    }
}

mysqli_close($conn);
?>