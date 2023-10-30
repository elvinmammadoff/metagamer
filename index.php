<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>METAGAMER - Gaming Landing page</title>

    <!-- Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="assets/css/plugins/slick.css" type="text/css" rel="stylesheet">
    <link href="assets/css/plugins/slick-theme.css" type="text/css" rel="stylesheet">
    <link href="assets/css/plugins/touch-sideswipe.css" type="text/css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Loading Overlay Start -->
    <div class="loading-overlay">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
    <!-- Loading Overlay End -->

    <div class="layout">

        <!--Start Carousel-->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-actions">
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <i class="icon-arrow-l"></i>
                </button>
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                </div>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <i class="icon-arrow-r"></i>
                </button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="carousel-img" src="./assets/img/carousel/slider-1.jpg" alt="slider1">
                    <div class="carousel-container">
                        <div class="carousel-caption">
                            <div class="carousel-ttl">
                                <h5>Play trending games everywhere.</h5>
                            </div>
                            <div class="carousel-txt">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in
                                    hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur,
                                    ultrices mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et
                                    massa mi.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="carousel-img" src="./assets/img/carousel/slider-2.jpg" alt="slider2">
                    <div class="carousel-container">
                        <div class="carousel-caption">
                            <div class="carousel-ttl">
                                <h5>Connect and enjoy with team.</h5>
                            </div>
                            <div class="carousel-txt">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in
                                    hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur,
                                    ultrices mauris.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="carousel-img" src="./assets/img/carousel/slider-1.jpg" alt="slider1">
                    <div class="carousel-container">
                        <div class="carousel-caption">
                            <div class="carousel-ttl">
                                <h5>Feel no limits power.</h5>
                            </div>
                            <div class="carousel-txt">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in
                                    hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur,
                                    ultrices mauris.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="carousel-img" src="./assets/img/carousel/slider-2.jpg" alt="slider2">
                    <div class="carousel-container">
                        <div class="carousel-caption">
                            <div class="carousel-ttl">
                                <h5>Free cloud gaming experience.</h5>
                            </div>
                            <div class="carousel-txt">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in
                                    hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur,
                                    ultrices mauris.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Carousel-->

        <div class="layer section" id="home">
            <div class="content">

                <!--Start Header-->
                <div class="position-relative">
                    <div class="container-fluid">
                        <div class="header">
                            <nav class="navbar navbar-expand-lg affix-top">
                                <div class="container-fluid navbar-container">
                                    <a class="navbar-brand page-scroll" href="#home">
                                        <img src="assets/img/logo.svg" alt="Metagamer">
                                        <span>METAGAMER</span>
                                    </a>
                                    <a href="#cd-nav" class="cd-nav-trigger burger-menu-icon">
                                        <span>Menu</span>
                                    </a>
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <div class="navbar-layout">
                                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                                <li class="nav-item">
                                                    <a class="nav-link page-scroll" href="#new-ch">Challenges</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#update">Updates</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#games">Games</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#about">About</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#contact">Contact</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <!--End Header-->
            </div>
        </div>

        <div class="section" id="new-ch">
            <div class="container">
                <h2 class="title text-uppercase">New - Challenges</h2>

                <div id="thumb-slider">
                    <div class="card shadow-sm">
                        <div class="card-image">
                            <img src="assets/img/thumb/game-1.png" alt="game1">
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
                                        <img src="assets/img/user/user-1.jpg" alt="user1" class="user-avatar">
                                    </div>
                                    <div class="position-relative avatar_box user-box">
                                        <img src="assets/img/user/user-2.jpg" alt="user2" class="user-avatar">
                                    </div>
                                    <div class="position-relative avatar_box user-box">
                                        <img src="assets/img/user/user-3.jpg" alt="user3" class="user-avatar">
                                    </div>
                                    <div class="position-relative avatar_box user-box">
                                        <img src="assets/img/user/user-4.jpg" alt="user4" class="user-avatar">
                                    </div>
                                    <div class="ch-visitor_count">7</div>
                                </div>
                                <span class="ch-user_stats">Players joined</span>
                            </div>
                            <div class="ch-prize">
                                <img src="assets/img/coin.png" alt="coin">
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
                    <div class="card shadow-sm">
                        <div class="card-image">
                            <img src="assets/img/thumb/game-2.png" alt="game2">
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
                                <img src="assets/img/coin.png" alt="coin">
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
                    <div class="card shadow-sm">
                        <div class="card-image">
                            <img src="assets/img/thumb/game-3.png" alt="game3">
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
                                <img src="assets/img/coin.png" alt="coin">
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
                    <div class="card shadow-sm">
                        <div class="card-image">
                            <img src="assets/img/thumb/game-4.png" alt="game4">
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
                                        <img src="assets/img/user/user-5.jpg" alt="user5" class="user-avatar">
                                    </div>
                                    <div class="position-relative avatar_box user-box">
                                        <img src="assets/img/user/user-10.jpg" alt="user10" class="user-avatar">
                                    </div>
                                    <div class="position-relative avatar_box user-box">
                                        <img src="assets/img/user/user-7.jpg" alt="user7" class="user-avatar">
                                    </div>
                                    <div class="position-relative avatar_box user-box">
                                        <img src="assets/img/user/user-9.jpg" alt="user9" class="user-avatar">
                                    </div>
                                    <div class="ch-visitor_count">10</div>
                                </div>
                                <span class="ch-user_stats">Players joined</span>
                            </div>
                            <div class="ch-prize">
                                <img src="assets/img/coin.png" alt="coin">
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
                    <div class="card shadow-sm">
                        <div class="card-image">
                            <img src="assets/img/thumb/game-1.png" alt="game1">
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
                                <img src="assets/img/coin.png" alt="coin">
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
                    <div class="card shadow-sm">
                        <div class="card-image">
                            <img src="assets/img/thumb/game-2.png" alt="game2">
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
                                        <img src="assets/img/user/user-11.jpg" alt="user11" class="user-avatar">
                                    </div>
                                    <div class="position-relative avatar_box user-box">
                                        <img src="assets/img/user/user-18.jpg" alt="user18" class="user-avatar">
                                    </div>
                                    <div class="position-relative avatar_box user-box">
                                        <img src="assets/img/user/user-14.jpg" alt="user14" class="user-avatar">
                                    </div>
                                    <div class="position-relative avatar_box user-box">
                                        <img src="assets/img/user/user-16.jpg" alt="user16" class="user-avatar">
                                    </div>
                                    <div class="ch-visitor_count">11</div>
                                </div>
                                <span class="ch-user_stats">Players joined</span>
                            </div>
                            <div class="ch-prize">
                                <img src="assets/img/coin.png" alt="coin">
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


        <div class="section cover update" id="update">
            <div class="container">
                <h2 class="title text-uppercase">Updates</h2>
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <img src="assets/img/character.png" class="update-img" alt="character">
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="card update-card">
                            <div class="update-symbol">
                                <i class="icon-bookmark"></i>
                            </div>
                            <h3 class="update-ttl">FORTNITE REFER A FRIEND 3.0: PLAY TOGETHER FOR IN-GAME
                                REWARDS!</h3>
                            <div class="update-list">
                                <p>Here’s how to participate!</p>
                                <ol>
                                    <li>Sign up on the Refer a Friend website with your Epic account.</li>
                                    <li>Invite up to five eligible friends via the website to play Fortnite.</li>
                                    <li>Complete in-game tasks together.</li>
                                    <li>Earn in-game rewards, including the new Redcap Outfit.</li>
                                </ol>
                            </div>
                            <div class="update-stats">
                                <div class="update-stats_col">
                                    <div class="update-rating"><span><i class="icon-star-empty"></i> 3,9</span></div>
                                    <div class="update-review">
                                        <span class="update-stats_num">3.7M</span>
                                        <p class="update-stats_label">Reviews</p>
                                    </div>
                                </div>
                                <div class="update-stats_col">
                                    <span class="update-stats_num">400M+</span>
                                    <p class="update-stats_label">Downloads</p>
                                </div>
                            </div>
                            <div class="downloads">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6">
                                        <a href="" target="_blank">
                                            <img src="assets/img/downloads/appstore.png" alt="appstore">
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <a href="" target="_blank">
                                            <img src="assets/img/downloads/googleplay.png" alt="googleplay">
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <a href="" target="_blank">
                                            <img src="assets/img/downloads/amazonstore.png" alt="amazonstore">
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <a href="" target="_blank">
                                            <img src="assets/img/downloads/getteam.png" alt="getteam">
                                        </a>
                                    </div>
                                </div>
                                <div class="downloads-note">
                                    <p>Game includes optional in-app purchases</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="section" id="games">
            <div class="container">
                <h2 class="title text-uppercase">Games</h2>
                <div class="gcard" id="games-slider">
                    <a href="" class="gcard-item">
                        <img src="assets/img/games/games-1.jpg" alt="games1">
                        <div class="gcard_details">
                            <div class="gcard-bottom">
                                <div class="gcard-rating">Rating: <span><i class="icon-star-full"></i> 4,6</span></div>
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
                        <img src="assets/img/games/games-2.jpg" alt="games2">
                        <div class="gcard_details">
                            <div class="gcard-bottom">
                                <div class="gcard-rating">Rating: <span><i class="icon-star-full"></i> 3,9</span></div>
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
                        <img src="assets/img/games/games-3.jpg" alt="games3">
                        <div class="gcard_details">
                            <div class="gcard-bottom">
                                <div class="gcard-rating">Rating: <span><i class="icon-star-full"></i> 4,8</span></div>
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
                        <img src="assets/img/games/games-4.jpg" alt="">
                        <div class="gcard_details">
                            <div class="gcard-bottom">
                                <div class="gcard-rating">Rating: <span><i class="icon-star-full"></i> 4,5</span></div>
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
                        <img src="assets/img/games/games-5.jpg" alt="games5">
                        <div class="gcard_details">
                            <div class="gcard-bottom">
                                <div class="gcard-rating">Rating: <span><i class="icon-star-full"></i> 4,9</span></div>
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


        <div class="section" id="about">
            <div class="container">
                <div class="card about-card">
                    <div class="row">
                        <div class="col-md-12 col-lg-5">
                            <h2 class="title text-uppercase">Join other Metagames, get points, get prizes</h2>
                            <p class="about-text">
                                We are a community of millions of Metagames and continue to open doors to new
                                worlds every day. If you're up for a challenge, join us and become #1 in the world!
                            </p>
                            <div class="follow">
                                <h3 class="follow-title">Follow our Metagames on</h3>
                                <div class="follow-list">
                                    <a href="" target="_blank">
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="" target="_blank">
                                        <i class="icon-twitter"></i>
                                    </a>
                                    <a href="" target="_blank">
                                        <i class="icon-instagram"></i>
                                    </a>
                                    <a href="" target="_blank">
                                        <i class="icon-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-7">
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
            </div>
        </div>

        <div class="section contact" id="contact">
            <div class="contact-layer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h2 class="title mb-2 text-uppercase">Let's Get Started</h2>
                            <p class="contact-text">For further info & support contact us.</p>
                        </div>
                        <div class="col-md-8 contact-list">
                            <p class="contact-item"><strong>Office: </strong>Büyükdere Cad., 22A, Istanbul, Turkey</p>
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
                            <div class="flogo text-uppercase">
                                <img src="assets/img/logo.svg" alt="logo">
                                <h3>Metagamer</h3>
                            </div>
                            <p class="ftext">We are a community of millions of Metagames and continue to open doors to
                                new worlds every day. If you're up for a challenge, join us and become #1 in the world!
                            </p>
                            <h3 class="ftitle text-uppercase">Follow us on</h3>
                            <div class="fsocial">
                                <a href="" target="_blank"><i class="icon-facebook"></i></a>
                                <a href="" target="_blank"><i class="icon-twitter"></i></a>
                                <a href="" target="_blank"><i class="icon-instagram"></i></a>
                                <a href="" target="_blank"><i class="icon-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h3 class="ftitle text-uppercase">Pages</h3>
                            <ul class="fmenu">
                                <li><a href="#home">Home</a></li>
                                <li><a href="#new-ch">Challenges</a></li>
                                <li><a href="#update">Updates</a></li>
                                <li><a href="#games">Games</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                            <h3 class="ftitle text-uppercase">Payment Methods</h3>
                            <div class="fpay">
                                <div class="fpay-item">
                                    <img src="assets/img/payments/visa.png" alt="visa">
                                </div>
                                <div class="fpay-item">
                                    <img src="assets/img/payments/mastercard.png" alt="mastercard">
                                </div>
                                <div class="fpay-item">
                                    <img src="assets/img/payments/paypal.png" alt="paypal">
                                </div>
                                <div class="fpay-item">
                                    <img src="assets/img/payments/skrill.png" alt="skrill">
                                </div>
                                <div class="fpay-item">
                                    <img src="assets/img/payments/stripe.png" alt="stripe">
                                </div>
                                <div class="fpay-item">
                                    <img src="assets/img/payments/googlepay.png" alt="googlepay">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h3 class="ftitle text-uppercase">Apps / Platforms</h3>
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
                        <p class="fcopy-info">Copyright © 2023 METAGAMER - All rights reserved.</p>
                        <div class="fcopy-nav">
                            <a href="">Help Center</a>
                            <a href="">Career</a>
                            <a href="">Terms and Conditions</a>
                            <a href="">Privacy Policy</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Scroll Up Start -->
            <div class="scroll-up">
                <span class="scroll-up_text">Back to top</span>
                <div class="scroll-up_bar" id="scrollH"></div>
            </div>
            <!-- Scroll Up End -->
        </div>
    </div>


    <!-- Mobile Menu Start -->
    <nav class="cd-nav-container burger-menu" id="cd-nav">
        <div class="rmenu_header">
            <div class="rmenu_header-left">
                <a class="navbar-brand rmenu_logo" href="#home">
                    <img src="assets/img/logo.svg" alt="Metagamer">
                    <span>METAGAMER</span>
                </a>
                <div class="cd-close-nav">Close</div>
            </div>
        </div>
        <ul class="rmenu_list">
            <li><a class="page-scroll" href="#new-ch">Challenges</a></li>
            <li><a class="page-scroll" href="#update">Updates</a></li>
            <li><a class="page-scroll" href="#games">Games</a></li>
            <li><a class="page-scroll" href="#about">About</a></li>
            <li><a class="page-scroll" href="#contact">Contact</a></li>
        </ul>
    </nav>

    <div class="cd-overlay"></div><!-- /.cd-overlay -->
    <!-- Mobile Menu End -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <script src="assets/js/plugins/jquery-2.1.1.min.js"></script>
    <script src="assets/js/plugins/jquery.mousewheel.min.js"></script>
    <script src="assets/js/plugins/jquery.easing.min.js"></script>
    <script src="assets/js/plugins/slick.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>