// models/board.js

var mongoose = require('mongoose');
var uniqueValidator = require('mongoose-unique-validator');

var board_schema = new mongoose.Schema({
    board_id:
    {
      type : String,
      required : true
    },
    board_time: {
      type : String,
      required : true
    },
    board_title: {
      type : String,
      required : true
    },
    board_content:  {
      type : String,
      required : true
    },
    board_num :  {
      type : Number,
      required : true
    },
    click :  {
      type : Number,
      required : true
    },
    
  });
  board_schema.plugin(uniqueValidator);
  module.exports = mongoose.model('board',board_schema);//tablename is board+s