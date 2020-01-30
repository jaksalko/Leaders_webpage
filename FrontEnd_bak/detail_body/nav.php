<!-- upper navbar -->
<nav id="top_nav" class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
    <button 
        class="navbar-toggler" 
        type="button" 
        data-toggle="collapse" 
        data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <span>
                        <img src="img/logo.png" style="margin-top:-10px;" alt="logo" class="logo"/>
                    </span>
                    <span class="logo_text">
                        &nbsp리더스관리(주)
                    </span>
                </a>
            </li>        
        </ul>
    
        <ul class="navbar-nav ml-auto">
            <li class="right-item nav-item dropdown">
                <a class="nav-link" href="#" id="navbardrop" data-toggle="dropdown">
                    <i class="far fa-building"></i>
                    회사소개
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="detail.php?page=1-1">인사말</a>
                    <a class="dropdown-item" href="detail.php?page=1-2">조직도</a>
                    <a class="dropdown-item" href="detail.php?page=1-3">리더스역사</a>
                    <a class="dropdown-item" href="detail.php?page=1-4">장비보유현황</a>
                    <a class="dropdown-item" href="detail.php?page=1-5">찾아오는 길</a>
                </div>
            </li>
            <li class="right-item nav-item dropdown">
                <a class="nav-link" href="#" id="navbardrop" data-toggle="dropdown">
                    <i class="fas fa-sitemap"></i>
                    사업분야
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="detail.php?page=2-1">위생관리용역</a>
                    <a class="dropdown-item" href="detail.php?page=2-2">소독업</a>
                    <a class="dropdown-item" href="detail.php?page=2-3">시설관리용역</a>
                    <a class="dropdown-item" href="detail.php?page=2-4">주차관리</a>
                    <a class="dropdown-item" href="detail.php?page=2-5">시설경비업</a>
                    <a class="dropdown-item" href="detail.php?page=2-6">저수조청소업</a>
                    <a class="dropdown-item" href="detail.php?page=2-7">덕트청소업</a>
                    <a class="dropdown-item" href="detail.php?page=2-8">배관설비업</a>
                </div>
            </li>
            <li class="right-item nav-item">
                <a class="nav-link" href="detail.php?page=3-1">
                    <i class="fas fa-user-tie"></i>                        
                    채용신청
                </a>
            </li>
            <li class="right-item nav-item">
                <a class="nav-link" href="detail.php?page=4-1">
                    <i class="fas fa-file-contract"></i>
                    견적신청
                </a>
            </li>
            <li class="right-item nav-item">
                <a class="nav-link" href="detail.php?page=5-1">
                    <i class="fas fa-pen-nib"></i>
                    게시판
                </a>
            </li>
            <li class="right-item nav-item">
                <?php
                    // session_start();
                    if(isset($_SESSION['login_id'])){
                ?>
                
                   <a class="nav-link" style="cursor : pointer;" onclick="logout()">
                        <i class="fas fa-sign-in-alt"></i>                        
                        로그아웃
                    </a>
                 <?php
                    } else {
                ?>
                    <a class="nav-link" style="cursor : pointer;" onclick="login('on')">
                        <i class="fas fa-sign-in-alt"></i>                        
                        로그인
                    </a>
                <?php
                    }
                ?>
            </li>
            <!-- dropDown -->
        </ul>
    </div>
</nav>

<form id="lp2" action="./detail_body/logout_process.php" method="post">
    <input type="hidden" name="ret_addr" id="ret_addr">
</form>


<?php
    require_once('detail_body/login.php');
?>

<script>
    function logout(){
        document.getElementById('ret_addr').value = window.location.href;
        $("form#lp2").submit();

        alert('logOut!');
    }

</script>