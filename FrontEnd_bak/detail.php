<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>리더스관리(주)</title>

    <link rel="icon" type="image/png" href="img/logo.png"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/design.css">
    <link rel="stylesheet" href="css/detail.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="js/design.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/detail.js"></script>
    <script src="js/login.js"></script>
    <script>
        function checknew()
        {
            var pwdr = document.getElementById("newpwdr").value;
            var pwdc = document.getElementById("newpwdc").value;
            var authcode = document.getElementById("authcode").value;
            var codecheck = false;
           
            if(pwdr == pwdc)
            {
                $.ajax({
                type : "POST",
                url : "http://localhost:3000/api/accountr/authcode",
                data : {auth_code : authcode},
                success : function(status){
                    console.log(status.status);
                    if(status.status)
                    {
                        changepwd(pwdr,authcode);
                    }
                    else{ alert("인증번호를 확인하세요.");}
                }
                });
            }
            else
            {
                alert("비밀번호를 확인하세요.");
            }
        }
        function changepwd(pwd,authcode)
        {
            $.ajax({
                type : "POST",
                url : "http://localhost:3000/api/accountr/changepwd",
                data : {
                    auth_code : authcode,
                    account_password : pwd
                },
                success : function(status){
                    console.log(status.status);
                    
                }
                });
        }
    </script>
</head>

<body>
    <?php
        require_once("./session.php");
        require_once("detail_body/urlcheck.php");
        require_once('detail_body/nav.php');
    ?>




    <div>
        <img src="img/rounge.jpg" style="width:100%; height:300px; object-fit: cover;" alt="upperimg"/>
    </div>
    <?php
    $L_menu=array();
    $index=1;
    $page_number=1;
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        if($page==="1-1"){
            //회사소개-인사말
            $page_number=1;
            $index=1;            
        } else if($page==="1-2"){
            //회사소개-조직도
            $page_number=1;
            $index=2;            
        } else if($page==="1-3"){
            //회사소개-리더스역사
            $page_number=1;
            $index=3;            
        } else if($page==="1-4"){
            //회사소개-장비보유현황
            $page_number=1;
            $index=4;            
            
        } else if($page==="1-5"){
            //회사소개-찾아오는 길
            $page_number=1;
            $index=5;            
        } else if($page==="2-1"){
            //사업분야-위생관리용역
            $page_number=2;
            $index=1;            
            
        } else if($page==="2-2"){
            //사업분야-시설물세척청소
            $page_number=2;
            $index=2;            
            
        } else if($page==="2-3"){
            //사업분야-시설관리용역
            $page_number=2;
            $index=3;            

        } else if($page==="2-4"){
            //사업분야-주차관리
            $page_number=2;
            $index=4;            
            
        } else if($page==="2-5"){
            //사업분야-시설경비업
            $page_number=2;
            $index=5;            

        } else if($page==="2-6"){
            //사업분야-저수조청소업
            $page_number=2;
            $index=6;            

        } else if($page==="2-7"){
            //사업분야-덕트청소업
            $page_number=2;
            $index=7;            

        } else if($page==="2-8"){
            //사업분야-배관설비업
            $page_number=2;
            $index=8;            

        } else if($page==="3-1"){
            //채용신청
            $page_number=3;
            $index=1;            

        } else if($page==="4-1"){
            //견적신청
            $page_number=4;
            $index=1;            

        } else if($page==="5-1"){
            //게시판
            $page_number=5;
            $index=1;            
            
        } else if($page==="6-1"){
            //로그인
            $page_number=6;
            $index=1;            
            
        } else if($page==="6-2"){
            //로그인
            $page_number=6;
            $index=2;            
            
        } else {
            $page="error";
            //error
        }
        $page_name=array('회사소개','사업분야','채용신청','견적신청','게시판','로그인');
        if($page_number===1) $L_menu = array('인사말','조직도','리더스역사','장비보유현황','찾아오는 길');
        if($page_number===2) $L_menu = array('위생관리용역','소독업','시설관리용역','주차관리','시설경비업','저수조청소업','덕트청소업','배관설비업');
        if($page_number===3) $L_menu = array('채용신청');
        if($page_number===4) $L_menu = array('견적신청');
        if($page_number===5) $L_menu = array('게시판');
        if($page_number===6) $L_menu = array('회원가입','비밀번호찾기');

    } else {

    }
    ?>
    <!-- body -->
    <div class="container mainbody">
    <div class="middle_block row">
        <!-- left banner -->
        <div class="left_menu col-lg-2">
            <?php
                if(isset($_GET['page'])){
                    if($page==="error"){
                        echo '';

                    } else {
                        echo '<div class="row left_menu_top">'.$page_name[$page_number-1].'</div>';
                
                        for($i=0;$i<count($L_menu);$i++){
                            echo '<div class="row left_menu_bottom" onclick="page_move('.$page_number.','.($i+1).')">'.$L_menu[$i].'</div>';                    
                        }
    
                    }
                } else {
                    echo '';
                }
            ?>

        </div>
        <!-- right body -->
        <div class="detail_contents col-lg-8">
            <!-- body header -->
            <div class="detail_header">
                <h2>
                    <?php 
                        if(isset($_GET['page'])){
                            if($page==="error"){
                                echo '잘못된 경로 입니다';
                            } else {
                                echo $L_menu[$index-1]; 
                            }
                        } else {
                            echo '잘못된 경로 입니다';
                        }
                    
                    ?>
                </h2>
            </div>
            <!-- lower body -->
            <div class="detail_body">
                <?php
                    if(isset($_GET['page'])){
                        if($page==="1-1") require_once('detail_body/1_1.php');
                        else if($page==="1-2") require_once('detail_body/1_2.php');
                        else if($page==="1-3") require_once('detail_body/1_3.php');
                        else if($page==="1-4") require_once('detail_body/1_4.php');
                        else if($page==="1-5") require_once('detail_body/1_5.php');
                        else if($page==="2-1") require_once('detail_body/2_1.php');
                        else if($page==="2-2") require_once('detail_body/2_2.php');
                        else if($page==="2-3") require_once('detail_body/2_3.php');
                        else if($page==="2-4") require_once('detail_body/2_4.php');
                        else if($page==="2-5") require_once('detail_body/2_5.php');
                        else if($page==="2-6") require_once('detail_body/2_6.php');
                        else if($page==="2-7") require_once('detail_body/2_7.php');
                        else if($page==="2-8") require_once('detail_body/2_8.php');
                        else if($page==="3-1") require_once('detail_body/3_1.php');
                        else if($page==="4-1") require_once('detail_body/4_1.php');
                        else if($page==="5-1") {
                            if(isset($_GET['notice'])){
                                if($_GET['notice']==="write"){
                                    require_once('detail_body/5_1_write.php');
                                } else if($_GET['notice']==="read"){
                                    //echo 'hdi';
                                    require_once('detail_body/5_1_read.php');
                                } else {
                                    echo "잘못된 접근입니다";
                                }
                            } else {
                                require_once('detail_body/5_1.php');
                            }
                        }
                        else if($page==="6-1") require_once('detail_body/6_1.php');
                        else if($page==="6-2") require_once('detail_body/6_2.php');
                        else {
                            echo '잘못된 경로입니다<br>올바른 경로로 접근해주세요<br><br><br><br><br>';
                        }
                    } else {
                        echo '잘못된 경로 입니다<br>올바른 경로로 접근해주세요<br><br><br><br><br>';
                    }

                ?>
            </div>
        </div>
    </div>
    </div>



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