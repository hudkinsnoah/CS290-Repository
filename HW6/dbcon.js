mysql = require('mysql');
var pool = mysql.createPool({
  connectionLimit : 10,
  host            : 'classmysql.engr.oregonstate.edu',
  user            : 'cs290_hudkinsn',
  password        : '7957',
  database        : 'cs290_hudkinsn'
});

module.exports.pool = pool;

"INSERT INTO workouts (name, reps, weight, date, pounds) VALUES (row, 1, 40, 03-05-2018)"