// models/apply.js

var mongoose = require('mongoose');
var apply_schema = new mongoose.Schema({
    apply_name: String,
    apply_time: String,
    apply_email: String,
    apply_phone: String,
    apply_birth: String,
    apply_content: String,
    apply_department: String
  });

  module.exports = mongoose.model('apply',apply_schema);//tablename is apply+s