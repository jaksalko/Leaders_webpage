// models/Account.js

var mongoose = require('mongoose');
var uniqueValidator = require('mongoose-unique-validator');

var accounts_schema = new mongoose.Schema({
    
    account_name: 
    {
        type : String,
        required : true
    },  //이름
    account_phone:
    {
      type : String,
      required : true
    },  //핸드폰 번호
    account_id:
    {
      type : String,
      required : true,
      unique : true
    },      //아이디
    account_password: 
    {
      type : String,
      required : true
    }, //비밀번호
    account_email:
    {
      type : String,
      required : true
    },  //이메일
    //account_department: String,

    account_key:{
      type : String,
      required : true
    },//key -> 01....
    account_auth:
    {
      type : Boolean,
      required : true
    },//false -> true
    auth_code:
    {
      type : String,
      required : false
    }
  });
  accounts_schema.plugin(uniqueValidator);
  module.exports = mongoose.model('account',accounts_schema);//tablename is account+s