<!DOCTYPE html>
<html lang="en">

<head>
    <script src='cookie.js' type='text/javascript'></script>
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
            <div class="navigation-bar">
                <img src="image/main.png" alt="main" width="80px">
                <img src="image/group match.png" alt="group-match" width="80px">
                <a href="scoreboard.html">
                    <button type="submit">
                        <img src="image/rank.png" alt="rank" width="80px">
                    </button>
                </a>
                <a href="account.html">
                    <button type="submit">
                        <img src="image/account.png" alt="account" width="80px">
                    </button>
                </a>
            </div>
        </div>
        <a href="mode.php">
            <button class="start">START</button>
        </a>
    </div>

</body>
<section>
    <aside id="debug">
        <hr>
        <h3>Debug Area</h3>
        <pre>
        COOKIE Contains:
<?php print_r($_COOKIE) ?>

  </pre>
    </aside>
</section>

</html>