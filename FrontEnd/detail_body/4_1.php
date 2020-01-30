<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <form id="contact-form" method="post" action="./detail_body/emailprocess.php" role="form">
                <input type="hidden" name="type" value="4_1">
            <!-- <div class="messages"></div> -->
                <div class="controls">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="form_company">회사명 *</label>
                                <input id="form_company" type="text" name="company" class="form-control" placeholder="ex)리더스관리(주)" required="required"
                                    data-error="회사이름을 입력해주세요">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="form_name">이름 *</label>
                                <input id="form_name" type="text" name="name" class="form-control" placeholder="ex)홍길동" required="required"
                                    data-error="이름을 입력해주세요">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="form_email">메일주소 *</label>
                                <input id="form_email" type="email" name="email" class="form-control" placeholder="yourEmail@~" required="required"
                                    data-error="메일주소를 확인하세요">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="form_phone">휴대번호 *</label>
                                <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="010-xxxx-xxxx">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="form_message">문의사항 *</label>
                        <textarea id="form_message" name="message" class="form-control" placeholder="내용입력" rows="4" required="required"
                            data-error="내용을 입력하세요"></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                    <input type="submit" class="btn btn-success btn-send" value="입력 완료">
                </div>
            </form>
        </div>
        <!-- /.8 -->
    </div>
    <!-- /.row-->
</div>