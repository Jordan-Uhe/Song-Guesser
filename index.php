<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Song Guessr</title>
    <link rel="stylesheet" href="song.css">
</head>
<body>
<div class="container">
    <div class="song-guessr">
        <div class="logo">
            <img src="image/logo.png">
        </div>
        <div class="status-bar">
            <img src="image/Status Bar.png">
        </div>
        <div class="navigation-bar">
            <button type="submit">
                <img src="image/main.png" alt="main" width="80px">
            </button>
            <a href="GroupMatch.html">
                <button type="submit">
                    <img src="image/group match.png" alt="group-match" width="80px">
                </button>
            </a>
            <a href="Rank.html">
                <button type="submit">
                    <img src="image/rank.png" alt="rank" width="80px">
                </button>
            </a>
            <a href="Account.html">
                <button type="submit">
                    <img src="image/account.png" alt="account" width="80px">
                </button>
            </a>
        </div>
    </div>
    <a href="mood.php">
        <button class="start">START</button>
    </a>
</div>    
        
</body>
<section>
    <aside id="debug">
        <hr>
        <h3>Debug Area</h3>
        <pre>
GET Contains:
<?php print_r($_GET) ?>

POST Contains:
<?php print_r($_POST) ?>

  </pre>
    </aside>
</section>

</html>