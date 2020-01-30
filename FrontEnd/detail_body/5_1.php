<?php
if(isset($_GET['num']))
{
    $num = $_GET['num'];
}
else
{
    $num = 0 ;
}

?>

<script>
    var page = 0;
    
    function getAjax(num)
    {
        $.ajax({
            type: "GET",
            url : "http://localhost:3000/api/boardr/getlist",
            success : function(data){
                console.log(data); 

                page = (data.length/5)+1;//length 9 page 2(0,1) #1-> for (data.length-1)-page*5 -> (data.length-1)-page+ ~ i >= data.length
                
                for(var i = (data.length-1)-(num*5) ; i > (data.length-1)-((num+1)*5) ; i--)
                {
                    console.log(data[i].board_title);
                    var tr = document.createElement("tr");
                    tr.setAttribute("id", data[i].board_num);
                    var th1 = document.createElement("th");              
                    var tx1 = document.createTextNode(data[i].board_num);
                    var th2 = document.createElement("th");
                    var tx2 = document.createTextNode(data[i].board_title);
                    th2.style.cursor = "pointer";
                    th2.onclick = getboard;
                    var th3 = document.createElement("th");
                    var tx3 = document.createTextNode(data[i].board_id);
                    var th4 = document.createElement("th");
                    var tx4 = document.createTextNode(data[i].board_time);
                    var th5 = document.createElement("th");
                    var tx5 = document.createTextNode(data[i].click);

                    th1.appendChild(tx1);
                    th2.appendChild(tx2);
                    th3.appendChild(tx3);
                    th4.appendChild(tx4);
                    th5.appendChild(tx5);

                    tr.appendChild(th1);
                    tr.appendChild(th2);
                    tr.appendChild(th3);
                    tr.appendChild(th4);
                    tr.appendChild(th5);

                    document.getElementById("table").appendChild(tr);
                }
                //번호 제목 작성자 날짜 조회수
                /*for(var i =data.length-1 ; i >=0 ; i--)
                {
                    console.log(data[i].board_title);
                    var tr = document.createElement("tr");
                    tr.setAttribute("id", data[i].board_num);
                    var th1 = document.createElement("th");              
                    var tx1 = document.createTextNode(data[i].board_num);
                    var th2 = document.createElement("th");
                    var tx2 = document.createTextNode(data[i].board_title);
                    th2.style.cursor = "pointer";
                    th2.onclick = getboard;
                    var th3 = document.createElement("th");
                    var tx3 = document.createTextNode(data[i].board_id);
                    var th4 = document.createElement("th");
                    var tx4 = document.createTextNode(data[i].board_time);
                    var th5 = document.createElement("th");
                    var tx5 = document.createTextNode(data[i].click);

                    th1.appendChild(tx1);
                    th2.appendChild(tx2);
                    th3.appendChild(tx3);
                    th4.appendChild(tx4);
                    th5.appendChild(tx5);

                    tr.appendChild(th1);
                    tr.appendChild(th2);
                    tr.appendChild(th3);
                    tr.appendChild(th4);
                    tr.appendChild(th5);

                    document.getElementById("table").appendChild(tr);
                }*/


            }
    });
       
    }

    function getboard()
    {
        var num = this.parentElement.id;
        <?php
        if(isset($_SESSION['login_id'])){
            ?>
            window.location.href = "./detail.php?page=5-1&notice=read&num="+num;
            <?php
        } else {
            ?>
            alert('로그인을 해야 이용하실 수 있습니다.');
            <?php
        }
        ?>
        /*$.post("http://localhost:3000/api/boardr/count",
            {board_num : num},
            function(data)
            {
                alert(data.content);
            });*/

            /*$.ajax({
                type: "POST",
                url:"http://localhost:3000/api/boardr/count",
                data: {board_num : num},
                success: function(data){
                    alert(data.content);
                }
                
            });*/
        
    }
    window.onload =function(){
        var num = <?php echo $num; ?>;
        getAjax(num);
       
    }
</script>


<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>번호</th>
                <th>제목</th>
                <th>작성자</th>
                <th>날짜</th>
                <th>조회수</th>
            </tr>
        </thead>
        <tbody id="table">
           
           
        </tbody>
    </table>

    <hr/>
    <div class="row float-right pr-3">
        <button class="btn btn-light" onclick="window.location.href='./detail.php?page=5-1&notice=write'">글쓰기</button>
    </div>    <!-- <a class="btn btn-default">글쓰기</a> -->
    <div class="row justify-content-center pt-5">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="detail.php?page=5-1&num=prev">Previous</a></li>
            <li class="page-item"><a class="page-link" href="detail.php?page=5-1&num=0">1</a></li>
            <li class="page-item"><a class="page-link" href="detail.php?page=5-1&num=1">2</a></li>
            <li class="page-item"><a class="page-link" href="detail.php?page=5-1&num=2">3</a></li>
            <li class="page-item"><a class="page-link" href="detail.php?page=5-1&num=next">Next</a></li>
        </ul>
    </div>
</div>    

