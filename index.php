<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/shared.css">
    <link rel="stylesheet" href="./css/index.css">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;0,900;1,400;1,600;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php
    include("./components/navbar.php");
    include("./components/popup.php");
    ?>
    <section class="hero">
        <div>
            <div>
                <h1>Super fast and secure<br>minecraft hosting</h1>
                <p>Discover exceptional performance and security with our optimized Minecraft hosting. Enjoy seamless
                    gaming and peace of mind. Upgrade your experience now!</p>
                <span>
                    <a href="/minecraft" class="button primary">View plans</a>
                    <a href="/client" class="button third">Client area</a>
                </span>
            </div>
        </div>
    </section>
    <section class="cta">
        <img src="static/wave-haikei.svg" alt="Wave pattern" aria-hidden="true" width="1280">
        <div>
            <p class="highlight">LIMITED OFFER</p>
            <h2>Free Trial</h2>
            <p>We offer free trials of our services to ensure you know what you are paying for.</p>
            <a href="/contact" class="button primary">
                Contact us
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
        <img src="static/layered-waves-haikei.svg" alt="Wave pattern" aria-hidden="true" class="" width="1280">
        <div>
            <img src="static/phone_panel.webp" alt="Phone panel" width="640">
            <div>
                <p class="highlightBlue">MODERN AND SECURE</p>
                <h2>Game Panel</h2>
                <p>Gain full control over your server with our dedicated game panel. Manage files, users and so much
                    more.</p>
                <a href="/client" class="button primaryBlue">
                    Visit Panel
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
    <section class="cards">
        <img src="static/stacked-waves2-haikei.svg" alt="Wave pattern" aria-hidden="true" class="" width="1280">
        <div>
            <div class="card">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heartbeat" width="24"
                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path
                        d="M19.5 13.572l-7.5 7.428l-2.896 -2.868m-6.117 -8.104a5 5 0 0 1 9.013 -3.022a5 5 0 1 1 7.5 6.572">
                    </path>
                    <path d="M3 13h2l2 3l2 -6l1 3h3"></path>
                </svg>
                <h3>~100% Uptime</h3>
                <p>Our servers have unbeatable uptime</p>
                <a href="/status">View Status</a>
            </div>
            <div class="card">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrows-split-2" width="24"
                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M21 17h-5.397a5 5 0 0 1 -4.096 -2.133l-.514 -.734a5 5 0 0 0 -4.096 -2.133h-3.897"></path>
                    <path d="M21 7h-5.395a5 5 0 0 0 -4.098 2.135l-.51 .73a5 5 0 0 1 -4.097 2.135h-3.9"></path>
                    <path d="M18 10l3 -3l-3 -3"></path>
                    <path d="M18 20l3 -3l-3 -3"></path>
                </svg>
                <h3>Server Splitting</h3>
                <p>Split your server into smaller servers instantly</p>
            </div>
            <div class="card">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alarm" width="24"
                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 13m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                    <path d="M12 10l0 3l2 0"></path>
                    <path d="M7 4l-2.75 2"></path>
                    <path d="M17 4l2.75 2"></path>
                </svg>
                <h3>Instant deploy</h3>
                <p>Your server will be up & ready right after the payment</p>
                <a href="/minecraft">View Plans</a>
            </div>
            <div class="card">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-discord" width="24"
                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M8 12a1 1 0 1 0 2 0a1 1 0 0 0 -2 0"></path>
                    <path d="M14 12a1 1 0 1 0 2 0a1 1 0 0 0 -2 0"></path>
                    <path
                        d="M8.5 17c0 1 -1.356 3 -1.832 3c-1.429 0 -2.698 -1.667 -3.333 -3c-.635 -1.667 -.476 -5.833 1.428 -11.5c1.388 -1.015 2.782 -1.34 4.237 -1.5l.975 1.923a11.913 11.913 0 0 1 4.053 0l.972 -1.923c1.5 .16 3.043 .485 4.5 1.5c2 5.667 2.167 9.833 1.5 11.5c-.667 1.333 -2 3 -3.5 3c-.5 0 -2 -2 -2 -3">
                    </path>
                    <path d="M7 16.5c3.5 1 6.5 1 10 0"></path>
                </svg>
                <h3>Discord Support</h3>
                <p>Need help? Our discord chat is open 24/7 for any questions.</p>
                <a href="#">Join Discord</a>
            </div>
        </div>
    </section>
    <section class="tableWrapper">
        <img src="static/stacked-waves2-haikei.svg" alt="Wave pattern" aria-hidden="true" class="" width="1280">
        <div>
            <p class="highlight">HOW WE COMPARE</p>
            <h2>against other hosts</h2>
            <div>
                <table>
                    <tr>
                        <th></th>
                        <th class="highlight">RonanHost</th>
                        <th>Shockbyte</th>
                        <th>Apex Hosting</th>
                        <th>ScalaCube</th>
                    </tr>
                    <tr>
                        <td>Uptime</td>
                        <td class="green">100.0%</td>
                        <td class="green">100.0%</td>
                        <td class="yellow">99.9810%</td>
                        <td class="red">Unknown</td>
                    </tr>
                    <tr>
                        <td>Custom Panel</td>
                        <td class="green"><svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-circle-check-filled" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z"
                                    stroke-width="0" fill="currentColor"></path>
                            </svg></td>
                        <td class="red"><svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-circle-x-filled" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-6.489 5.8a1 1 0 0 0 -1.218 1.567l1.292 1.293l-1.292 1.293l-.083 .094a1 1 0 0 0 1.497 1.32l1.293 -1.292l1.293 1.292l.094 .083a1 1 0 0 0 1.32 -1.497l-1.292 -1.293l1.292 -1.293l.083 -.094a1 1 0 0 0 -1.497 -1.32l-1.293 1.292l-1.293 -1.292l-.094 -.083z"
                                    stroke-width="0" fill="currentColor"></path>
                            </svg></td>
                        <td class="green"><svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-circle-check-filled" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z"
                                    stroke-width="0" fill="currentColor"></path>
                            </svg></td>
                        <td class="red"><svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-circle-x-filled" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-6.489 5.8a1 1 0 0 0 -1.218 1.567l1.292 1.293l-1.292 1.293l-.083 .094a1 1 0 0 0 1.497 1.32l1.293 -1.292l1.293 1.292l.094 .083a1 1 0 0 0 1.32 -1.497l-1.292 -1.293l1.292 -1.293l.083 -.094a1 1 0 0 0 -1.497 -1.32l-1.293 1.292l-1.293 -1.292l-.094 -.083z"
                                    stroke-width="0" fill="currentColor"></path>
                            </svg></td>
                    </tr>
                    <tr>
                        <td>Server Splitting</td>
                        <td class="green"><svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-circle-check-filled" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z"
                                    stroke-width="0" fill="currentColor"></path>
                            </svg></td>
                        <td class="red"><svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-circle-x-filled" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-6.489 5.8a1 1 0 0 0 -1.218 1.567l1.292 1.293l-1.292 1.293l-.083 .094a1 1 0 0 0 1.497 1.32l1.293 -1.292l1.293 1.292l.094 .083a1 1 0 0 0 1.32 -1.497l-1.292 -1.293l1.292 -1.293l.083 -.094a1 1 0 0 0 -1.497 -1.32l-1.293 1.292l-1.293 -1.292l-.094 -.083z"
                                    stroke-width="0" fill="currentColor"></path>
                            </svg></td>
                        <td class="red"><svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-circle-x-filled" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-6.489 5.8a1 1 0 0 0 -1.218 1.567l1.292 1.293l-1.292 1.293l-.083 .094a1 1 0 0 0 1.497 1.32l1.293 -1.292l1.293 1.292l.094 .083a1 1 0 0 0 1.32 -1.497l-1.292 -1.293l1.292 -1.293l.083 -.094a1 1 0 0 0 -1.497 -1.32l-1.293 1.292l-1.293 -1.292l-.094 -.083z"
                                    stroke-width="0" fill="currentColor"></path>
                            </svg></td>
                        <td class="red"><svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-circle-x-filled" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-6.489 5.8a1 1 0 0 0 -1.218 1.567l1.292 1.293l-1.292 1.293l-.083 .094a1 1 0 0 0 1.497 1.32l1.293 -1.292l1.293 1.292l.094 .083a1 1 0 0 0 1.32 -1.497l-1.292 -1.293l1.292 -1.293l.083 -.094a1 1 0 0 0 -1.497 -1.32l-1.293 1.292l-1.293 -1.292l-.094 -.083z"
                                    stroke-width="0" fill="currentColor"></path>
                            </svg></td>
                    </tr>
                    <tr>
                        <td>Support</td>
                        <td class="green">24/7</td>
                        <td class="green">24/7</td>
                        <td class="yellow">24/5</td>
                        <td class="green">24/7</td>
                    </tr>
                    <tr>
                        <td>Support Methods</td>
                        <td class="yellow">2</td>
                        <td class="green">4</td>
                        <td class="green">6</td>
                        <td class="green">3</td>
                    </tr>
                    <tr>
                        <td>Prices</td>
                        <td class="green">Acceptable</td>
                        <td class="red">Marked up!</td>
                        <td class="red">Marked up!</td>
                        <td class="red">Marked up!</td>
                    </tr>
                </table>
            </div>
            <sub>*Data might not be accurate</sub>
        </div>
    </section>
    <section class="grid">
        <a href="/minecraft">
            View plans
        </a>
        <a href="#">
            Join our Discord
        </a>
        <a href="/client">
            Visit the panel
        </a>
    </section>
    <?php
    require("./components/footer.php");
    ?>
</body>

</html>