<!DOCTYPE html>
<html lang='en'>

<head>
    <script src='cookie.js' type='text/javascript'></script>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Start</title>
    <link rel='stylesheet' type='text/css' href='new.css'>
</head>
<a href="index.php" target="_self">home</a>

<body>
    <div class="container">
        <div class="song-guessr">
            <h1>mode.php</h1>

            <p> choose mode:</p>
            <div class="start">
                <a href="mood.php">
                    <button class="start-button"
                        onclick='createCookie("mode", "easy", 1)'>EASY</button>
                </a>
            </div>
            <div class="start">
                <a href="mood.php">
                    <button class="start-button"
                        onclick='createCookie("mode", "hard", 1)'>HARD</button>
                </a>
            </div>
            <div class="start">
                <a href="mood.php">
                    <button class="start-button"
                        onclick='createCookie("mode", "test", 1)'>TEST</button>
                </a>
            </div>



        </div>

    </div>

</body>

<aside id="debug">
    <hr>
    <h3>Debug Area</h3>
    <pre>
GET Contains:
<?php print_r($_COOKIE) ?>
  </pre>
</aside>

</html>