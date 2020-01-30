<?php
    if(isset($_POST['check'])){
        require_once('./detail_body/SignUp.php');
    } else {
?>

<fieldset>
    <h5>개인정보 동의절차</h5>
    <form action="./detail.php?page=6-1" method="post">
        <textarea readonly name="" id="" style="width:100%">zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzasdasd</textarea><br>
        <input type="checkbox" name="check" required>
        본인은 위의 내용을 확인하고 동의 하였습니다.<br><br>
        <input type="submit" class="btn btn-light" value="다음">
    </form>
</fieldset>

<?php
    }
?>