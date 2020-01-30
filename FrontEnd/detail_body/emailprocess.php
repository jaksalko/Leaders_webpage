<script>
   

    function setauthcode(email,code)
    {
        $.ajax({
                type:"POST",
                url:"http://localhost:3000/api/accountr/inputauth",
                data:{
                    account_email : email,
                    auth_code : code
                    },
                success : function(data){
                    console.log(data.authcode);
                }
            });
            

    }

</script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<?php
    include_once('../PHPMailer/PHPMailerAutoload.php');
    $type = $_POST['type'];

    function mailer($fname, $fmail, $to, $subject, $content, $type=0, $file="", $cc="", $bcc="")
    {
        if ($type != 1) $content = nl2br($content);
        // type : text=0, html=1, text+html=2
        $mail = new PHPMailer(); // defaults to using php "mail()"
        $mail->IsSMTP();
            //   $mail->SMTPDebug = 2;
        $mail->SMTPSecure = "ssl";
        $mail->SMTPAuth = true;
        $mail->Host = "smtp.naver.com";
        $mail->Port = 465;
        $mail->Username = "proxima4311@naver.com";
        $mail->Password = "DF012987$!!";
        $mail->CharSet = 'UTF-8';
        $mail->From = $fmail;
        $mail->FromName = $fname;
        $mail->Subject = $subject;
        $mail->AltBody = ""; // optional, comment out and test
        $mail->msgHTML($content);
        $mail->addAddress($to);
        if ($cc)
                $mail->addCC($cc);
        if ($bcc)
                $mail->addBCC($bcc);
        if ($file != "") {
                foreach ($file as $f) {
                    $mail->addAttachment($f['path'], $f['name']);
                }
        }
        if ( $mail->send() ) echo "성공";
        else echo "실패";
    }
    if($type==='3_1'){
        $file[] = array( "name" => $_FILES['folio']['name'], "path" => $_FILES['folio']['tmp_name'] );
        $name = $_POST['name'];
        $date = $_POST['date'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $folio = $_FILES['folio']['tmp_name'];
    

        $story = "
            <h2>리더스관리(주)_채용신청서</h2>
            <hr>
            <h3>
            이름 : $name
            생일 : $date 
            이메일 : $email 
            번호 : $phone 
            <br>
            -내용-
            <br>
            $message
            </h3>
        ";
        mailer("리더스관리(주)_채용신청_$name","proxima4311@naver.com","proxima4311@naver.com","리더스관리(주)_채용신청서_$name",$story,0,$file );    
        header('Location: ../index.php');
    } else if($type==='4_1'){
        $company = $_POST['company'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $story = "
        <h2>리더스관리(주)_견적신청서</h2>
        <hr>
        <h3>
        이름 : $name
        회사명 : $company 
        이메일 : $email 
        번호 : $phone 
        <br>
        -내용-
        <br>
        $message
        </h3>
    ";
        mailer("리더스관리(주)_채용신청_$company","proxima4311@naver.com","proxima4311@naver.com","리더스관리(주)_견적신청서_$company",$story);    
        header('Location: ../index.php');
    } else if($type==='6_2'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $n=16; 
        function getName($n) { 
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
            $randomString = ''; 
        
            for ($i = 0; $i < $n; $i++) { 
                $index = rand(0, strlen($characters) - 1); 
                $randomString .= $characters[$index]; 
            } 
        
            return $randomString; 
        } 
        $message = getName($n);//바꿔야함
        $story = "
        <h2>리더스관리(주)_보안인증번호</h2>
        <hr>
        <h3>
        이름 : $name
        이메일 : $email 
        <br>
        -내용-
        <br>
        인증번호 : $message
        </h3>
    ";
        echo "<script type='text/javascript'>setauthcode('$email', '$message');</script>";
       
        mailer("리더스관리(주)_비밀번호찾기","proxima4311@naver.com",$email,"리더스관리(주)_비밀번호찾기",$story);
        
        
    }
    
    else {
        echo '잘못된 접근입니다';
    }
?>
<form action="../detail.php?page=6-2" method="post">
    <input type="hidden" name="email_send" value="true">
</form>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
   

    if('<?php echo $type ?>' ==='6_2'){
        $("form:first").submit();
    } else {

    }

</script>
