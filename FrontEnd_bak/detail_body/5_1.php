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
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#1">1</a></li>
            <li class="page-item"><a class="page-link" href="#2">2</a></li>
            <li class="page-item"><a class="page-link" href="#3">3</a></li>
            <li class="page-item"><a class="page-link" href="#4">4</a></li>
            <li class="page-item"><a class="page-link" href="#5">5</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </div>
</div>    

<script>
    function getAjax()
    {
        $.ajax({
            type: "GET",
            url : "http://localhost:3000/api/boardr/getlist",
            success : function(data){
                console.log(data); 
                
                //번호 제목 작성자 날짜 조회수
                for(var i =data.length-1 ; i >=0 ; i--)
                {
                    console.log(data[i].board_title);
                    var tr = document.createElement("tr");
                    tr.setAttribute("id", data[i].board_num);
                    var th1 = document.createElement("th");              
                    var tx1 = document.createTextNode(data[i].board_num);
                    var th2 = document.createElement("th");
                    var tx2 = document.createTextNode(data[i].board_title);
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


            }
    });
       
    }

    function getboard()
    {
        var num = this.parentElement.id;
        window.location.href = "./detail.php?page=5-1&notice=read&num="+num;
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
    window.onload = getAjax();
</script>
