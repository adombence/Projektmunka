var http = require('http');
var fs = require('fs');

http.createServer((req, res) => {
    console.log('Listening on http://localhost:8080');

    if (req.url === '/' || req.url === '/index') {
        fs.readFile("../client/index.html", function (err, data) {
            res.writeHead(200, {
                'Content-Type': 'text/html'
            });
            res.write(data);
            res.end();
        });
    }
}).listen(8080);