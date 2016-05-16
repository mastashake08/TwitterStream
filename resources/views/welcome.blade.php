<!DOCTYPE html>
<html>
    <head>
        <title>Laravel Twitter Stream</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <script src="js/all.js"></script>

        <link href="css/app.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">
                  <ul id="tweets"></ul>
                  <hr>
                  <button class="btn btn-success" onclick="getStream()">Start Stream</button> <button class="btn btn-danger">Stop Stream</button></div>
            </div>
        </div>
    </body>
</html>
