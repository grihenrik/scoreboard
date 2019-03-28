<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Scoreboard</title>
        <script src="js/ajax.js"></script>
        <link rel="stylesheet" type="text/css" href="css/app.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    <body>
        <div class="scoreboard__info">
            <h1>Scoreboard</h1>
            <button onclick="getContent(document.querySelector('#output'), 'test')">Get Scores</button>
        </div>
        
        <div id="output"></div>
    </body>
</html>
