<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>MetaGamer - Gaming Landing page</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="src/assets/css/plugins/slick.css" type="text/css">
    <link rel="stylesheet" href="src/assets/css/plugins/slick-theme.css" type="text/css">
    <link rel="stylesheet" href="src/assets/css/plugins/touch-sideswipe.css" type="text/css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800&display=swap"
        type="text/css">
    <link rel="stylesheet" href="src/assets/css/style.css" type="text/css">
</head>

<body>

    <!--========== Loading Overlay ==========-->
    <div class="loading-overlay">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>


    <!--========== Hero Layout ==========-->
    <div class="layout">

        <!--========== Video Content ==========-->
        <div class="video-layout">
            <div class="video-gradient"></div>
            <video loop autoPlay muted class="video-bg" src="./src/assets/video/video-game.mp4"></video>
            <div class="video-container container">
                <div class="video-content">
                    <h2 class="video-title" data-aos="fade-up" data-aos-duration="2000">Welcome to the MetaGamer
                        Multiverse</h2>
                    <p class="video-desc" data-aos="fade-up" data-aos-duration="2200">
                        We are a community of millions of Metagames and continue to open doors
                        to new worlds every day. If you're up for a challenge,
                        join us and become #1 in the world!
                    </p>
                    <a href="" class="video-link link-primary" data-aos="fade-up" data-aos-duration="2400">Join
                        Challenges</a>
                </div>
                <div class="video-img">
                    <div class="video-img_item video-img_1" data-aos="zoom-in" data-aos-duration="2000"></div>
                    <div class="video-img_item video-img_2" data-aos="zoom-in" data-aos-duration="2200"></div>
                    <div class="video-img_item video-img_3" data-aos="zoom-in" data-aos-duration="2400"></div>
                    <div class="video-img_item video-img_4" data-aos="zoom-in" data-aos-duration="2600"></div>
                </div>
            </div>
        </div>


        <!--========== Home Section ==========-->
        <div class="layer section" id="home">
            <div class="content">

                <!--========== Header ==========-->
                <div class="position-relative">
                    <div class="header">
                        <nav class="navbar navbar-expand-lg affix-top">
                            <div class="container">
                                <div class="navbar-container">
                                    <a class="navbar-brand" href="#home">
                                        <img src="src/assets/img/logo.svg" alt="MetaGamer">
                                        <span>MetaGamer</span>
                                    </a>
                                    <a href="#cd-nav" class="cd-nav-trigger burger-menu-icon">
                                        <span>Menu</span>
                                    </a>
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <div class="navbar-layout">
                                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#games">Games</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#features">Features</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#community">Community</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#newch">Challenges</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#about">About</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#news">News</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#reviews">Reviews</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#contact">Contact</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>


        <!--========== Game Section ==========-->
        <div class="section" id="games">
            <div class="container">
                <h2 class="title">Top Games</h2>
                <div class="gcard" id="games-slider" data-aos="fade-up" data-aos-duration="2000">
                    <a href="" class="gcard-item">
                        <img src="src/assets/img/games/games-1.jpg" alt="games1">
                        <div class="gcard_details">
                            <div class="gcard-bottom">
                                <div class="gcard-rating">Rating: <span><i class="icon-star-full"></i>
                                        4,6</span></div>
                                <h4 class="gcard-title">Apex League</h4>
                                <div class="gcard-catg">Battle Royale</div>
                                <div class="gcard-stats">
                                    <div class="gcard-stats_col">
                                        <span class="gcard-stats_num">3.7M</span>
                                        <p class="gcard-stats_label">Reviews</p>
                                    </div>
                                    <div class="gcard-stats_col">
                                        <span class="gcard-stats_num">400M+</span>
                                        <p class="gcard-stats_label">Downloads</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="" class="gcard-item">
                        <img src="src/assets/img/games/games-2.jpg" alt="games2">
                        <div class="gcard_details">
                            <div class="gcard-bottom">
                                <div class="gcard-rating">Rating: <span><i class="icon-star-full"></i>
                                        3,9</span></div>
                                <h4 class="gcard-title">Overwatch</h4>
                                <div class="gcard-catg">Control</div>
                                <div class="gcard-stats">
                                    <div class="gcard-stats_col">
                                        <span class="gcard-stats_num">2.8M</span>
                                        <p class="gcard-stats_label">Reviews</p>
                                    </div>
                                    <div class="gcard-stats_col">
                                        <span class="gcard-stats_num">460M+</span>
                                        <p class="gcard-stats_label">Downloads</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="" class="gcard-item">
                        <img src="src/assets/img/games/games-3.jpg" alt="games3">
                        <div class="gcard_details">
                            <div class="gcard-bottom">
                                <div class="gcard-rating">Rating: <span><i class="icon-star-full"></i>
                                        4,8</span></div>
                                <h4 class="gcard-title">Call of Duty</h4>
                                <div class="gcard-catg">Action</div>
                                <div class="gcard-stats">
                                    <div class="gcard-stats_col">
                                        <span class="gcard-stats_num">5.1M</span>
                                        <p class="gcard-stats_label">Reviews</p>
                                    </div>
                                    <div class="gcard-stats_col">
                                        <span class="gcard-stats_num">500M+</span>
                                        <p class="gcard-stats_label">Downloads</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="" class="gcard-item">
                        <img src="src/assets/img/games/games-4.jpg" alt="">
                        <div class="gcard_details">
                            <div class="gcard-bottom">
                                <div class="gcard-rating">Rating: <span><i class="icon-star-full"></i>
                                        4,5</span></div>
                                <h4 class="gcard-title">Fortnite</h4>
                                <div class="gcard-catg">Battle Royale</div>
                                <div class="gcard-stats">
                                    <div class="gcard-stats_col">
                                        <span class="gcard-stats_num">3.2M</span>
                                        <p class="gcard-stats_label">Reviews</p>
                                    </div>
                                    <div class="gcard-stats_col">
                                        <span class="gcard-stats_num">370M+</span>
                                        <p class="gcard-stats_label">Downloads</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="" class="gcard-item">
                        <img src="src/assets/img/games/games-5.jpg" alt="games5">
                        <div class="gcard_details">
                            <div class="gcard-bottom">
                                <div class="gcard-rating">Rating: <span><i class="icon-star-full"></i>
                                        4,9</span></div>
                                <h4 class="gcard-title">Pubg</h4>
                                <div class="gcard-catg">Action</div>
                                <div class="gcard-stats">
                                    <div class="gcard-stats_col">
                                        <span class="gcard-stats_num">6.6M</span>
                                        <p class="gcard-stats_label">Reviews</p>
                                    </div>
                                    <div class="gcard-stats_col">
                                        <span class="gcard-stats_num">610M+</span>
                                        <p class="gcard-stats_label">Downloads</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>


        <!--========== Features Section ==========-->
        <div class="section" id="features">
            <div class="container">
                <h2 class="title">Incredible Features</h2>
                <div class="row">
                    <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-duration="2000">
                        <div class="feat-card" data-aos="fade-up">
                            <i class="icon-cogs"></i>
                            <h4 class="feat-name">Quick Setup</h4>
                            <p class="feat-desc">
                                Dolor minim in pariatur in deserunt laboris eu pariatur labore
                                excepteur cupidatat cupidatat duis dolor in.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-duration="2000">
                        <div class="feat-card" data-aos="fade-up">
                            <i class="icon-users"></i>
                            <h4 class="feat-name">Expert Teams</h4>
                            <p class="feat-desc">Lorem ipsum dolor sitamet const adipiscng Duis eletum
                                sollicitudin is yaugue euismods</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-duration="2000">
                        <div class="feat-card" data-aos="fade-up">
                            <i class="icon-bubbles"></i>
                            <h4 class="feat-name">Fast Support</h4>
                            <p class="feat-desc">Lorem ipsum dolor sitamet const adipiscng Duis eletum
                                sollicitudin is yaugue euismods.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-duration="2000">
                        <div class="feat-card" data-aos="fade-up">
                            <i class="icon-trophy"></i>
                            <h4 class="feat-name">Year Experience</h4>
                            <p class="feat-desc">
                                Dolor minim in pariatur in deserunt laboris eu pariatur labore
                                excepteur cupidatat cupidatat duis dolor in.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-duration="2400">
                        <div class="feat-card">
                            <i class="icon-bubbles"></i>
                            <h4 class="feat-name">Fast Support</h4>
                            <p class="feat-desc">Lorem ipsum dolor sitamet const adipiscng Duis eletum
                                sollicitudin is yaugue euismods.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-duration="2400">
                        <div class="feat-card">
                            <i class="icon-trophy"></i>
                            <h4 class="feat-name">Year Experience</h4>
                            <p class="feat-desc">
                                Dolor minim in pariatur in deserunt laboris eu pariatur labore
                                excepteur cupidatat cupidatat duis dolor in.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-duration="2400">
                        <div class="feat-card">
                            <i class="icon-cogs"></i>
                            <h4 class="feat-name">Quick Setup</h4>
                            <p class="feat-desc">
                                Dolor minim in pariatur in deserunt laboris eu pariatur labore
                                excepteur cupidatat cupidatat duis dolor in.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-duration="2400">
                        <div class="feat-card">
                            <i class="icon-users"></i>
                            <h4 class="feat-name">Expert Teams</h4>
                            <p class="feat-desc">Lorem ipsum dolor sitamet const adipiscng Duis eletum
                                sollicitudin is yaugue euismods</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--========== Community Section ==========-->
        <div class="section" id="community">
            <div class="container">
                <h2 class="title">Community</h2>
                <div class="comm" data-aos="fade-up" data-aos-duration="2000">
                    <i class="icon-play" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
                    <h2 class="comm-ttl">Join the Community</h2>
                    <p class="comm-text">Join our Discord Community</p>
                    <a href="" class="comm-link">Join Discord</a>
                </div>
            </div>
        </div>


        <!--========== Community Modal ==========-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-close">
                        <i class="icon-close" data-bs-dismiss="modal"></i>
                    </div>
                    <iframe height="470" class="w-100 border-0"
                        src="https://www.youtube.com/embed/HHBsvKnCkwI?si=LjpPfLhgrigHC0se?autoplay=1"
                        title="YouTube video player" allowfullscreen></iframe>
                </div>
            </div>
        </div>


        <!--========== New Challenges Section ==========-->
        <div class="section" id="newch">
            <div class="container">
                <h2 class="title">New Challenges</h2>

                <!--========== Custom Slick Slider ==========-->
                <div id="thumb-slider">
                    <div class="card shadow-sm" data-aos="fade-up" data-aos-duration="2000">
                        <div class="card-image">
                            <img src="src/assets/img/thumb/game-1.png" alt="game1">
                            <div class="card-image_over">
                                <div class="card-time">
                                    <i class="icon-clock"></i>
                                    <span>Ends in 2 Days</span>
                                </div>
                                <div class="card-version">
                                    <i class="icon-xbox"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Apex Legends</h3>
                            <div class="line-x"></div>
                            <div class="ch-obj">
                                <h4 class="ch-obj_ttl">Objective</h4>
                                <p class="ch-obj_text">Get a triple kill in a game.</p>
                            </div>
                            <div class="ch-user">
                                <div class="ch-visitor">
                                    <div class="position-relative avatar_box user-box">
                                        <img src="src/assets/img/user/user-1.jpg" alt="user1" class="user-avatar">
                                    </div>
                                    <div class="position-relative avatar_box user-box">
                                        <img src="src/assets/img/user/user-2.jpg" alt="user2" class="user-avatar">
                                    </div>
                                    <div class="position-relative avatar_box user-box">
                                        <img src="src/assets/img/user/user-3.jpg" alt="user3" class="user-avatar">
                                    </div>
                                    <div class="position-relative avatar_box user-box">
                                        <img src="src/assets/img/user/user-4.jpg" alt="user4" class="user-avatar">
                                    </div>
                                    <div class="ch-visitor_count">7</div>
                                </div>
                                <span class="ch-user_stats">Players joined</span>
                            </div>
                            <div class="ch-prize">
                                <img src="src/assets/img/coin.png" alt="coin">
                                <div class="ch-prize_desc">
                                    <h4 class="ch-prize_amount">2000 coin prize</h4>
                                    <p class="ch-prize_text">Total prizepool divided amoung all placements.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="link-primary">Join</a>
                        </div>
                    </div>
                    <div class="card shadow-sm" data-aos="fade-up" data-aos-duration="2000">
                        <div class="card-image">
                            <img src="src/assets/img/thumb/game-2.png" alt="game2">
                            <div class="card-image_over">
                                <div class="card-time">
                                    <i class="icon-clock"></i>
                                    <span>Ends in 3 Days</span>
                                </div>
                                <div class="card-version">
                                    <i class="icon-windows"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Fortnite</h3>
                            <div class="line-x"></div>
                            <div class="ch-obj">
                                <h4 class="ch-obj_ttl">Objective</h4>
                                <p class="ch-obj_text">End the game 2 levels or more above your direct aponent.</p>
                            </div>
                            <div class="ch-user">
                                <span class="ch-user_stats"><strong>8</strong> Players registered</span>
                            </div>
                            <div class="ch-prize">
                                <img src="src/assets/img/coin.png" alt="coin">
                                <div class="ch-prize_desc">
                                    <h4 class="ch-prize_amount">3000 coin prize</h4>
                                    <p class="ch-prize_text">Total prizepool divided amoung all placements.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="link-outline">Details</a>
                            <a href="#" class="link-primary">Join</a>
                        </div>
                    </div>
                    <div class="card shadow-sm" data-aos="fade-up" data-aos-duration="2000">
                        <div class="card-image">
                            <img src="src/assets/img/thumb/game-3.png" alt="game3">
                            <div class="card-image_over">
                                <div class="card-time">
                                    <i class="icon-clock"></i>
                                    <span>Ends in 2 Days</span>
                                </div>
                                <div class="card-version">
                                    <i class="icon-windows"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Overwatch</h3>
                            <div class="line-x"></div>
                            <div class="ch-obj">
                                <h4 class="ch-obj_ttl">Objective</h4>
                                <p class="ch-obj_text">Get or assist the first kill in the game.</p>
                            </div>
                            <div class="ch-user">
                                <span class="ch-user_stats"><strong>12</strong> Players registered</span>
                            </div>
                            <div class="ch-prize">
                                <img src="src/assets/img/coin.png" alt="coin">
                                <div class="ch-prize_desc">
                                    <h4 class="ch-prize_amount">1000 coin prize</h4>
                                    <p class="ch-prize_text">Total prizepool divided amoung all placements.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="link-outline">Details</a>
                            <a href="#" class="link-primary">Join</a>
                        </div>
                    </div>
                    <div class="card shadow-sm" data-aos="fade-up" data-aos-duration="2000">
                        <div class="card-image">
                            <img src="src/assets/img/thumb/game-4.png" alt="game4">
                            <div class="card-image_over">
                                <div class="card-time">
                                    <i class="icon-clock"></i>
                                    <span>Ends in 4 Days</span>
                                </div>
                                <div class="card-version">
                                    <i class="icon-xbox"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Call of Duty</h3>
                            <div class="line-x"></div>
                            <div class="ch-obj">
                                <h4 class="ch-obj_ttl">Objective</h4>
                                <p class="ch-obj_text">Get a triple kill in a game</p>
                            </div>
                            <div class="ch-user">
                                <div class="ch-visitor">
                                    <div class="position-relative avatar_box user-box">
                                        <img src="src/assets/img/user/user-5.jpg" alt="user5" class="user-avatar">
                                    </div>
                                    <div class="position-relative avatar_box user-box">
                                        <img src="src/assets/img/user/user-10.jpg" alt="user10" class="user-avatar">
                                    </div>
                                    <div class="position-relative avatar_box user-box">
                                        <img src="src/assets/img/user/user-7.jpg" alt="user7" class="user-avatar">
                                    </div>
                                    <div class="position-relative avatar_box user-box">
                                        <img src="src/assets/img/user/user-9.jpg" alt="user9" class="user-avatar">
                                    </div>
                                    <div class="ch-visitor_count">10</div>
                                </div>
                                <span class="ch-user_stats">Players joined</span>
                            </div>
                            <div class="ch-prize">
                                <img src="src/assets/img/coin.png" alt="coin">
                                <div class="ch-prize_desc">
                                    <h4 class="ch-prize_amount">3000 coin prize</h4>
                                    <p class="ch-prize_text">Total prizepool divided amoung all placements.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="link-primary">Join</a>
                        </div>
                    </div>
                    <div class="card shadow-sm" data-aos="fade-up" data-aos-duration="2000">
                        <div class="card-image">
                            <img src="src/assets/img/thumb/game-1.png" alt="game1">
                            <div class="card-image_over">
                                <div class="card-time">
                                    <i class="icon-clock"></i>
                                    <span>Ends in 2 Days</span>
                                </div>
                                <div class="card-version">
                                    <i class="icon-xbox"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Apex Legends</h3>
                            <div class="line-x"></div>
                            <div class="ch-obj">
                                <h4 class="ch-obj_ttl">Objective</h4>
                                <p class="ch-obj_text">Get or assist the first kill in the game.</p>
                            </div>
                            <div class="ch-user">
                                <span class="ch-user_stats"><strong>6</strong> Players registered</span>
                            </div>
                            <div class="ch-prize">
                                <img src="src/assets/img/coin.png" alt="coin">
                                <div class="ch-prize_desc">
                                    <h4 class="ch-prize_amount">1000 coin prize</h4>
                                    <p class="ch-prize_text">Total prizepool divided amoung all placements.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="link-outline">Details</a>
                            <a href="#" class="link-primary">Join</a>
                        </div>
                    </div>
                    <div class="card shadow-sm" data-aos="fade-up" data-aos-duration="2000">
                        <div class="card-image">
                            <img src="src/assets/img/thumb/game-2.png" alt="game2">
                            <div class="card-image_over">
                                <div class="card-time">
                                    <i class="icon-clock"></i>
                                    <span>Ends in 3 Days</span>
                                </div>
                                <div class="card-version">
                                    <i class="icon-windows"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Fortnite</h3>
                            <div class="line-x"></div>
                            <div class="ch-obj">
                                <h4 class="ch-obj_ttl">Objective</h4>
                                <p class="ch-obj_text">Place more wards than your apponent.</p>
                            </div>
                            <div class="ch-user">
                                <div class="ch-visitor">
                                    <div class="position-relative avatar_box user-box">
                                        <img src="src/assets/img/user/user-11.jpg" alt="user11" class="user-avatar">
                                    </div>
                                    <div class="position-relative avatar_box user-box">
                                        <img src="src/assets/img/user/user-18.jpg" alt="user18" class="user-avatar">
                                    </div>
                                    <div class="position-relative avatar_box user-box">
                                        <img src="src/assets/img/user/user-14.jpg" alt="user14" class="user-avatar">
                                    </div>
                                    <div class="position-relative avatar_box user-box">
                                        <img src="src/assets/img/user/user-16.jpg" alt="user16" class="user-avatar">
                                    </div>
                                    <div class="ch-visitor_count">11</div>
                                </div>
                                <span class="ch-user_stats">Players joined</span>
                            </div>
                            <div class="ch-prize">
                                <img src="src/assets/img/coin.png" alt="coin">
                                <div class="ch-prize_desc">
                                    <h4 class="ch-prize_amount">3000 coin prize</h4>
                                    <p class="ch-prize_text">Total prizepool divided amoung all placements.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="link-primary">Join</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--========== About Section ==========-->
        <div class="section" id="about">
            <div class="container">
                <h2 class="title">About</h2>
                <div class="card about-card parallax" data-aos="fade-up" data-aos-duration="2000">
                    <h2 class="about-ttl">Subscribe to our newsletter</h2>
                    <p class="about-text">Join other Metagames, get points, get prizes</p>
                    <p class="about-note">Games are de- signed to be engaging and enjoyable, with features
                        such as rewards, leveling up, and social competition, which is all intended to keep players
                        coming back for more.
                        These features are designed to create a sense of progress and achievement, which can be
                        highly
                        motivating for players.</p>
                    <div class="subs">
                        <form action="#" class="subs-form">
                            <div class="subs-area">
                                <input type="text" placeholder="Enter Your Email" class="form-control">
                                <button type="submit" class="btn btn-primary">Subscribe</button>
                            </div>
                            <p class="subs-text">Your email is safe with us. We don't spam.</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!--========== News Section ==========-->
        <div class="section" id="news">
            <div class="container">
                <h2 class="title">News & Promo</h2>
                <div class="row" data-aos="fade-up" data-aos-duration="2000">
                    <div class="col-md-6">
                        <div class="news-card">
                            <div class="news-cover news-cover_1">
                            </div>
                            <div class="news-content">
                                <h3 class="news-title">
                                    Final Fantasy VII Remake has a Scene that will Assuredly Confuse New Players
                                </h3>
                                <p class="news-desc">
                                    Since launch, I’ve been playing a ton of Final Fantasy VII Remake, taking only short
                                    breaks to do a few tasks or compete in a fishing tournament in Animal Crossing: New
                                    Horizons.
                                </p>
                                <div class="news-actions">
                                    <span class="news-date">23.04.2023</span>
                                    <a href="" class="news-link">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="news-card">
                            <div class="news-cover news-cover_2">
                            </div>
                            <div class="news-content">
                                <h3 class="news-title">
                                    Destiny 2 came out on Steam instead of Epic Games Store
                                </h3>
                                <p class="news-desc">
                                    Destiny 2 went to Steam instead of Epic “for all the obvious
                                    reasons”. "We figured it would be a good way to welcome a lot of new players
                                    into
                                    our community".
                                </p>
                                <div class="news-actions">
                                    <span class="news-date">25.10.2023</span>
                                    <a href="" class="news-link">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--========== Review Section ==========-->
        <div class="section" id="reviews">
            <div class="container">
                <h2 class="title">Player Reviews</h2>

                <!--========== Custom Slick Slider ==========-->
                <div id="review-slider" data-aos="fade-up" data-aos-duration="2000">
                    <div class="card rw-card shadow-sm">
                        <div class="rw-content">
                            <div class="rw-top">
                                <div class="rw-icon">
                                    <i class="icon-quotes-left"></i>
                                </div>
                                <div class="rw-rating">
                                    4.9 <i class="icon-star-full"></i>
                                </div>
                            </div>
                            <div class="rw-author">
                                <div class="user-box">
                                    <img src="src/assets/img/user/user-1.jpg" alt="user1" class="user-avatar">
                                </div>
                                <div class="rw-author_details">
                                    <span class="rw-author_name">Ana Rhodes</span>
                                    <span class="rw-date">16 March, 2023</span>
                                </div>
                            </div>
                            <p class="rw-text">
                                I don't play too many BR's but I've played a bunch.. from Fortnite, to
                                PUBG, to Warzone, Firestorm (Battlefield's version), and of course Apex.
                            </p>
                        </div>
                    </div>
                    <div class="card rw-card shadow-sm">
                        <div class="rw-content">
                            <div class="rw-top">
                                <div class="rw-icon">
                                    <i class="icon-quotes-left"></i>
                                </div>
                                <div class="rw-rating">
                                    4.8 <i class="icon-star-full"></i>
                                </div>
                            </div>
                            <div class="rw-author">
                                <div class="user-box">
                                    <img src="src/assets/img/user/user-9.jpg" alt="user1" class="user-avatar">
                                </div>
                                <div class="rw-author_details">
                                    <span class="rw-author_name">Morris Clarke</span>
                                    <span class="rw-date">4 April, 2023</span>
                                </div>
                            </div>
                            <p class="rw-text">
                                This is the only BR that's held my interest longer than a year. I've played PUBG,
                                Warzone, Fortnite but the moment to moment pick up and play nature of Apex really is
                                the
                                true differentiator imo.
                            </p>
                        </div>
                    </div>
                    <div class="card rw-card shadow-sm">
                        <div class="rw-content">
                            <div class="rw-top">
                                <div class="rw-icon">
                                    <i class="icon-quotes-left"></i>
                                </div>
                                <div class="rw-rating">
                                    5.0 <i class="icon-star-full"></i>
                                </div>
                            </div>
                            <div class="rw-author">
                                <div class="user-box">
                                    <img src="src/assets/img/user/user-3.jpg" alt="user1" class="user-avatar">
                                </div>
                                <div class="rw-author_details">
                                    <span class="rw-author_name">Palmera Poland</span>
                                    <span class="rw-date">16 March, 2023</span>
                                </div>
                            </div>
                            <p class="rw-text">
                                It is simply the best battle royale game ever made so far.
                            </p>
                        </div>
                    </div>
                    <div class="card rw-card shadow-sm">
                        <div class="rw-content">
                            <div class="rw-top">
                                <div class="rw-icon">
                                    <i class="icon-quotes-left"></i>
                                </div>
                                <div class="rw-rating">
                                    4.9 <i class="icon-star-full"></i>
                                </div>
                            </div>
                            <div class="rw-author">
                                <div class="user-box">
                                    <img src="src/assets/img/user/user-10.jpg" alt="user1" class="user-avatar">
                                </div>
                                <div class="rw-author_details">
                                    <span class="rw-author_name">Jhon Casey</span>
                                    <span class="rw-date">16 March, 2023</span>
                                </div>
                            </div>
                            <p class="rw-text">
                                This game is the best battle royale I played since H1z1(not the console H1z1 lol).
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--========== Contact Section ==========-->
        <div class="section contact" id="contact">
            <div class="contact-layer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h2 class="contact-ttl">Let's Get Started</h2>
                            <p class="contact-text">For further info & support contact us.</p>
                        </div>
                        <div class="col-md-8 contact-list">
                            <p class="contact-item"><strong>Office: </strong>Büyükdere Cad., 22A, Istanbul, Turkey
                            </p>
                            <p class="contact-item"><strong>Email: </strong>info@companyname.com</p>
                            <p class="contact-item"><strong>Phone Number: </strong>(+90) 800 123-4567</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="flogo">
                                <img src="src/assets/img/logo.svg" alt="logo">
                                <h3>MetaGamer</h3>
                            </div>
                            <p class="ftext">We are a community of millions of Metagames and continue to open doors
                                to
                                new worlds every day. If you're up for a challenge, join us and become #1 in the
                                world!
                            </p>
                            <h3 class="ftitle">Follow us on</h3>
                            <div class="fsocial">
                                <a href="" target="_blank"><i class="icon-facebook"></i></a>
                                <a href="" target="_blank"><i class="icon-twitter"></i></a>
                                <a href="" target="_blank"><i class="icon-instagram"></i></a>
                                <a href="" target="_blank"><i class="icon-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h3 class="ftitle">Pages</h3>
                            <ul class="fmenu">
                                <li><a href="#home">Home</a></li>
                                <li><a href="#games">Games</a></li>
                                <li><a href="#features">Features</a></li>
                                <li><a href="#community">Community</a></li>
                                <li><a href="#newch">Challenges</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#news">News</a></li>
                                <li><a href="#reviews">Reviews</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                            <h3 class="ftitle">Payment Methods</h3>
                            <div class="fpay">
                                <div class="fpay-item">
                                    <img src="src/assets/img/payments/visa.png" alt="visa">
                                </div>
                                <div class="fpay-item">
                                    <img src="src/assets/img/payments/mastercard.png" alt="mastercard">
                                </div>
                                <div class="fpay-item">
                                    <img src="src/assets/img/payments/paypal.png" alt="paypal">
                                </div>
                                <div class="fpay-item">
                                    <img src="src/assets/img/payments/skrill.png" alt="skrill">
                                </div>
                                <div class="fpay-item">
                                    <img src="src/assets/img/payments/stripe.png" alt="stripe">
                                </div>
                                <div class="fpay-item">
                                    <img src="src/assets/img/payments/googlepay.png" alt="googlepay">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h3 class="ftitle">Apps / Platforms</h3>
                            <div class="fapps">
                                <a href="" target="_blank">
                                    <i class="icon-appleinc"></i>
                                    <div class="fapps-text">
                                        Buy now via <strong>Apple Store</strong>
                                    </div>
                                </a>
                                <a href="" target="_blank">
                                    <i class="icon-xbox"></i>
                                    <div class="fapps-text">
                                        Download via <strong>Game Pass</strong>
                                    </div>
                                </a>
                                <a href="" target="_blank">
                                    <i class="icon-steam"></i>
                                    <div class="fapps-text">
                                        Buy now via <strong>Steam</strong>
                                    </div>
                                </a>
                                <a href="" target="_blank">
                                    <i class="icon-windows"></i>
                                    <div class="fapps-text">
                                        Buy now via <strong>WinStore</strong>
                                    </div>
                                </a>
                                <a href="" target="_blank">
                                    <i class="icon-amazon"></i>
                                    <div class="fapps-text">
                                        Buy now via <strong>Amazon</strong>
                                    </div>
                                </a>
                                <a href="" target="_blank">
                                    <i class="icon-paypal"></i>
                                    <div class="fapps-text">
                                        Download via <strong>PayPal</strong>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="fcopy">
                        <p class="fcopy-info">Copyright © 2023 MetaGamer - All rights reserved.</p>
                        <div class="fcopy-nav">
                            <a href="">Help Center</a>
                            <a href="">Career</a>
                            <a href="">Terms and Conditions</a>
                            <a href="">Privacy Policy</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!--========== Scroll Up ==========-->
    <div class="scroll-up">
        <span class="scroll-up_text">Back to top</span>
        <div class="scroll-up_bar" id="scrollH"></div>
    </div>


    <!--========== Mobile Menu ==========-->
    <nav class="cd-nav-container burger-menu" id="cd-nav">
        <div class="rmenu_header">
            <div class="rmenu_header-left">
                <a class="navbar-brand rmenu_logo" href="#home">
                    <img src="src/assets/img/logo.svg" alt="MetaGamer">
                    <span>MetaGamer</span>
                </a>
                <div class="cd-close-nav">Close</div>
            </div>
        </div>
        <ul class="rmenu_list">
            <li><a class="page-scroll" href="#games">Games</a></li>
            <li><a class="page-scroll" href="#features">Features</a></li>
            <li><a class="page-scroll" href="#community">Community</a></li>
            <li><a class="page-scroll" href="#newch">Challenges</a></li>
            <li><a class="page-scroll" href="#about">About</a></li>
            <li><a class="page-scroll" href="#news">News</a></li>
            <li><a class="page-scroll" href="#reviews">Reviews</a></li>
            <li><a class="page-scroll" href="#contact">Contact</a></li>
        </ul>
    </nav>
    <div class="cd-overlay"></div>


    <!-- JavaScripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <script src="src/assets/js/plugins/jquery-2.1.1.min.js"></script>
    <script src="src/assets/js/plugins/jquery.mousewheel.min.js"></script>
    <script src="src/assets/js/plugins/jquery.easing.min.js"></script>
    <script src="src/assets/js/plugins/slick.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="src/assets/js/main.js"></script>
</body>

</html>