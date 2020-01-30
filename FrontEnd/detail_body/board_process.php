<?php
    session_start();
    $title = $_POST["title"];
    $content = $_POST["message"];
    //$name = $_POST["user_id"];
    $date = $_POST["date"];
    
    if(isset($_SESSION['login_id']))
    {
        $id = $_SESSION['login_id'];
    }else{echo "잘못된 접근";}
        
?>

<script>
    function postApply()
    {
        var title = "<?php echo $title; ?>";
        var content = "<?php echo $content; ?>";
        var id = "<?php echo $id; ?>";
        var date = "<?php echo $date; ?>";
        
        

        $.ajax({
            type: "POST",
            url:"http://localhost:3000/api/boardr/new",
            data: { board_title : title, board_content: content, board_id : id , board_time : date},
            success: function(data){
                console.log(data.status);
                location.href = "../detail.php?page=5-1";
            }
        });
        
    }

    window.onload = function()
    {   
        var id = "<?php echo $id; ?>";
        if(id != null)
            postApply();
    }

</script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>