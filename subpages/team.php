<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/shared.css">
    <link rel="stylesheet" href="/css/team.css">
    <title>RonanHost | Team</title>
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
                <h1>Our Team</h1>
                <p>The people without whom we wouldn't be able to grow like we did.</p>
            </div>
        </div>
    </section>
    <section class="cta">
        <img src="/static/wave-haikei.svg" alt="Wave pattern" aria-hidden="true" width="1280">
        <div>
            <p class="highlightBlue">– Helen Keller</p>
            <h2><q>Alone we can do so little; together we can do so much.</q></h2>
        </div>
    </section>
    <section class="advantages">
        <img src="/static/layered-waves-haikei.svg" alt="Wave pattern" aria-hidden="true" class="" width="1280">
        <div>
            <img src="/static/Ronan.webp" alt="Ronan" width="640">
            <div>
                <p class="highlightBlue">CEO</p>
                <h2>Ronan</h2>
                <p>The head of operations @ RonanHost. Also a cool guy!</p>
            </div>
        </div>
        <div>
            <img src="/static/Isaac.webp" alt="Isaac" width="640">
            <div>
                <p class="highlightBlue">Admin</p>
                <h2>ISAACBEST</h2>
                <p>An enforcer of rules @ RonanHost. Thank him for clear chats.</p>
            </div>
        </div>
        <div>
            <img src="/static/Stormer.webp" alt="Stormer" width="640">
            <div>
                <p class="highlightBlue">Developer</p>
                <h2>Stormer</h2>
                <p>Java developer who creates Minecraft plugins for RonanServices.</p>
            </div>
        </div>
        <div>
            <img src="/static/E1Shadow.png" alt="Em1t" width="640">
            <div>
                <p class="highlightBlue">Fullstack Developer | UI/UX consultant</p>
                <h2>Richard <q>Em1t</q> Marcinčák</h2>
                <p>A versatile person who enforces best UI/UX practice on our websites.</p>
            </div>
        </div>
    </section>
    <?php
    require("../components/footer.php");
    ?>
</body>

</html>