// models/estimate.js

var mongoose = require('mongoose');
var estimate_schema = new mongoose.Schema({
    estimate_name: String,
    estimate_time: String,
    estimate_email: String,
    estimate_phone: String,
    estimate_company: String,
    estimate_content: String
    
  });

  module.exports = mongoose.model('estimate',estimate_schema);//tablename is estimate+s