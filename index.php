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
    <title>Simon's Anime website</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="title" content="AnimeDex - Watch High Quality Anime Online" />
    <meta name="description"
        content="AnimeDex - Watch High Quality Anime Online. You can watch anime online free in HD without Ads. Best place for free find and one-click anime." />
    <meta name="keywords"
        content="anime dex, animedex, watch anime online, free anime, anime stream, anime hd, english sub, kissanime, gogoanime, animeultima, 9anime, 123animes, animefreak, vidstreaming, gogo-stream, animekisa, zoro.to, gogoanime.run, animedex, animekisa" />
    <meta name="charset" content="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="revisit-after" content="1 days" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="Content-Language" content="en" />
    <meta property="og:title" content="AnimeDex - Watch High Quality Anime Online" />
    <meta property="og:description"
        content="AnimeDex - Watch High Quality Anime Online. You can watch anime online free in HD without Ads. Best place for free find and one-click anime." />
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
    <meta property="twitter:title" content="AnimeDex - Watch High Quality Anime Online" />
    <meta property="twitter:description"
        content="Trending page for anime on AnimeDex. You can watch anime online free in HD without Sign up. Best place for free find and one-click anime." />
    <meta property="twitter:url" content="" />
    <meta property="twitter:card" content="summary" />
    <meta name="apple-mobile-web-app-status-bar" content="#202125" />
    <link href="./css/index.css" rel="stylesheet" />
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

    <section>
        <div class="slideshow-container"></div>
    </section>

    <section>
        <div class="divox">
            <h2 id="latest">Most Popular</h2>
            <div id="latest2" class="popularg">MOST_POPULAR</div>
        </div>
    </section>

    <section>
        <div class="divox">
            <h2 id="latest">Recent Release</h2>
            <div id="latest2" class="recento"></div>
        </div>
    </section>
    <div id="load">
        <img src="./static/loading2.gif" alt="Loading..." />
    </div>
    <hr />
    <footer>
        <div>
            <a>Made By Simon</a>
        </div>
    </footer>
    <hr />

    <!-- Script to transform old animedex url to new one -->
    <script>
        const url = window.location.href;
        if (url.includes("/anime/")) {
            let e = url.split("/anime/")[0],
                i = url.split("/anime/")[1];
            window.location.href = e + "/anime.php?anime=" + i;
        } else if (url.includes("/episode/")) {
            let l = url.split("/episode/")[0],
                s = url.split("/episode/")[1],
                t = s.split("/")[0],
                n = s.split("/")[1];
            window.location.href = l + "/episode.php?anime=" + t + "&episode=" + n;
        }
    </script>

    <script src="./js/index.js"></script>
    <script async src="https://kit.fontawesome.com/45cb819601.js" crossorigin="anonymous"></script>
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