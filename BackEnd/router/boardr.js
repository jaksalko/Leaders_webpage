module.exports = function(app,Board)
{
    var board = new Board();
   
    app.post('/api/boardr/new', function(req, res){//게시판 글 작성 save? create? 
        var date = new Date();
        var query = Board.find({});//find all for board_num
       

        query.exec(function (err,results){
        if(err)
        {
            console.error(err);
            res.json({result: 0});
            return;
        }
        else
        { 
            console.log(results.length);
            board.board_num = results.length;
            board.board_id = req.body.board_id;     
            board.board_time = date.toISOString().split('T')[0];
            board.board_title = req.body.board_title;
            board.board_content = req.body.board_content;
            board.click = 0;

            
            /*board.save(function(err){
                if(err){
                    console.error(err);
                    res.json({result: 0});
                    return;
                }
        
                res.json({result: 1});
        
            });*/
            Board.create(board, function(err){
                if(err){console.error(err); res.json({result : 0}); return; }
                else{
                    console.log("board created");
                    res.json({status:true});
                }

                
            });
            
         
       

        }
        })
        //console.log("k  "+board.board_num);
        //date.setMonth(date.getMonth()+1);
       
       
        
     
    });

    app.get('/api/boardr/getlist', function(req,res){// 전체 게시판리스트 불러오기
        Board.find(function(err, boards){
            if(err) return res.status(500).send({error: 'database failure'});
            res.json(boards);
        })
    });

    app.post('/api/boardr/count', function(req,res){//click -> 조회수 ++
        var num = req.body.board_num;
        Board.findOne({board_num : num}, function(err,doc){
            if(err){console.log(err);}
            else
            {
                doc.click = doc.click + 1;
                doc.save();
                res.json(
                    {   
                        count : doc.click,
                        content : doc.board_content,
                        title : doc.board_title,
                        id : doc.board_id
                    }
                    );
            }
            
        })

    }
    )
   

   
}