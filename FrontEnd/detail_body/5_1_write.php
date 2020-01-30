<div class="container">
    <div class="row">

        <div class="col-xl-12">

            <form id="contact-form" method="post" action="./detail_body/board_process.php" enctype="multipart/form-data" role="form">
                <input type="hidden" name="user_id" value="awdss">
                <input type="hidden" name="date" value="2019-12-30">
                <div class="controls">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form_name">제목 *</label>
                                <input id="form_name" type="text" name="title" class="form-control" placeholder="제목" required="required"
                                    data-error="제목을 입력해주세요">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="form_message">내용 *</label>
                        <textarea id="form_message" name="message" class="form-control" placeholder="내용입력" rows="4" required="required"
                            data-error="내용을 입력하세요" style="height:400px;"></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                    <!-- <p>
                        <input id="file" type="file" class="form-control" />
                    </p>                         -->
                    <input type="submit" class="btn btn-success btn-send btn-light float-right" value="입력 완료">
                </div>
            </form>
        </div>
        <!-- /.8 -->
    </div>
    <!-- /.row-->
</div>
<!-- /.container-->