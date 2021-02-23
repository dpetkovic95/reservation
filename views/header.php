<?php include_once 'connections/server.php'; ?>
<head>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<!-- header -->
<header id="site-header" class="w3l-header fixed-top">

    <!--/nav-->
    <nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
        <div class="container">
            <h1><a class="navbar-brand" href="index.php"><span class="fa fa-play icon-log"
                                                                aria-hidden="true"></span>
                    MyCinema </a></h1>
            <!-- if logo is image enable this
                    <a class="navbar-brand" hreindex.phphtml">
                        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                    </a> -->
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <span class="fa icon-expand fa-bars"></span>
                <span class="fa icon-close fa-times"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li id="index" class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li id="about" class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="movies.php">Movies</a>
                    </li>
                    <?php 
                        if(!array_key_exists('username', $_SESSION) || empty($_SESSION['username'])){
                    ?>
                    <div class="collapse navbar-collapse ">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registration.php">Register</a>
                    </li> 
                    </div> 
                    <?php } else { ?> 
                    <li class="nav-item">
                    <div class="dropdown">
                    <i class="small material-icons" style="font-size: 30px;">account_circle</i>
                    <div class="dropdown-content">
                            <a href="user_settings.php">Settings</a>
                            <a href="connections/logout.php">Sign out</a>
                        </div>
                    </div>
                    </li>
                    <?php  } ?>
                   
                </ul>

                <!--/search-right-->
                <!--/search-right-->
                <div class="search-right">
                    <a href="#search" class="btn search-hny mr-lg-3 mt-lg-0 mt-4" title="search">Search <span
                                class="fa fa-search ml-3" aria-hidden="true"></span></a>
                    <!-- search popup -->
                    <div id="search" class="pop-overlay">
                        <div class="popup">
                            <form action="search-result.php" method="post" class="search-box">
                                <input class="search-box text" type="text" placeholder="Search for movie" name="query"
                                       required="required" autofocus="">
                                <button type="submit" value="Search" class="btn"><span class="fa fa-search"
                                                                        aria-hidden="true"></span></button>
                            </form>
                            <div class="browse-items">
                                <h3 class="hny-title two mt-md-5 mt-4">Browse all:</h3>
                                <ul class="search-items">
                                    <li><a href="movies.html">Action</a></li>
                                    <li><a href="movies.html">Drama</a></li>
                                    <li><a href="movies.html">Family</a></li>
                                    <li><a href="movies.html">Commedy</a></li>
                                    <li><a href="movies.html">Thriller</a></li>
                                    <li><a href="movies.html">Romantic</a></li>
                                    <li><a href="movies.html">Tv-Series</a></li>
                                    <li><a href="movies.html">Horror</a></li>
                                </ul>
                            </div>
                        </div>
                        <a class="close" href="#close">×</a>
                    </div>
                    <!-- /search popup -->
                    <!--/search-right-->
                </div>


            </div>
            <!-- toggle switch for light and dark theme -->
            <div class="mobile-position">
                <nav class="navigation">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <div class="mode-container">
                                <i class="gg-sun"></i>
                                <i class="gg-moon"></i>
                            </div>
                        </label>
                    </div>
                </nav>
            </div>
            <!-- //toggle switch for light and dark theme -->
        </div>
    </nav>
    <!--//nav-->
</header>
<!-- //header -->

<script>
    var elements = document.getElementsByClassName('nav-item');
    //var page = document.getElementById('page').value;
    //console.log(page);
    for (var i = 0; i < elements.length; i++) {
        elements[i].classList.remove('active');
    }
    //document.getElementById(page).classList.add('active');
</script>