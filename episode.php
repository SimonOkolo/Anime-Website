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
    <title>{{ title }} - Simon's Anime website</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="title" content="Watch {{ title }} - AnimeDex" />
    <meta name="description"
        content="Watch {{ title }} - AnimeDex free anime online and it's latest episodes on AnimeDex. We provide free anime online experience without ads, signing up or downloading." />
    <meta name="keywords"
        content="{{ title }}, anime dex, hindi dub, hindi sub, english dub, watch anime online, free anime, anime stream, anime hd, english sub, kissanime, gogoanime, animeultima, 9anime, 123animes, animefreak, vidstreaming, gogo-stream, animekisa, zoro.to, gogoanime.run, animefrenzy, animekisa" />
    <meta name="charset" content="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="revisit-after" content="1 days" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="Content-Language" content="en" />
    <meta property="og:title" content="Watch {{ title }} - AnimeDex" />
    <meta property="og:description"
        content="Watch {{ title }} - AnimeDex free anime online and it's latest episodes on AnimeDex. We provide free anime online experience without ads, signing up or downloading." />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="AnimeDex" />
    <meta property="og:url" content="https://animedex.pages.dev" />
    <meta itemprop="image" content="https://cdn.jsdelivr.net/gh/TechShreyash/AnimeDex@main/screenshots/home.jpeg" />
    <meta property="og:image" content="https://cdn.jsdelivr.net/gh/TechShreyash/AnimeDex@main/screenshots/home.jpeg" />
    <meta property="og:image:secure_url"
        content="https://cdn.jsdelivr.net/gh/TechShreyash/AnimeDex@main/screenshots/home.jpeg" />
    <meta property="og:image:width" content="650" />
    <meta property="og:image:height" content="350" />
    <meta property="twitter:title" content="Watch {{ title }} - AnimeDex" />
    <meta property="twitter:description"
        content="Watch {{ title }} - AnimeDex free anime online and it's latest episodes on AnimeDex. We provide free anime online experience without ads, signing up or downloading." />
    <meta property="twitter:url" content="/anime/" />
    <meta property="twitter:card" content="summary" />
    <meta name="apple-mobile-web-app-status-bar" content="#202125" />
    <meta name="theme-color" content="#202125" />
    <link href="./css/episode.css" rel="stylesheet" />
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

    <!-- Error Page -->
    <div class=container id=error-page>
        <h6>Oops! Something Went Wrong</h6>
        <p>We're sorry, but it seems that something went wrong. Try refreshing the page or try again later.
        <p>If the issue persists, you can contact our <a
                href=https://github.com/TechShreyash/AnimeDexLite/issues/new>support team</a>.
        <p id=error-desc>
    </div>
    <!-- Error Page -->

    <div id="main-section">

        <section id="vid-sec">
            <div id="vid-div">
                <div id="video">
                    <iframe id="AnimeDexFrame" src="" style="border: 0px #ffffff none" scrolling="no" frameborder="0"
                        marginheight="0px" marginwidth="0px" allowfullscreen></iframe>
                </div>
            </div>

            <div id="server_main">
                <div class="status">
                    <div class="scontent">
                        You are watching <b id="ep-name">
                            <h1>{{ title }}</h1>
                        </b>If
                        current server doesn't work please try other servers
                        beside.
                    </div>
                </div>

                <div class="server">
                    <div class="stitle">
                        <i class="fa fa-microphone"></i>

                        Servers:
                    </div>
                    <div id="serversbtn" class="slist"></div>
                </div>

                <a id="showdl" onclick="showDownload()"><i class="fa fa-download"></i>Download</a>
                <div id="dldiv" class="dldiv">
                    <h4 id="download">Download Links:</h4>

                    <div class="server">
                        <div class="stitle">
                            <i class="fa fa-closed-captioning"></i>Quality:
                        </div>
                        <div id="dllinks" class="slist">
                            <div id="load">
                                <img src="./static/loading2.gif" alt="Loading..." />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="watch">
            <div class="selector link-data">PROSLO</div>
            <div class="divo">
                <h2>List Of Episodes:</h2>
                <div id="ephtmldiv" class="divo2">EPISOS</div>
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

    <script src="./js/episode.js"></script>
    <script src="https://kit.fontawesome.com/45cb819601.js" crossorigin="anonymous"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BHQX4066ZV"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());
        gtag("config", "G-BHQX4066ZV");
    </script>
</body>

</html>