module.exports = function(app,Apply)
{
    var apply = new Apply();
    //account.name = "taek";
    app.post('/api/applyr', function(req, res){
        apply.apply_name = req.body.apply_name;     
        apply.apply_time = req.body.apply_time;
        apply.apply_birth = req.body.apply_birth;
        apply.apply_phone = req.body.apply_phone;
        apply.apply_content = req.body.apply_content;
        apply.apply_email = req.body.apply_email;
        apply.apply_department = req.body.apply_department;

        
        apply.save(function(err){
            if(err){
                console.error(err);
                res.json({result: 0});
                return;
            }
    
            res.json({result: 1});
    
        });
    });

    app.get('/api/applyr', function(req,res){
        Apply.find(function(err, applies){
            if(err) return res.status(500).send({error: 'database failure'});
            res.json(applies);
        })
    });
    app.get('/api/applyr/applyname', function(req,res){

        var query = Apply.find({}).select('apply_name -_id');
        query.exec(function (err, someValue) {
            if (err) return next(err);
            res.json(someValue);
        });


        
    });
}