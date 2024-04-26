<?php
# Initialize the session
session_start();

# If user is not logged in then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
  echo "<script>" . "window.location.href='./login.php';" . "</script>";
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="./pfplogo.ico" />
    <title>TITLE - Simon's Anime website</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="title" content="Watch TITLE - AnimeDex" />
    <meta name="description"
        content="Watch TITLE free anime online and it's latest episodes on AnimeDex. We provide free anime online experience without ads, signing up or downloading." />
    <meta name="keywords"
        content="TITLE,animedex, anime dex, hindi dub, hindi sub, english dub, watch anime online, free anime, anime stream, anime hd, english sub, kissanime, gogoanime, animeultima, 9anime, 123animes, animefreak, vidstreaming, gogo-stream, animekisa, zoro.to, gogoanime.run, animefrenzy, animekisa" />
    <meta name="charset" content="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="revisit-after" content="1 days" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="Content-Language" content="en" />
    <meta property="og:title" content="Watch TITLE - AnimeDex" />
    <meta property="og:description"
        content="Watch TITLE free anime online and it's latest episodes on AnimeDex. We provide free anime online experience without ads, signing up or downloading." />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="AnimeDex" />
    <meta property="og:url" content="URL" />
    <meta itemprop="image" content="https://cdn.jsdelivr.net/gh/TechShreyash/AnimeDex@main/screenshots/home.jpeg" />
    <meta property="og:image" content="https://cdn.jsdelivr.net/gh/TechShreyash/AnimeDex@main/screenshots/home.jpeg" />
    <meta property="og:image:secure_url"
        content="https://cdn.jsdelivr.net/gh/TechShreyash/AnimeDex@main/screenshots/home.jpeg" />
    <meta property="og:image:width" content="650" />
    <meta property="og:image:height" content="350" />
    <meta property="twitter:title" content="Watch TITLE - AnimeDex" />
    <meta property="twitter:description"
        content="Watch TITLE free anime online and it's latest episodes on AnimeDex. We provide free anime online experience without ads, signing up or downloading." />
    <meta property="twitter:url" content="URL" />
    <meta property="twitter:card" content="summary" />
    <meta name="apple-mobile-web-app-status-bar" content="#202125" />
    <meta name="theme-color" content="#202125" />
    <link href="./css/anime.css" rel="stylesheet" />
    <style>
        #cover {
            background-image: url("IMG");
        }
    </style>
</head>

<body>
    <header id="head-div">
        <div id="title1">
            <a href="./index.php"><img width="80" height="80" src="./static/header.png" alt="s"></a>
        </div>
        <div id="search-div">
            <form action="./search.php" method="GET">
                <input type="text" class="searchbar" name="query" id="query" placeholder="Search Anime..." required />
                <button name="search" type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div id="profle">
            <img class="profile_image"></image>
            <a href="logout.php" class="logout_btn">Log Out</a>
        </div>
    </header>
    <div id="load">
        <img src="./static/loading2.gif" alt="Loading..." />
    </div>

    <!-- Error Page -->
    <div class=container id=error-page>
        <h6>Oops! Something Went Wrong</h6>
        <p>We're sorry, but it seems that something went wrong. Try refreshing the page or try again later.
        <p>If the issue persists, you can contact our <a
                href=https://github.com/TechShreyash/AnimeDexLite/issues/new>support team</a>.
        <p id=error-desc>
    </div>
    <!-- Error Page -->

    <div id="main-content" style="display: none">
        <section>
            <div id="background">
                <div id="cover"></div>
            </div>

            <div class="anime row">
                <div class="poster col-3">
                    <img src="IMG" />
                </div>
                <div class="details col-6">
                    <h1 class="anime-title">TITLE</h1>
                    <div class="mid" style="margin: 20px 0px">
                        <span class="cbox">HD</span>
                        <span class="cbox">LANG</span>
                        <span class="dot"></span>
                        <span class="year">TYPE</span>
                    </div>
                    <div id="watchh" class="mid">
                        <a href="#watch" id="watch-btn" class="watch-btn">
                            <i class="fa fa-play"></i> Watch Now
                        </a>
                    </div>
                    <div id="overview3" class="synopsis">SYNOPSIS</div>
                </div>
                <div id="info" class="col-3">
                    <div class="info-items overview">
                        <span id="overview2" class="item-head">Overview:</span>
                        <span id="overview1" class="item-des">SYNOPSIS</span>
                    </div>

                    <div class="info-items">
                        <span class="item-head">Other Names:</span>
                        <span class="item-des">OTHER</span>
                    </div>
                    <div class="info-items">
                        <span class="item-head">Episodes:</span>
                        <span class="item-des">TOTAL</span>
                    </div>
                    <div class="info-items">
                        <span class="item-head">Release Year:</span>
                        <span class="item-des">YEAR</span>
                    </div>
                    <div class="info-items">
                        <span class="item-head">Type:</span>
                        <span class="item-des">TYPE</span>
                    </div>
                    <div class="info-items">
                        <span class="item-head">Status:</span>
                        <span class="item-des">STATUS</span>
                    </div>

                    <div class="info-items genre">
                        <span class="item-head">Genres:</span> GENERES
                    </div>
                </div>
            </div>
        </section>

        <section id="watch">
            <div class="divo">
                <h2>List Of Episodes:</h2>
                <!-- Episode Slider Start -->
                <div id="slider-main" class="slider-main" style="display: none;">
                    <div id="ep-slider" class="ep-slider"></div>
                </div>
                <!-- Episode Slider End -->

                <!-- Episode List Start -->
                <div id="ephtmldiv" class="divo2"></div>
                <!-- Episode List End -->
            </div>
        </section>

        <section id="similar-div">
            <div class="divox">
                <h2 id="latest">Similar Animes</h2>
                <div id="load" class="sload" style="display: none;">
                    <img src="./static/loading2.gif" alt="Loading..." />
                </div>
                <div id="latest2"></div>
            </div>
        </section>
    </div>
    <hr />
    <footer>
        <div>
            <a>Made By Simon</a>
        </div>
    </footer>
    <hr />


    <script src="./js/anime.js"></script>
    <script src="https://kit.fontawesome.com/45cb819601.js" crossorigin="anonymous"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BHQX4066ZV"></script>
    <script>window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'G-BHQX4066ZV');</script>
</body>

</html>