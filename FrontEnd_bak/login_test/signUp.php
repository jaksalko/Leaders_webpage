<?php
    $id=$_POST['id'];
    $pw=$_POST['pw'];
    $pwc=$_POST['pwc'];
    $name=$_POST['name'];
    $email=$_POST['email'];

    if($pw!=$pwc){
        echo "비밀번호가 일치하지 않습니다";
        echo "<a href=signUP.html>back page</a>";
        exit();
    }
    if($id==NULL || $pw==NULL || $name==NULL ||$email==NULL){
        echo "빈칸을 모두 채워주세요";
        echo "<a href=signUp.html>back page</a>";
        exit();
    }

    $mysqli=$mysqli_connect("localhost:3306","root","qetuo7463","testDB");
    $check = "SELECT * from user_info WHERE userid = '$id'"
    $result = $mysqli -> query($check);
    if($result->num_rows==1){
        echo "중복된 id입니다";
        echo "<a href=signUp.html>back page</a>";
        exit();
    }

    $signup=$mysqli_query($mysql,"INSERT INTO user_info (userid,userpw,name,email) VALUES('$id','$pw','$name','$email')");
    if($signup){
        echo "sign up success";
    }

?>