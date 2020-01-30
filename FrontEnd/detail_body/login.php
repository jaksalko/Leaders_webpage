<div class="limiter" id="login">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login_form">
            <form class="login100-form validate-form">
                <span class="login100-form-title">
                    Member Login
                </span>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100" id="email" type="text" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100" id="password" type="password" name="pass" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>
                
                <div class="container-login100-form-btn">
                    <div class="login100-form-btn" onclick="check()" >
                        Login
                </div>
                </div>

                <div class="text-center p-t-12">
                    <span class="txt1">
                        Forgot
                    </span>
                    <a class="txt2" href="./detail.php?page=6-2">
                        Username / Password?
                    </a>
                </div>

                <div class="text-center p-t-136">
                    <a class="txt2" href="./detail.php?page=6-1">
                        Create your Account
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>
            </div>
            <div class="login_exit" onclick="login('off')">Close</div>
        </div>
    </div>
</div>
<form id="lp" action="./detail_body/login_process.php" method="post">
    <input type="hidden" name="id" id="name_process">
    <input type="hidden" name="ret_addr_in" id="ret_addr_in">

</form>
<script>

    var check = function(){
        var email = document.getElementById("email").value;
        //console.log("login js  "+email);
        var password = document.getElementById("password").value;
     
        // example request with data object

        $.ajax({
            type: "POST",
            url:"http://localhost:3000/api/accountr/check",
            data:  { account_email : email, account_password : password},
            success: function(data)
                { 
                    console.log(data.status);
                    if(data.status){
                        document.getElementById('ret_addr_in').value = window.location.href;
                        document.getElementById('name_process').value=email;
                        $("form#lp").submit();
                    } else {            
                    }
                }
            
        });
    }
 
</script>

