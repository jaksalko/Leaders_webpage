<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <div class="row">

            <div class="col-xl-12">

                <form id="login-form" method="post" action="./detail_body/estimate_process.php" onsubmit="return checkoverlap()" enctype="multipart/form-data" role="form">
                    <div class="controls">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="form_name">아이디 *</label>
                                    <input id="form_id" type="text" name="id" class="form-control" placeholder="" required="required"
                                        data-error="아이디를 입력해주세요">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label for="form_name">&nbsp</label>
                                <div class="form-group">
                                    <input type="button" class="btn btn-success btn-send " onclick="check_overlap()" value="중복확인"><span id="overlap"></span>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="form_password">비밀번호 *</label>
                                    <input id="passwordr" type="password" name="password" class="form-control" placeholder="" required="required"
                                        data-error="이름을 입력해주세요">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="form_password">비밀번호 확인*</label>
                                    <input id="passwordc" type="password" name="passwordc" class="form-control" placeholder="" required="required"
                                        data-error="이름을 입력해주세요">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="form_name">이름 *</label>
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="ex)홍길동 *" required="required"
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
                                    <label for="form_phone">휴대번호 * </label>
                                    <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="010-xxxx-xxxx">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- <p>
                            <input id="file" type="file" class="form-control" />
                        </p>                         -->
                        <input type="submit" class="btn btn-success btn-send " value="입력 완료">

                    </div>
                </form>
            </div>
            <!-- /.8 -->
        </div>
        <!-- /.row-->
    </div>
    <!-- /.container-->

    <script>
        var test = false;
        function checkoverlap()
        {
            console.log("in check");
            if(test)
            {
                var id = document.getElementById("form_id").value;
                var pwd = document.getElementById("passwordr").value;
                var pwdc = document.getElementById("passwordc").value;
                if(pwd == pwdc)
                {
                    $.ajax({
                    type : "POST",
                    url : "http://localhost:3000/api/accountr/findkey",
                    data :{account_id : id},
                    success : function(status)
                    {
                    
                        
                        if(status.status)
                        {
                            alert(status.status);
                            return true;
                        }
                        else
                        {
                            alert(status.status);
                            document.getElementById("overlap").innerHTML = " 이미 사용 중인 아이디입니다.";
                            return false;
                        }
                        
                    }
                
                    });
                }
                else
                {
                    console.log(pwd+"  "+pwdc);
                    alert("비밀번호를 확인해주세요.");
                    return false;
                }
               

               
            }               
            else
            {
                alert("중복확인을 해주세요.");

                return false;
            }
                
        }
        
        var check_overlap = function(){
            var id = document.getElementById("form_id").value;
            console.log(id);
            $.ajax({
                type: "POST",
                url:"http://localhost:3000/api/accountr/findkey",
                data: {account_id : id},
                success: function(status){
                             
                    if(status.status)
                    {
                    
                        test = true;//사용가능
                        document.getElementById("overlap").innerHTML = " 사용가능한 아이디입니다.";
                        //console.log(test);
                    }
                    else
                    {
                        test= false;
                        //console.log(test);
                        document.getElementById("overlap").innerHTML = " 이미 사용 중인 아이디입니다.";
                    }
                    
                }
                
            });

        }

        window.onload = function(){
             console.log("onload");
            test = false;
        }
    
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
</body>
</html>