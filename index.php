<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ToDo</title>
</head>

<body>
    <header>
        <a href="#">ToDo</a>
        <ul>
            <li><a href=""></a>All tasks</li>
            <li><a href=""></a>Sing in</li>
            <li><a href=""></a>Login</li>
        </ul>
    </header>
    <main>
        <form action="./createTask.php" method="POST">
            <div>
                <label for="taskName">Task name</label>
                <input type="text" name="taskName" id="taskName">
            </div>
            <div>
                <label for="taskDesc">Task description</label>
                <input type="text" name="taskDesc" id="taskDesc">
            </div>
            <div>
                <input type="submit" name="btn" id="btn">
            </div>

        </form>

    </main>

    <script src="script.js"></script>



</body>

</html>