var http = require('http');

var server = http.createServer(function (req, res) {
    res.end('Hello world');
});

server.listen('8000');

console.log('this server listen to port localhost:8000');