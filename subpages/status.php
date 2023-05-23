<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/shared.css">
    <link rel="stylesheet" href="/css/client.css">
    <title>RonanHost | Status</title>
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
    include("../components/navbar.php");
    ?>
    <section>
        <div>
            <h1>Status of all our systems</h1>
            <p class="marginDown">* data might not be accurate</p>
            <?php
                //Náhodná hodnota pre lepší efekt
                $random = rand(0, 2);
                switch($random){
                    case 0: 
                        echo '<span class="health healthy">Overall Status: HEALTHY</span>';
                        break;
                    case 1:
                        echo '<span class="health alert">Overall Status: MINOR WARNINGS</span>';
                        break;
                    case 2:
                        echo '<span class="health danger">Overall Status: CRITICAL</span>';
                        break;
                }
            ?>
            <?php
                //Náhodná hodnota pre lepší efekt
                $random = rand(0, 2);
                switch($random){
                    case 0: 
                        echo '<span class="health healthy">Ordering System: HEALTHY</span>';
                        break;
                    case 1:
                        echo '<span class="health alert">Ordering System: MINOR WARNINGS</span>';
                        break;
                    case 2:
                        echo '<span class="health danger">Ordering System: CRITICAL</span>';
                        break;
                }
            ?>
            <?php
                //Náhodná hodnota pre lepší efekt
                $random = rand(0, 2);
                switch($random){
                    case 0: 
                        echo '<span class="health healthy">Login System: HEALTHY</span>';
                        break;
                    case 1:
                        echo '<span class="health alert">Login System: MINOR WARNINGS</span>';
                        break;
                    case 2:
                        echo '<span class="health danger">Login System: CRITICAL</span>';
                        break;
                }
            ?>
            <?php
                //Náhodná hodnota pre lepší efekt
                $random = rand(0, 2);
                switch($random){
                    case 0: 
                        echo '<span class="health healthy">Website: HEALTHY</span>';
                        break;
                    case 1:
                        echo '<span class="health alert">Website: MINOR WARNINGS</span>';
                        break;
                    case 2:
                        echo '<span class="health danger">Website: CRITICAL</span>';
                        break;
                }
            ?>
            <?php
                //Náhodná hodnota pre lepší efekt
                $random = rand(0, 2);
                switch($random){
                    case 0: 
                        echo '<span class="health healthy">Backend: HEALTHY</span>';
                        break;
                    case 1:
                        echo '<span class="health alert">Backend: MINOR WARNINGS</span>';
                        break;
                    case 2:
                        echo '<span class="health danger">Backend: CRITICAL</span>';
                        break;
                }
            ?>
            <?php
                //Náhodná hodnota pre lepší efekt
                $random = rand(0, 2);
                switch($random){
                    case 0: 
                        echo '<span class="health healthy">Products: HEALTHY</span>';
                        break;
                    case 1:
                        echo '<span class="health alert">Products: MINOR WARNINGS</span>';
                        break;
                    case 2:
                        echo '<span class="health danger">Products: CRITICAL</span>';
                        break;
                }
            ?>
        </div>
    </section>
</body>

</html>