<!DOCTYPE html>
<html lang="en">

<head>
    <script src='cookie.js' type='text/javascript'></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="song.css">
</head>

<body>
    <a href="index.php" target="_self">home</a>
    <div class="container">
        <div class="song-guessr">
            <div class="moods">
                <img src="image/Moods.png" style="width:75px; margin-left:95px; margin-top: 15px;">
            </div>
            <div class="previous">
                <a href="index.php">
                    <button type="submit">
                        <img src="image/previous.png" width="50px">
                    </button>
                </a>
            </div>

            <div class="mood1">
                <a href="playing.php">
                    <button type="submit" onclick='createCookie("mood", "random", 1); createCookie("song", 0, 1); createCookie("score", 0, 1)'>
                        <img src="image/mood_random.png" style="width:130px; margin-right:20px;">
                    </button>
                </a>
                <a href="playing.php">
                    <button type="submit" onclick='createCookie("mood", "party", 1); createCookie("song", 0, 1); createCookie("score", 0, 1)'>
                        <img src="image/mood_party.png" width="130px">
                    </button>
                </a>
            </div>
            <div class="mood2">
                <a href="playing.php">
                    <button type="radio" onclick='createCookie("mood", "workout", 1); createCookie("song", 0, 1); createCookie("score", 0, 1)' >
                        <img src="image/mood_workout.png" style="width:130px; margin-right:20px;" >
                    </button>
                </a>
                <a href="playing.php">
                    <button type="radio" onclick='createCookie("mood", "chill", 1); createCookie("song", 0, 1); createCookie("score", 0, 1)' >
                        <img src="image/mood_chill.png" width="130px">
                    </button>
                </a>
            </div>
        </div>
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