<!--NAVBAR COMPONENT-->
<?php
$banners = [];
if (!isset($hideBanner)) {
    $file = "https://api.ronanhost.com/banners";
    $data = @file_get_contents($file);
    if ($data !== FALSE) {
        $banners = json_decode($data); // decode the JSON feed
    }
}
?>
<link rel="stylesheet" href="/css/navbar.css">
<header>
    <div class="banner">
        <?php
        for ($x = 0; $x < count($banners); $x++) {
            echo "<a href={$banners[$x]->click_url}>{$banners[$x]->text}</a>";
        }
        ?>
    </div>
    <div id="sidebar" class="sidebar">
        <span>
            <a href="/" class="logo">
                <img src="/static/logo.webp" alt="Logo" width="50">
                <p>RonanHost</p>
            </a>
            <button id="closeSidebar" class="button secondary">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="24" height="24"
                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M18 6l-12 12"></path>
                    <path d="M6 6l12 12"></path>
                </svg>
            </button>
        </span>
        <div>
            <button type="button" class="collapsible">Products</button>
            <div class="collapsibleContent">
                <p>Game Servers</p>
                <div>
                    <a href="/minecraft"><svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-sword" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M20 4v5l-9 7l-4 4l-3 -3l4 -4l7 -9z"></path>
                            <path d="M6.5 11.5l6 6"></path>
                        </svg> Minecraft</a>
                    <a href="/7dtd"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-grave"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M5 21v-2a3 3 0 0 1 3 -3h8a3 3 0 0 1 3 3v2h-14z"></path>
                            <path d="M10 16v-5h-4v-4h4v-4h4v4h4v4h-4v5"></path>
                        </svg> 7 Days to Die</a>
                    <a href="/valheim"><svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-sword" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M20 4v5l-9 7l-4 4l-3 -3l4 -4l7 -9z"></path>
                            <path d="M6.5 11.5l6 6"></path>
                        </svg> Valheim</a>
                </div>
                <p>Other Servers</p>
                <div>
                    <a href="/vps"><svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-cloud-computing" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path
                                d="M6.657 16c-2.572 0 -4.657 -2.007 -4.657 -4.483c0 -2.475 2.085 -4.482 4.657 -4.482c.393 -1.762 1.794 -3.2 3.675 -3.773c1.88 -.572 3.956 -.193 5.444 1c1.488 1.19 2.162 3.007 1.77 4.769h.99c1.913 0 3.464 1.56 3.464 3.486c0 1.927 -1.551 3.487 -3.465 3.487h-11.878">
                            </path>
                            <path d="M12 16v5"></path>
                            <path d="M16 16v4a1 1 0 0 0 1 1h4"></path>
                            <path d="M8 16v4a1 1 0 0 1 -1 1h-4"></path>
                        </svg>Shared VPS</a>
                    <a href="/dedivps"><svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-server-2" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3 4m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v2a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z">
                            </path>
                            <path d="M3 12m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v2a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z">
                            </path>
                            <path d="M7 8l0 .01"></path>
                            <path d="M7 16l0 .01"></path>
                            <path d="M11 8h6"></path>
                            <path d="M11 16h6"></path>
                        </svg>Dedicated VPS</a>
                </div>
            </div>
            <button type="button" class="collapsible">Resources</button>
            <div class="collapsibleContent">
                <p>Company</p>
                <div>
                    <a href="/about"><svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-info-circle" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                            <path d="M12 9h.01"></path>
                            <path d="M11 12h1v4h1"></path>
                        </svg> About us</a>
                    <a href="/contact"><svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-address-book" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M20 6v12a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2z">
                            </path>
                            <path d="M10 16h6"></path>
                            <path d="M13 11m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                            <path d="M4 8h3"></path>
                            <path d="M4 12h3"></path>
                            <path d="M4 16h3"></path>
                        </svg>Contact</a>
                    <a href="/team"><svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-users-group" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                            <path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1"></path>
                            <path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                            <path d="M17 10h2a2 2 0 0 1 2 2v1"></path>
                            <path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                            <path d="M3 13v-1a2 2 0 0 1 2 -2h2"></path>
                        </svg>Team</a>
                    <a href="/status"><svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-chart-bar" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3 12m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                            </path>
                            <path d="M9 8m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                            </path>
                            <path d="M15 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                            </path>
                            <path d="M4 20l14 0"></path>
                        </svg>Status</a>
                </div>
                <p>Legal</p>
                <div>
                    <a href="/terms"><svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-exclamation-circle" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                            <path d="M12 9v4"></path>
                            <path d="M12 16v.01"></path>
                        </svg>Terms & Conditions</a>
                    <a href="/privacy"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-spy"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3 11h18"></path>
                            <path d="M5 11v-4a3 3 0 0 1 3 -3h8a3 3 0 0 1 3 3v4"></path>
                            <path d="M7 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                            <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                            <path d="M10 17h4"></path>
                        </svg>Privacy Policy</a>
                </div>
            </div>
            <a href="/client" class="button primary">Client Area</a>
        </div>
    </div>
    <div id="overlay" class="overlay"></div>
    <div class="content">
        <div>
            <div>
                <a href="/" class="logo">
                    <img src="/static/logo.webp" alt="Logo" width="50">
                    <p>RonanHost</p>
                </a>
                <div class="dropdownWrapper">
                    <a>Products</a>
                    <div class="dropdown">
                        <span>
                            <p>Game Servers</p>
                            <a href="/minecraft"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-sword" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M20 4v5l-9 7l-4 4l-3 -3l4 -4l7 -9z"></path>
                                    <path d="M6.5 11.5l6 6"></path>
                                </svg> Minecraft</a>
                            <a href="/7dtd"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-grave" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5 21v-2a3 3 0 0 1 3 -3h8a3 3 0 0 1 3 3v2h-14z"></path>
                                    <path d="M10 16v-5h-4v-4h4v-4h4v4h4v4h-4v5"></path>
                                </svg> 7 Days to die</a>
                            <a href="/valheim"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-sword" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M20 4v5l-9 7l-4 4l-3 -3l4 -4l7 -9z"></path>
                                    <path d="M6.5 11.5l6 6"></path>
                                </svg>Valheim</a>
                        </span>
                        <span>
                            <p>Other Servers</p>
                            <a href="/vps"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-cloud-computing" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M6.657 16c-2.572 0 -4.657 -2.007 -4.657 -4.483c0 -2.475 2.085 -4.482 4.657 -4.482c.393 -1.762 1.794 -3.2 3.675 -3.773c1.88 -.572 3.956 -.193 5.444 1c1.488 1.19 2.162 3.007 1.77 4.769h.99c1.913 0 3.464 1.56 3.464 3.486c0 1.927 -1.551 3.487 -3.465 3.487h-11.878">
                                    </path>
                                    <path d="M12 16v5"></path>
                                    <path d="M16 16v4a1 1 0 0 0 1 1h4"></path>
                                    <path d="M8 16v4a1 1 0 0 1 -1 1h-4"></path>
                                </svg>Shared VPS</a>
                            <a href="/dedivps"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-server-2" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M3 4m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v2a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z">
                                    </path>
                                    <path
                                        d="M3 12m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v2a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z">
                                    </path>
                                    <path d="M7 8l0 .01"></path>
                                    <path d="M7 16l0 .01"></path>
                                    <path d="M11 8h6"></path>
                                    <path d="M11 16h6"></path>
                                </svg>Dedicated VPS</a>
                        </span>
                    </div>
                </div>
                <div class="dropdownWrapper">
                    <a>Resources</a>
                    <div class="dropdown">
                        <span>
                            <p>Company</p>
                            <a href="/about"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-info-circle" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                    <path d="M12 9h.01"></path>
                                    <path d="M11 12h1v4h1"></path>
                                </svg>About us</a>
                            <a href="/contact"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-address-book" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M20 6v12a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2z">
                                    </path>
                                    <path d="M10 16h6"></path>
                                    <path d="M13 11m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                    <path d="M4 8h3"></path>
                                    <path d="M4 12h3"></path>
                                    <path d="M4 16h3"></path>
                                </svg>Contact</a>
                            <a href="/team"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-users-group" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                    <path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1"></path>
                                    <path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                    <path d="M17 10h2a2 2 0 0 1 2 2v1"></path>
                                    <path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                    <path d="M3 13v-1a2 2 0 0 1 2 -2h2"></path>
                                </svg>Team</a>
                            <a href="/status"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-chart-bar" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M3 12m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                    </path>
                                    <path
                                        d="M9 8m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                    </path>
                                    <path
                                        d="M15 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                    </path>
                                    <path d="M4 20l14 0"></path>
                                </svg>Status</a>
                        </span>
                        <span>
                            <p>Legal</p>
                            <a href="/terms"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-exclamation-circle" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                    <path d="M12 9v4"></path>
                                    <path d="M12 16v.01"></path>
                                </svg>Terms & Conditions</a>
                            <a href="/privacy"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-spy" width="24" height="24" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M3 11h18"></path>
                                    <path d="M5 11v-4a3 3 0 0 1 3 -3h8a3 3 0 0 1 3 3v4"></path>
                                    <path d="M7 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                    <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                    <path d="M10 17h4"></path>
                                </svg>Privacy Policy</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="buttons">
                <button id="openSidebar" class="button secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M4 6l16 0"></path>
                        <path d="M4 12l16 0"></path>
                        <path d="M4 18l16 0"></path>
                    </svg>
                </button>
                <a href="/client" class="button primary">Client Area</a>
            </div>
        </div>
    </div>
    <?php
    if (isset($showAuthNav)) {
        if (isset($_SESSION["username"])) {
            echo ("
            <div class='auth'>
                <div>
                    <div class='dropdownWrapper'>
                    <button>
                    <svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-user-circle' width='24' height='24' viewBox='0 0 24 24' stroke-width='2' stroke='currentColor' fill='none' stroke-linecap='round' stroke-linejoin='round'>
                        <path stroke='none' d='M0 0h24v24H0z' fill='none'></path>
                        <path d='M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0'></path>
                        <path d='M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0'></path>
                        <path d='M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855'></path>
                    </svg> 
                    {$_SESSION["username"]}
                    </button>
                    <div class='dropdown2'>
                        <a class='button secondary disabled'>Edit Account</a>
                        <a href='/logout' class='button danger'>Sign Out</a>
                    </div>
                </div>
            </div>
            ");
        } else {
            echo ("
            <div class='auth'>
                <div>
                    <div class='dropdownWrapper'>
                    <a href='/login'>
                    <svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-user-circle' width='24' height='24' viewBox='0 0 24 24' stroke-width='2' stroke='currentColor' fill='none' stroke-linecap='round' stroke-linejoin='round'>
                        <path stroke='none' d='M0 0h24v24H0z' fill='none'></path>
                        <path d='M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0'></path>
                        <path d='M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0'></path>
                        <path d='M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855'></path>
                    </svg> 
                    Login
                    </a>
                </div>
            </div>
            ");
        }
    }
    ?>
</header>

<script lang="js">
    const nav = document.querySelector("header");
    let lastScroll = 0;
    const banner = document.querySelector(".banner > *");
    console.log(banner);
    if (banner) {
        console.log(banner);
        window.onscroll = function () {
            if (lastScroll > window.scrollY) {
                nav.classList.add("hideBanner");
            } else {
                nav.classList.remove("hideBanner");
            }

            lastScroll = window.scrollY;
        };
    } else {
        nav.classList.add("hideBanner");
    };
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.maxHeight) {
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
            }
        });
    }
    const sidebar = document.getElementById("sidebar");
    const overlay = document.getElementById("overlay");
    const closeSidebar = document.getElementById("closeSidebar");
    const openSidebar = document.getElementById("openSidebar");

    openSidebar.addEventListener("click", () => {
        sidebar.classList.add("open");
        overlay.classList.add("visible");
    });

    overlay.addEventListener("click", closeSidebarFun);
    closeSidebar.addEventListener("click", closeSidebarFun);

    function closeSidebarFun() {
        sidebar.classList.remove("open");
        overlay.classList.remove("visible");
    }

</script>