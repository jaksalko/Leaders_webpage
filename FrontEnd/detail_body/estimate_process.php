<?php
    $id = $_POST["id"];
    $password = $_POST["password"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
?>

<script>
   

        function newAccount()
        {
            var id = "<?php echo $id; ?>";
            var password = "<?php echo $password; ?>";
            var name = "<?php echo $name; ?>";
            var email = "<?php echo $email; ?>";
            var phone = "<?php echo $phone; ?>";

           
            // example request with data object
            
            $.ajax({
                type: "POST",
                url:"http://localhost:3000/api/accountr/new",
                data:  {
                    account_id : id,
                    account_password: password,
                    account_name : name , 
                    account_email : email, 
                    account_phone : phone
                },
                success: function(data){
                    console.log(data);
                    header('Location: ../index.php');
                }
            });
           
            
        }

        window.onload = function()
        {
            newAccount();
        }

</script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>