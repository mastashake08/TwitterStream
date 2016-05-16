<!DOCTYPE html>
<html>
    <head>
        <title>Laravel Twitter Stream</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <script src="http://192.168.10.10:6001/socket.io/socket.io.js"></script>
        <script>
        var socket = io.connect("http://192.168.10.10:6001/");
        console.log(socket);

        socket.on('tweet', function(msg){
          var node=document.createElement("li");
        var textnode=document.createTextNode(msg);
        node.appendChild(textnode);
        document.getElementById("tweets").appendChild(node);
        });
        </script>
        <script src="js/all.js"></script>

        <link href="css/app.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">
                  <ul id="tweets"></ul>
                  <hr>
                  <button class="btn btn-success" onclick="getStream()">Start Stream</button> <button class="btn btn-danger" onclick="stopStream()">Stop Stream</button></div>
            </div>
        </div>
    </body>
</html>
