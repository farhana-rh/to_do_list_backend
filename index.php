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
            <span onclick="newElement()" class="addBtn">Add</span>
        </form>
    </div>

    <ul id="myUL">

        <li class="checked">Pay bills</li>

    </ul>
    <script src="script.js"></script>
</body>

</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task = filter_input(INPUT_POST, "task", FILTER_SANITIZE_SPECIAL_CHARS);
}

?>