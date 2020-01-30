<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>리더스관리(주)</title>

    <link rel="icon" type="image/png" href="img/logo.png"/>
    <link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon">
    <meta property ="og:title" content="리더스관리(주)">
    <meta property ="og:description" content="리더스관리(주) 공식홈페이지입니다">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/design.css">
    <link rel="stylesheet" href="css/login.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css?family=Baskervville|Nanum+Myeongjo&display=swap" rel="stylesheet"> 
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="js/design.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/login.js"></script>
</head>

<body>
    <?php
        require_once("./session.php");
        require_once("detail_body/nav.php");
    ?>

    <!-- body carousel -->
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel"> 
        <!-- <div class="main_introduce jumbotron"><div class="intro_text">밝고 깨끗한 미래</div></div> -->
        <div class="main_introduce jumbotron"><div class="intro_text">Leaders Management</div></div>
        
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
    
        <div class="carousel-inner">
            <div class="carousel-item active"> 
                <img src="img/urban1.jpg" style="width:100%; height: 780px; object-fit: cover;" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <!-- <h2 id="test">밝고 깨끗한 미래</h2> -->
                    </div>
                </div>
            </div>
            <div class="carousel-item"> 
                <img src="img/urban2.jpg" style="width:100%; height: 780px; object-fit: cover" data-src="" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <!-- <h2>고객을 우선시 하는 기업</h2> -->
                    </div>
                </div>
            </div>
            <div class="carousel-item"> 
                <img src="img/urban3.jpg" style="width:100%; height: 780px; object-fit: cover" data-src="" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption">
                        <!-- <h2>리더스 관리(주)</h2> -->
                        <!-- <p>텍스트 3</p> -->
                    </div>
                </div>
            </div>
        </div>
        
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a> 
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</a> 
    </div>


    <!-- parallax 1  -->
    <div class="contents_block">
        <div class="parallax" data-parallax="scroll" data-z-index="-1" data-image-src="img/mac.jpg">
            <div class="cover_black">
            <div class = "container P_contents">
                <div class="middle_header">
                    Business
                </div>
                <div class="row pt-5 pb-5 aos-init">                    
                    <div class="col-lg-3 col-md-6 col-sm-6 contents_middle_picture aos-init aos-animate" data-aos="fade-up-left">
                        <img class="rounded" src="./img/cleaner.jpg" alt="">
                        <div class="middle_inner">
                            <div class="header">위생관리용역</div>
                            <div class="link" onclick="location.href='detail.php?page=2-1'">바로가기</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 contents_middle_picture aos-init aos-animate" data-aos-delay="50" data-aos="fade-up-left">
                        <img class="rounded" src="./img/cleaner2.jpg" alt="">
                        <div class="middle_inner">
                            <div class="header">소독업</div>
                            <div class="link" onclick="location.href='detail.php?page=2-2'">바로가기</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 contents_middle_picture aos-init aos-animate" data-aos-delay="100" data-aos="fade-up-left">
                        <img class="rounded" src="./img/building.jpg" alt="">
                        <div class="middle_inner">
                            <div class="header">시설관리용역</div>
                            <div class="link" onclick="location.href='detail.php?page=2-3'">바로가기</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 contents_middle_picture aos-init aos-animate" data-aos-delay="150" data-aos="fade-up-left">
                        <img class="rounded" src="./img/parking.jpg" alt="">
                        <div class="middle_inner">
                            <div class="header">주차관리</div>
                            <div class="link" onclick="location.href='detail.php?page=2-4'">바로가기</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 contents_middle_picture aos-init aos-animate" data-aos="fade-up-left">
                        <img class="rounded" src="./img/security.jpg" alt="">
                        <div class="middle_inner">
                            <div class="header">시설경비업</div>
                            <div class="link" onclick="location.href='detail.php?page=2-5'">바로가기</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 contents_middle_picture aos-init aos-animate" data-aos-delay="50" data-aos="fade-up-left">
                        <img class="rounded" src="./img/watertank.jpg" alt="">
                        <div class="middle_inner">
                            <div class="header">저수조청소업</div>
                            <div class="link" onclick="location.href='detail.php?page=2-6'">바로가기</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 contents_middle_picture aos-init aos-animate" data-aos-delay="100" data-aos="fade-up-left">
                        <img class="rounded" src="./img/doc.jpg" alt="">
                        <div class="middle_inner">
                            <div class="header">덕트청소업</div>
                            <div class="link" onclick="location.href='detail.php?page=2-7'">바로가기</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 contents_middle_picture aos-init aos-animate" data-aos-delay="150" data-aos="fade-up-left">
                        <img class="rounded" src="./img/output.jpg" alt="">
                        <div class="middle_inner">
                            <div class="header">배관설비업</div>
                            <div class="link" onclick="location.href='detail.php?page=2-8'">바로가기</div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- parallax End -->

    <!-- middle section -->
    <div class="About_Us">
        <div class="About_body">
            <div class="About_set aos-init aos-animate pt-5" data-aos="fade-right">
                <div class="row">
                    <div class="col-lg-2 col-md-12 offset-lg-4">
                        <div class="About_set_left" onclick="location.href='detail.php?page=1-1'">                        
                            <img src="img/user.png" alt="home"><br/><br/>
                            인사말
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="About_set_right">
                            <span onclick="location.href='detail.php?page=1-1'">
                                Greetings
                            </span>
                        </div>                        
                    </div>
                </div>
            </div>
            <div class="About_set  aos-init aos-animate" data-aos="fade-right">
                <div class="row">
                    <div class="col-lg-2 col-md-12 offset-lg-4">
                        <div class="About_set_left" onclick="location.href='detail.php?page=1-4'">                        
                            <img src="img/clean.png" alt="home"><br/><br/>                           
                            장비보유현황
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="About_set_right">
                            <span onclick="location.href='detail.php?page=1-4'">Equipment Status</span>
                        </div>                        

                    </div>
                </div>
            </div>
            <div class="About_set  aos-init aos-animate" data-aos="fade-right">
                <div class="row">
                    <div class="col-lg-2 col-md-12 offset-lg-4">
                        <div class="About_set_left" onclick="location.href='detail.php?page=1-5'">                        
                            <img src="img/home.png" alt="home"><br/><br/>
                                오시는 길
                            </div>
                        </div>
                    <div class="col-lg-6">
                        <div class="About_set_right">
                            <span onclick="location.href='detail.php?page=1-5'">Way to Come</span>
                        </div>                        
                    </div>                        

                </div>
            </div>

 
        </div>

    </div>
    
    <!-- parallax 2 -->
    <div class="contents_block">
        <div class="parallax" data-parallax="scroll" data-z-index="-1" data-image-src="img/mac2.jpg">
            <div class="cover_black">
            <div class = "container P_contents">
                <div class="row pt-5 pb-5">
                    <div class="col-md-4 mb-3 mb-md-0 aos-animate" data-aos="zoom-in">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Address</h4>
                                <hr class="my-4">
                                <div class="small text-black-50">sadasd</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0 aos-animate" data-aos="zoom-in">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Address</h4>
                                <hr class="my-4">
                                <div class="small text-black-50">sadasd</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0 aos-animate" data-aos="zoom-in">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Address</h4>
                                <hr class="my-4">
                                <div class="small text-black-50">sadasd</div>
                            </div>
                        </div>
                    </div>
                  </div>
            </div>
            </div>
        </div>
    </div>
    <!-- parallax End -->


    
    <!-- search bar -->              
    <!-- <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="searchbar">
            <input class="search_input" type="text" name="" placeholder="Search...">
            <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
            </div>
        </div>
    </div> -->


    <!-- lower navbar -->
    <!-- <nav id="bottom_nav" class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">리더스관리(주)</a>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">adsd</div>
                        <div class="col-md-4">adsd</div>
                        <div class="col-md-4">adsd</div>

                    </div>
                </div>
            </li>        
        </ul>
    </nav> -->
    <!-- Lower -->
    <nav id="bottom_nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 bottom_left"><div><img src="img/logo.png" style="width:170px;"/></div>리더스관리(주)</div>
                <div class="col-lg-4 bottom_middle">
                    리더스관리(주)<br/>
                    서울시 영등포구 양평동 2가 36-41 2층 1호<br/>
                    Copyrightⓒ 2019. Leaders All rights reserved                    
                </div>
                <div class="col-lg-4 bottom_right">
                    FAX : (02)2632-4745<br/>
                    TEL : (02)2677-6689<br/>
                    E-mail : rds0405@naver.com
                </div>
            </div>
        </div>
    </nav>
    <!-- top to button -->
    <button id="myBtn" title="Go to top">&nbsp<i class="fas fa-arrow-up"></i>&nbsp</button>

    <script> AOS.init(); </script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>