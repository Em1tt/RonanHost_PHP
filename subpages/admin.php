<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/shared.css">
    <link rel="stylesheet" href="/css/client.css">
    <title>RonanHost | Admin area</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;0,900;1,400;1,600;1,900&display=swap"
        rel="stylesheet">
</head>

<body>

    <?php
    $showAuthNav = true;
    $hideBanner = true;
    session_start();
    if (!isset($_SESSION["created"])) {
        header("Location: /login");
        exit();
    }
    if (!isset($_SESSION["permission"]) || $_SESSION["permission"] == 0) {
        header("Location: /client");
        exit();
    }
    include("../components/navbar.php");
    ?>
    <section>
        <div>
            <h1>ADMIN AREA</h1>
            <p>USER ID: #<?php echo ($_SESSION["id"]) ?></p>
            <p>Welcome back, <b class="highlight"><?php echo ($_SESSION["username"]) ?></b>! How can we help you today?
            </p>
            <div>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-store"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M3 21l18 0"></path>
                        <path d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4">
                        </path>
                        <path d="M5 21l0 -10.15"></path>
                        <path d="M19 21l0 -10.15"></path>
                        <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4"></path>
                    </svg> Manage store
                </a>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-adjustments-alt"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M4 8h4v4h-4z"></path>
                        <path d="M6 4l0 4"></path>
                        <path d="M6 12l0 8"></path>
                        <path d="M10 14h4v4h-4z"></path>
                        <path d="M12 4l0 10"></path>
                        <path d="M12 18l0 2"></path>
                        <path d="M16 5h4v4h-4z"></path>
                        <path d="M18 4l0 1"></path>
                        <path d="M18 9l0 11"></path>
                    </svg> Manage system
                </a>
                <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-help-hexagon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M19.875 6.27c.7 .398 1.13 1.143 1.125 1.948v7.284c0 .809 -.443 1.555 -1.158 1.948l-6.75 4.27a2.269 2.269 0 0 1 -2.184 0l-6.75 -4.27a2.225 2.225 0 0 1 -1.158 -1.948v-7.285c0 -.809 .443 -1.554 1.158 -1.947l6.75 -3.98a2.33 2.33 0 0 1 2.25 0l6.75 3.98h-.033z"></path>
   <path d="M12 16v.01"></path>
   <path d="M12 13a2 2 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483"></path>
</svg> View support tickets
                </a>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-book-2" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z"></path>
                        <path d="M19 16h-12a2 2 0 0 0 -2 2"></path>
                        <path d="M9 8h6"></path>
                    </svg> Edit the documentation
                </a>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-reddit" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path
                            d="M12 8c2.648 0 5.028 .826 6.675 2.14a2.5 2.5 0 0 1 2.326 4.36c0 3.59 -4.03 6.5 -9 6.5c-4.875 0 -8.845 -2.8 -9 -6.294l-1 -.206a2.5 2.5 0 0 1 2.326 -4.36c1.646 -1.313 4.026 -2.14 6.674 -2.14z">
                        </path>
                        <path d="M12 8l1 -5l6 1"></path>
                        <path d="M19 4m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                        <circle cx="9" cy="13" r=".5" fill="currentColor"></circle>
                        <circle cx="15" cy="13" r=".5" fill="currentColor"></circle>
                        <path d="M10 17c.667 .333 1.333 .5 2 .5s1.333 -.167 2 -.5"></path>
                    </svg> View Reddit
                </a>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-section-sign" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M9.172 19a3 3 0 1 0 2.828 -4"></path>
                        <path d="M14.83 5a3 3 0 1 0 -2.83 4"></path>
                        <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                    </svg> Edit legal docs
                </a>
            </div>
        </div>
    </section>
    <section>
        <div>
            <?php
                //Náhodná hodnota pre lepší efekt
                $random = rand(0, 2);
                switch($random){
                    case 0: 
                        echo '<span class="health healthy">System Status: HEALTHY</span>';
                        break;
                    case 1:
                        echo '<span class="health alert">System Status: MINOR WARNINGS</span>';
                        break;
                    case 2:
                        echo '<span class="health danger">System Status: CRITICAL</span>';
                        break;
                }
            ?>
        </div>
    </section>
</body>

</html>