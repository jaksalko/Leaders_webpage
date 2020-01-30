module.exports = function(app,Estimate)
{
    var estimate = new Estimate();
    //account.name = "taek";
    app.post('/api/estimater', function(req, res){
        estimate.estimate_name = req.body.estimate_name;     
        estimate.estimate_time = req.body.estimate_time;
        estimate.estimate_company = req.body.estimate_company;
        estimate.estimate_phone = req.body.estimate_phone;
        estimate.estimate_content = req.body.estimate_content;
        estimate.estimate_email = req.body.estimate_email;
      

        
        estimate.save(function(err){
            if(err){
                console.error(err);
                res.json({result: 0});
                return;
            }
    
            res.json({result: 1});
    
        });
    });

    app.get('/api/estimater', function(req,res){
        Estimate.find(function(err, estimates){
            if(err) return res.status(500).send({error: 'database failure'});
            res.json(estimates);
        })
    });
}