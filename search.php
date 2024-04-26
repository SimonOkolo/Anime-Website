<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="./pfplogo.ico" />
    <title>Simon's Anime website</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
    <meta property="og:title" content="AnimeDex - Watch High Quality Anime Online">
    <meta property="og:description"
        content="AnimeDex - Watch High Quality Anime Online. You can watch anime online free in HD without Ads. Best place for free find and one-click anime.">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="AnimeDex">
    <meta property="og:url" content="https://animedex.pages.dev">
    <meta itemprop="image" content="https://cdn.jsdelivr.net/gh/TechShreyash/AnimeDex@main/screenshots/home.jpeg">
    <meta property="og:image" content="https://cdn.jsdelivr.net/gh/TechShreyash/AnimeDex@main/screenshots/home.jpeg">
    <meta property="og:image:secure_url"
        content="https://cdn.jsdelivr.net/gh/TechShreyash/AnimeDex@main/screenshots/home.jpeg">
    <meta property="og:image:width" content="650">
    <meta property="og:image:height" content="350">
    <meta property="twitter:title" content="AnimeDex - Watch High Quality Anime Online">
    <meta property="twitter:description"
        content="Trending page for anime on AnimeDex. You can watch anime online free in HD without Sign up. Best place for free find and one-click anime.">
    <meta property="twitter:url" content="">
    <meta property="twitter:card" content="summary">
    <meta name="apple-mobile-web-app-status-bar" content="#202125">
    <link href="./css/search.css" rel="stylesheet">
</head>

<body>
    <header id="head-div">
        <div id="title1">
            <a href="./index.php"><img width="150" height="40" src="./static/header.png" alt="AnimeDex"></a>
        </div>
        <div id="search-div">
            <form action="./search.html" method='GET'>
                <input type="text" name="query" id="query" placeholder="Search Anime..." required>
                <button name="search" type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </header>

    <!-- Error Page -->
    <div class=container id=error-page>
        <h1>Oops! Something Went Wrong</h1>
        <p>We're sorry, but it seems that something went wrong. Try refreshing the page or try again later.
        <p>If the issue persists, you can contact our <a
                href=https://github.com/TechShreyash/AnimeDexLite/issues/new>support team</a>.
        <p id=error-desc>
    </div>
    <!-- Error Page -->

    <section id="main-section">
        <div class="divox">
            <h2 id="latest">Search Results: {{ QUERY }}</h2>
            <div id="load">
                <img src="./static/loading2.gif" alt="Loading..." />
            </div>
            <div id="latest2" style="display: none;">

            </div>
        </div>
    </section>
    <hr>
    <footer>
        <div>
            <a href="https://github.com/TechShreyash" target="_blank">MADE WITH <i class="fa fa-heart pulse"></i>BY TECH
                SHREYASH</a> <a href="https://TechZBots.t.me" target="_blank">(@TechZBots)</a>
        </div>
    </footer>
    <hr>

    <script src="./js/search.js"></script>
    <script src="https://kit.fontawesome.com/45cb819601.js" crossorigin="anonymous"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BHQX4066ZV"></script>
    <script>window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'G-BHQX4066ZV');</script>
</body>

</html>