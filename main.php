<?php

    require_once "config.php";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if  ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }

    session_start(); 
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === false) {
        header("Location: login.php");
        exit();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["Logout"])) {
            handleLogout();
        } elseif (isset($_POST["Update"])) {
            handleUpdate();
        }
    }

    //Get a new cookie value because there is a change in permissions and logout.
    function handleLogout() {
        $_SESSION = array();
        session_regenerate_id();
        session_destroy();
        header("Location: login.php");
        exit();
    }
    
    function handleUpdate() {
        echo "Form 2 submitted!";
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Main Page</title>
    <meta name="description" content="." />
</head>
<body>
    <h1>
        Main Page
    </h1>
    <form method="post" action="">
        <button type="submit" name="Logout">Logout</button>
    </form>
    <?php
    $sql = "SELECT * FROM ratings";
    $result = mysqli_query($conn, $sql);
    ?>

    <table>
        <tr>
            <th>id</th>
            <th>username</th>
            <th>artist</th>
            <th>song</th>
            <th>rating</th>
        </tr>

        <?php
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['artist'] . "</td>";
        echo "<td>" . $row['song'] . "</td>";
        echo "<td>" . $row['rating'] . "</td>";
        if ($_SESSION["username"] === $row["username"]) {
        echo "<td>
                <form action='update_music.php' method='post'>
                    <input type='hidden' name='id' value='" . $row['id'] . "'>
                    <input type='submit' value='Update' name='Update'>
                </form>
                <form action='delete_music.php' method='post'>
                    <input type='hidden' name='id' value='" . $row['id'] . "'>
                    <input type='submit' value='Delete' name='Delete'>
                </form>
              </td>";
        }
        echo "</tr>";
    }
    ?>

    </table>
</body>
</html>