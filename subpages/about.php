<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/shared.css">
    <link rel="stylesheet" href="/css/about.css">
    <title>RonanHost | About</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;0,900;1,400;1,600;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php
    include("../components/navbar.php");
    ?>
    <section class="hero">
        <div>
            <div>
                <h1>About RonanHost</h1>
                <p>Whether you want to learn more about us, or you stumbled upon this page randomly, we're glad you're here!</p>
            </div>
        </div>
    </section>
    <section class="cta">
        <img src="/static/wave-haikei.svg" alt="Wave pattern" aria-hidden="true" width="1280">
        <div>
            <p class="highlight">OUR MISSION</p>
            <h2>Revolutionize the hosting industry.</h2>
            <p>We want to create a business people can trust - That couldn't happen without our dedicated team <3</p>
            <a href="/contact" class="button primary">
                Our team
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-external-link" width="24"
                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6"></path>
                    <path d="M11 13l9 -9"></path>
                    <path d="M15 4h5v5"></path>
                </svg></a>
        </div>
    </section>
    <section class="advantages">
        <img src="/static/layered-waves-haikei.svg" alt="Wave pattern" aria-hidden="true" class="" width="1280">
        <div>
            <img src="/static/skin.png" alt="Phone panel" width="640">
            <div>
                <p class="highlightBlue">FOR GAMERS</p>
                <h2>By gamers.</h2>
                <p>We know first-hand what a server needs to run smooth as butter. Our developers constantly work hard to crunch numbers to achieve a perfect balance of performance/cost.</p>
            </div>
        </div>
    </section>
    <?php
    require("../components/footer.php");
    ?>
</body>

</html>