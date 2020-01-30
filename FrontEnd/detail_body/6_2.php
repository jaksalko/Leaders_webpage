<?php
    if(isset($_POST['email_send'])){
?>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="jumbotron" style="padding:10px;">                
                    입력하신 주소로 인증번호가 발송되었습니다<br>
                    새 비밀번호와 인증번호를 입력해 주세요
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="form_password">비밀번호 *</label>
                            <input id="newpwdr" type="password" name="name" class="form-control" placeholder="" required="required"
                                data-error="새 비밀번호를 입력해주세요">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="form_password">비밀번호 확인*</label>
                            <input id="newpwdc" type="password" name="name" class="form-control" placeholder="" required="required"
                                data-error="비빌번호확인을 입력해주세요">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="form_password">인증번호 *</label>
                            <input id="authcode" type="password" name="name" class="form-control" placeholder="" required="required"
                                data-error="인증번호를 입력해주세요">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <input type="button" onclick="checknew()" class="btn btn-success btn-send" value="입력 완료">

            </div>
        </div>
    </div>
<?php        
    } else {
?>

<div class="container">
    <div class="row">
        <div class="col-xl-12">
            회원가입시 입력하신 이름과 메일 주소를 입력해 주세요
            <hr>
            <form id="contact-form" method="post" action="./detail_body/emailprocess.php" role="form">
                <input type="hidden" name="type" value="6_2">
                <div class="controls">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="form_name">이름 *</label>
                                <input id="form_name" type="text" name="name" class="form-control" placeholder="ex)홍길동" required="required"
                                    data-error="이름을 입력해주세요">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="form_email">메일주소 *</label>
                                <input id="form_email" type="email" name="email" class="form-control" placeholder="yourEmail@~" required="required"
                                    data-error="메일주소를 확인하세요">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-success btn-send" value="입력 완료">
                </div>
            </form>
        </div>
    </div>
</div>

<?php
    }
?>
