var http = require('http');
var fs = require('fs');
var port = process.argv[2];
var file = process.argv[3];



const server = http.createServer(function onRequest(request, response) {
    if (file){
        
        fs.readFile(file, function(err, fileContents){
            if (err) {
                response.writeHead(200, 'Content-Type', 'text/html');
                response.write("no file");
                response.end();    
            }
            else {
                response.writeHead(200, 'Content-Type', 'text/html');
                response.write(fileContents);
                response.end();
            }
        }); 
         
    }
    else if (request.url == '/home') {
        response.writeHead(200, 'Content-Type', 'text/html');
        response.write('<h1>Welcome to the Home Page<h1>');
        response.end();
    }
    else if (request.url == '/getData') {
        response.writeHead(200, {"Content-Type": "application/json"});
        response.write('{"name":"Heather Mason","class":"cs313"}');
        response.end();
    }
    else {
        response.writeHead(404, {"Content-Type": "text/html"});
        response.write('Page Not Found');
        response.end();
    }
    //response.end();
}).listen(port);