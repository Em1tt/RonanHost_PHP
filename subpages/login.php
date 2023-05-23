<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/shared.css">
    <link rel="stylesheet" href="/css/login.css">
    <title>RonanHost | Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;0,900;1,400;1,600;1,900&display=swap"
        rel="stylesheet">
</head>

<body>

    <?php
    session_start();
    if (isset($_SESSION["created"])) {
        header("Location: /client");
        exit();
    }
    require("../components/database.php");
    if (isset($_POST['submit'])) {
        $user = trim($_POST['user']);
        $password = trim($_POST['password']);
        $stmt = $mysqli->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
        $stmt->bind_param("ss", $user, $user);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        $row = $result->fetch_assoc();
        if (isset($row)) {
            if (password_verify($password, $row['password'])) {
                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['created'] = $row['created'];
                $_SESSION['permission'] = $row['permission'];
                if($row['permission'] == 1){
                    header("Location: /admin");
                    exit();
                }else{
                    header("Location: /client");
                    exit();
                }
            }
            ;
        }
    }
    include("../components/navbar.php");
    include("../components/log.php");
    ?>

    <span class="overlayStatic"></span>
    <div>
        <h2>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock" width="24" height="24"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z"></path>
                <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0"></path>
                <path d="M8 11v-4a4 4 0 1 1 8 0v4"></path>
            </svg>
            Secure login
        </h2>
        <form method="post">
            <?php
            if (!isset($row) && isset($_POST) && isset($_POST['user'])) {
                echo ('<p>User not found.</p>');
            }
            if (isset($_POST) && isset($row) && !password_verify($password, $row['password'])) {
                echo ('<p>Wrong password.</p>');
            }
            ;
            ?>
            <input <?php if (!isset($row) && isset($_POST) && isset($_POST['user'])) {
                echo ('class="highlightInput"');
            }
            if (isset($_POST) && isset($_POST['user'])) {
                echo ("value='{$user}'");
            } ?> required
                placeholder="Username/Email" name="user" id="user" type="text">
            <input <?php if (isset($_POST) && isset($row) && !password_verify($password, $row['password'])) {
                echo ('class="highlightInput"');
            } ?> required placeholder="Password" name="password"
                id="password" type="password">
            <button name="submit" type="submit" class="button primary">Submit</button>
        </form>
        <p>Don't have an account yet? <a href="/register">Register now!</a></p>
    </div>
</body>

</html>