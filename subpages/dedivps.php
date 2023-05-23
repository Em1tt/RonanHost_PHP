<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/shared.css">
    <link rel="stylesheet" href="/css/dedivps.css">
    <title>RonanHost | Dedicated VPS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;0,900;1,400;1,600;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php
    include("../components/navbar.php");
    include("../components/popup.php");
    ?>
    <section class="hero">
        <div>
            <div>
                <h1>Dedicated VPS</h1>
                <p>We'll find you the best datacentre to handle your own dedicated VPS. We'll be your middle man, provide the required infrastructure and handle all the communication.</p>
                <span>
                    <a href="/contact" class="button primary">Contact us</a>
                    <a href="/client" class="button third">Client area</a>
                </span>
            </div>
        </div>
    </section>
    <section class="comparison">
        <img src="static/wave-haikei.svg" alt="Wave pattern" aria-hidden="true" width="1280">
        <div>
            <p class="highlight">COMPARE</p>
            <h2>our packages</h2>
            <div>
                <table>
                    <tr>
                        <th></th>
                        <th>Small</th>
                        <th class="highlight">Medium</th>
                        <th>Large</th>
                        <th>Extreme</th>
                        <th class="highlightBlue">Enterprise</th>
                    </tr>
                    <tr>
                        <td>Uptime</td>
                        <td>100.0%</td>
                        <td>100.0%</td>
                        <td>100.0%</td>
                        <td>100.0%</td>
                        <td>100.0%</td>
                    </tr>
                    <tr>
                        <td>RAM</td>
                        <td>32GB ECC</td>
                        <td>64GB ECC</td>
                        <td>128GB ECC</td>
                        <td>254GB ECC</td>
                        <td>Customized</td>
                    </tr>
                    <tr>
                        <td>Databases</td>
                        <td>8 Databases</td>
                        <td>16 Databases</td>
                        <td>32 Databases</td>
                        <td>64 Databases</td>
                        <td>Customized</td>
                    </tr>
                    <tr>
                        <td>Backups</td>
                        <td>4</td>
                        <td>8</td>
                        <td>12</td>
                        <td>16</td>
                        <td>Customized</td>
                    </tr>
                    <tr>
                        <td>Automatic Backups</td>
                        <td>YES</td>
                        <td>YES</td>
                        <td>YES</td>
                        <td>YES</td>
                        <td>YES</td>
                    </tr>
                    <tr>
                        <td>CPU</td>
                        <td>8vCores</td>
                        <td>16vCores</td>
                        <td>24vCores</td>
                        <td>32vCores</td>
                        <td>Dynamic vCores</td>
                    </tr>
                    <tr>
                        <td>Storage</td>
                        <td>256GB Sata SSD</td>
                        <td>512GB Sata SSD</td>
                        <td>1TB NVMe SSD</td>
                        <td>3TB NVMe SSD</td>
                        <td>Customized</td>
                    </tr>
                    <tr>
                        <td>OS</td>
                        <td>Arch, Ubuntu, Void, AlmaLinux, OpenBSD</td>
                        <td>Arch, Ubuntu, Void, AlmaLinux, OpenBSD</td>
                        <td>Arch, Ubuntu, Void, AlmaLinux, OpenBSD</td>
                        <td>Arch, Ubuntu, Void, AlmaLinux, OpenBSD</td>
                        <td>Customized</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><a href="#" class="button secondary disabled">Order</a></td>
                        <td><a href="#" class="button secondary disabled highlight">Order</a></td>
                        <td><a href="#" class="button secondary disabled">Order</a></td>
                        <td><a href="#" class="button secondary disabled">Order</a></td>
                        <td><a href="#" class="button secondary disabled highlightBlue">Contact</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
    <section class="advantages">
        <img src="static/layered-waves-haikei.svg" alt="Wave pattern" aria-hidden="true" class="" width="1280">
        <div>
            <img src="static/storage.webp" alt="Storage" width="640">
            <div>
                <p class="highlightBlue">SUPER FAST</p>
                <h2>Storage</h2>
                <p>Super fast storage on all our servers to ensure fast loading times!</p>
                <a class="button primaryBlue">
                    Learn More
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-external-link"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6"></path>
                        <path d="M11 13l9 -9"></path>
                        <path d="M15 4h5v5"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <?php
        require("../components/footer.php");
    ?>
</body>

</html>