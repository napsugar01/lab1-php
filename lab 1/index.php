<?php
$page_title = "To-Do List";

$mysqli = new mysqli("localhost", "root", "", "todo_application");
echo $mysqli->host_info . "\n";

if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}

$result = $mysqli->query("SELECT * FROM tasks");

?>




<!DOCTYPE <html>
<html lang="=en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" content="IE-edge">
        <meta name="viewport" content= "width=device-width, initial-scale=1.0">
        <title><?= $page_title ?></title>
        <link rel="stylesheet" href="style.css">
    </head>

    <header>
    <nav>
            <ul>
                <li>Create task</a></li>

            </ul>
        </nav>
    </header>

    <body>
        <script src="/main.js"></script>
        <p><?= $result ?></p>
    </body>

</html>

