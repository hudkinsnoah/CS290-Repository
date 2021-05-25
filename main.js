var express = require('express');

var app = express();
var handlebars = require('express-handlebars').create({defaultLayout:'main'});
app.use(express.static('public'));

app.engine('handlebars', handlebars.engine);
app.set('view engine', 'handlebars');
app.set('port', 7959);


app.get('/', function(req,res){
	res.status(200);
	res.render('main')
});

app.get('/lawn', function(req,res){
	res.status(200);
	res.render('page1')
});

app.get('/flowers', function(req, res){
	res.status(200)
	res.render('page2')
});

app.get('/landscape', function(req,res){
	res.status(200)
	res.render('page3')
});


app.use(function(req,res){
  res.status(404);
  res.render('404');
});

app.use(function(err, req, res, next){
  console.error(err.stack);
  res.type('plain/text');
  res.status(500);
  res.render('500');
});

app.listen(app.get('port'), function(){
  console.log('Express started on http://localhost:' + app.get('port') + '; press Ctrl-C to terminate.');
});
