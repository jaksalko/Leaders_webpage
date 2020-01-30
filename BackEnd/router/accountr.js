module.exports = function(app,Account)
{
    var account = new Account();
    var crypto = require('crypto');
   
    app.post('/api/accountr/new', function(req, res){//회원가입
        
        account.account_id = req.body.account_id;
        account.account_phone = req.body.account_phone;
        account.account_name = req.body.account_name;
        account.account_email = req.body.account_email;
        account.account_key = Math.floor(Math.random() * 100); //임시


        //account.account_password = req.body.account_password;
        var hmac = crypto.createHmac('sha256',account.account_key);
        var pass = hmac.update(req.body.account_password).digest('hex');
        console.log(pass);
        account.account_password = pass;
       
        
        
        account.account_auth = false;
        
        


        account.save(function(err){
            if(err){
                console.error(err);
                res.json({result: 0});
                return;
            }    
            res.json({result: 1});   
        });
    });



    app.post('/api/accountr/check', function(req, res){//로그인 return status:true or false
        
       var account_email = req.body.account_email;
       //console.log(account_email);
       var account_password = req.body.account_password;
       var query = Account.find().where('account_id').equals(account_email);
        //account.account_department = req.body.account_department;
        //var query = Account.find().where('account_email').equals(account_email)
        //                            .where('account_password').equals(account_password);

        query.exec(function (err,results){
            if(err)
            {
                console.error(err);
                res.json({result: 0});
                return;
            }
            else
            { 
                //checkLogin(someValue);
                if(results.length !=0)
                {
                    
                    var hmac = crypto.createHmac('sha256',results[0].account_key);
                    var pass = hmac.update(account_password).digest('hex');
                    if(pass == results[0].account_password)
                    {
                        console.log("success login...");
                        console.log("hello!"+ results[0].account_key);
                        res.json({status:true});
                    }
                    else
                    {
                        res.json({status:false});
                        console.log("login failed... check your password....");
                    }
                       
                    
                    
                }
                else{ 
                    res.json({status:false});
                    console.log("login failed... check your email....");
                }
               
            }
        })

       
    });


    app.get('/api/accountr', function(req,res){
        Account.find(function(err, accounts){
            if(err) return res.status(500).send({error: 'database failure'});
            res.json(accounts);
        })
    });


    app.post('/api/accountr/idcheck', function(req,res){//get all id
        var data = $_POST["accouunt_name"];
        console.log(data);
        res.status(true);


    });
    app.post('/api/accountr/findkey', function(req,res){// get last key number

        var input = req.body.account_id;

        var query = Account.find().where('account_id').equals(input)
        query.exec(function (err, someValue) {
            if (err)
            {
                console.error(err);
                res.json({result: 0});
                return;
            }
            else
            {
                if(someValue.length !=0)//같은게있으면안댐
                {
                    res.json({status:false});
                }
                else
                {
                    res.json({status:true});
                }




            }
            /*
            jsonToArray(someValue);//get all id
            //compare input data with array
            //if the data is unique return true else return false
            res.json(someValue);
            //res.json({status : true});
            //res.json({status : false});
            */
        });
    });

    app.post('/api/accountr/findpwd', function(req,res){// 비밀번호 찾기 위해 이름과 주소 비교

        var name = req.body.account_name;
        var email = req.body.account_email;

        var query = Account.find().where('account_name').equals(name)
                                    .where('account_email').equals(email);

        query.exec(function (err, someValue) {
            if (err)
            {
                console.error(err);
                res.json({result: 0});
                return;
            }
            else
            {
                if(someValue.length == 0)
                {
                    console.log(someValue.length);
                    console.log("false");
                    res.json({status:false});
                }
                else
                {
                    console.log(someValue.length);
                    console.log(name +"        " +email);
                    res.json({status:true});
                }






            }
            /*
            jsonToArray(someValue);//get all id
            //compare input data with array
            //if the data is unique return true else return false
            res.json(someValue);
            //res.json({status : true});
            //res.json({status : false});
            */
        });
    });

    app.post('/api/accountr/inputauth', function(req,res){// input authcode for change pwd

        var email = req.body.account_email;
        var code = req.body.auth_code;
        
        Account.findOne({account_email : email},function(err,doc){
            if(err){console.log(err);}
            else
            {
                console.log(code);
                doc.auth_code = code;
                doc.save();
                res.json(
                    {   
                        authcode : doc.auth_code
                    });
            }
        });
    });

        app.post('/api/accountr/authcode', function(req,res){// input authcode for change pwd

            
            var code = req.body.auth_code;
            
            Account.findOne({auth_code : code},function(err,doc){
                if(err){console.log(err);}
                else
                {
                    if(doc == null )
                    {
                        res.json({status : false});
                    }
                    else
                    {
                        res.json({status : true});
                    }
                }
            });
            



            
            /*
            jsonToArray(someValue);//get all id
            //compare input data with array
            //if the data is unique return true else return false
            res.json(someValue);
            //res.json({status : true});
            //res.json({status : false});
            */
        
    });

    app.post('/api/accountr/changepwd', function(req, res){//로그인 return status:true or false
        
        
        var account_password = req.body.account_password;
        var authcode = req.body.auth_code;
        console.log(account_password+"  "+authcode);
         Account.findOne({auth_code : authcode},function (err,doc){
             if(err)
             {
                 console.error(err);
                 res.json({result: 0});
                 
             }
             else
             { 
                 //checkLogin(someValue);
                 if(doc != null)
                 {
                     
                    var hmac = crypto.createHmac('sha256',doc.account_key);
                    var pass = hmac.update(account_password).digest('hex');
                    console.log(pass);
                    doc.account_password = pass;
                    doc.save();
                    res.json({status:true});
                     
                 }
                 else{ 
                     
                     res.json({status:false});
                     
                 }
                
            }
         });
 
        
     });
 




}
//function
//POST:회원가입 -> 1 item
//GET:로그인 - only find my account -> 1 item
/*
{
    {

    }
}
*/