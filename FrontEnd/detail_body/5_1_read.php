<?php
    $var = $_GET['num'];
?>
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
                                <label for="form_name">작성자</label>
                                <input readonly id="form_name" type="text" name="name" class="form-control" placeholder="" required="required"
                                    data-error="">
                                <label for="form_title">제목</label>
                                <input readonly id="form_title" type="text" name="title" class="form-control" placeholder="" required="required"
                                    data-error="">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="form_message">내용</label>
                        <textarea readonly id="form_message" name="message" class="form-control" placeholder="" rows="4" required="required"
                            data-error="" style="height:400px;"></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                    <!-- <p>
                        <input id="file" type="file" class="form-control" />
                    </p>                         -->
                    
                </div>
            </form>
        </div>
        <!-- /.8 -->
    </div>
    <!-- /.row-->
</div>
<!-- /.container-->
<script>

    window.onload = function(){
        var num = <?php echo $var ?>;

        $.ajax({
                type: "POST",
                url:"http://localhost:3000/api/boardr/count",
                data: {board_num : num},
                success: function(data){
                    console.log(data.id+"   " + data.title + "   " + data.content);
                    document.getElementById("form_name").value = data.id;
                    document.getElementById("form_title").value = data.title;
                    document.getElementById("form_message").innerHTML = data.content;
                }
                
            });
    }
</script>