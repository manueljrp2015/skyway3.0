//var net = require('net');
var sys = require('sys');
var cliente = new net.Socket();
cliente.setEncoding('utf8');
var puerto = '6000';

//conectar al servidor

cliente.connect(puerto, 'localhost', function() {
    console.log("ya esta conectado al servidor");
    cliente.write("ya podemos escribir");
});

//preparando entradas desde terminal
process.stdin.resume();

//cuando recibe datos los envia la servidor
process.stdin.on('data', function(data) {
    cliente.write(data);
});

//cuando se reciben datos los envia a la consola
cliente.on('data', function(data) {
    var find = data.search('firefox');
    if (find > 0) {
        console.log("has nombrado a un navegor");
    }
    console.log(data);
});

//cuando se cirra el servidor
cliente.on('close', function() {
    console.log("se cierra el servidor");
});