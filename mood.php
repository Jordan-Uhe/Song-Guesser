<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="song.css">
</head>
<body>
<div class="container">
    <div class="song-guessr">
        <div class="status-bar">
            <img src="image/Status Bar.png">
        </div>
        <div class="moods">
            <img src="image/Moods.png" style="width:75px; margin-left:95px; margin-top: 15px;">
        </div>
        <div class="previous">
            <a href="song.html">
                <button type="submit">
                    <img src="image/previous.png" width="50px">
                </button>
            </a>
        </div>
        
        <div class="mood1">
            <a href="mode.php?mood=random">
                <button type="submit">
                    <img src="image/mood_random.png" style="width:130px; margin-right:20px;">
                </button>
            </a>
            <a href="mode.php?mood=party">
                <button type="submit">
                    <img src="image/mood_party.png" width="130px">
                </button>
            </a>
        </div>
        <div class="mood2">
            <a href="mode.php?mood=workout">
                <button type="submit">
                    <img src="image/mood_workout.png" style="width:130px; margin-right:20px;">
                </button>
            </a>
            <a href="mode.php?mood=chill">
                <button type="submit">
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
GET Contains:
<?php print_r($_GET) ?>

POST Contains:
<?php print_r($_POST) ?>

  </pre>
    </aside>
</section>

</html>