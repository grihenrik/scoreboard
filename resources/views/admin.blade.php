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
        <form method="post" action="action" >
             {{ csrf_field() }}
            <div class="form-group">
                <label for="team1score">Team 1 Score:</label>
                <input name="team1score" id="team1-score" type="number"></input> 
            </div>
            <div class="form-group">
                <label for="team2score">Team 2 Score:</label>
                <input name="team2score" id="team2-score" type="number"></input> 
            </div>
            <input type="submit"> 
            
        </form>
    </body>
</html>
