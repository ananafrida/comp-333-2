<?php
    session_start(); 
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === false) {
        header("Location: login.php");
        exit();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["Logout"])) {
            handleLogout();
        } elseif (isset($_POST["submitForm2"])) {
            // Form 2 was submitted
            handleForm2();
        }
    }

    //Get a new cookie value because there is a change in permissions and logout.
    function handleLogout() {
        $_SESSION = array();
        session_destroy();
        header("Location: login.php");
        exit();
    }
    
    function handleForm2() {
        // Logic for handling Form 2
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

</body>
</html>