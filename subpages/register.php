<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/shared.css">
    <link rel="stylesheet" href="/css/login.css">
    <title>RonanHost | Register</title>
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
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $passwordConfirm = trim($_POST['passwordConfirm']);

        $stmt = $mysqli->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
        $stmt->bind_param("ss", $_POST['user'], $_POST['email']);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        $row = $result->fetch_assoc();
        //Pokračujeme iba keď uživateľ neexistuje
        if (!isset($row)) {
            //Pokračujeme iba keď sa hesla zhodujú
            if ($password == $passwordConfirm) {
                $password_hashed = password_hash($password, PASSWORD_DEFAULT);
                $created = time();

                $stmtreg = $mysqli->prepare("INSERT INTO users (username, email, password, created, permission) VALUES (?, ?, ?, ?, 0)");
                $stmtreg->bind_param("sssi", $user, $email, $password_hashed, $created);
                $stmtreg->execute();
                $resultreg = $stmtreg->get_result();
                $stmtreg->close();

                $stmtid = $mysqli->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
                $stmtid->bind_param("ss", $user, $email);
                $stmtid->execute();
                $resultid = $stmtid->get_result();
                $stmtid->close();
                $rowid = $resultid->fetch_assoc();
                $_SESSION['id'] = $rowid['id'];
                $_SESSION['username'] = $user;
                $_SESSION['email'] = $email;
                $_SESSION['created'] = $created;
                $_SESSION['permission'] = 0;
                header("Location: /client");
                exit();
                
            }
        }

    }
    include("../components/navbar.php");
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
            Secure registration
        </h2>
        <form method="post">
            <?php
            if (isset($row) && $row["username"] == $user) {
                echo ('<p>Username is taken.</p>');
            }
            if (isset($row) && $row["email"] == $email) {
                echo ('<p>Email is taken.</p>');
            }
            if (isset($password) && isset($passwordConfirm) && $password != $passwordConfirm) {
                echo ('<p>Passwords do not match.</p>');
            }
            ?>
            <input <?php if (isset($row) && $row["username"] == $user) {
                echo ('class="highlightInput"');
            }
            if (isset($_POST) && isset($user)) {
                echo ("value='{$user}'");
            } ?> required placeholder="Username"
                name="user" id="user" type="text">
            <input <?php if (isset($row) && $row["email"] == $email) {
                echo ('class="highlightInput"');
            }
            if (isset($_POST) && isset($email)) {
                echo ("value='{$email}'");
            } ?> required placeholder="Email"
                name="email" id="email" type="email">
            <input <?php if (isset($password) && isset($passwordConfirm) && $password != $passwordConfirm) {
                echo ('class="highlightInput"');
            } ?> required placeholder="Password" name="password" id="password"
                type="password">
            <input <?php if (isset($password) && isset($passwordConfirm) && $password != $passwordConfirm) {
                echo ('class="highlightInput"');
            } ?> required placeholder="Confirm password" name="passwordConfirm"
                id="passwordConfirm" type="password">
            <button name="submit" type="submit" class="button primary">Submit</button>
        </form>
        <p>Already have an account? <a href="/login">Login now!</a></p>
    </div>
</body>

</html>