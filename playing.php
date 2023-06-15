<!DOCTYPE html>
<html lang="en">

<head>
    <script src='cookie.js' type='text/javascript'></script>
    <script src='app.js' type='text/javascript'></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="new.css">
</head>
<script>
    const musiclist = [<?php
    //load data file
    $filename = 'data.json';
    $myfile = fopen($filename, "r") or die("Unable to open file!");
    $dataUncleaned = (fread($myfile, filesize($filename)));
    fclose($myfile);
    print_r($dataUncleaned);
    ?>][0];

</script>

<body>
    <a href="index.php" target="_self">home</a>
    <div class="container">
        <div class="song-guessr">
            <div class="playing">
                <iframe width="300" height="30" id="youtube-frame" frameborder="0"></iframe>
            </div>
            <p id="result"></p>
            <div class="optionshard">
                <input id="player-input"><br>
            </div>
            <div id="optionseasy">
                <input type="button" id="option1" onclick="checkAnswer('option1')"><br>
                <input type="button" id="option2" onclick="checkAnswer('option2')"><br>
                <input type="button" id="option3" onclick="checkAnswer('option3')"><br>
                <input type="button" id="option4" onclick="checkAnswer('option4')"><br>
            </div>
            <div id="songcontrols">
                <button type="radio" id="checkAnswer" onclick="checkAnswer(false)">
                    <img src="image/check.png" style="width:130px; margin-right:20px;">
                </button>
                <a href="playing.php">
                    <button type="radio" onclick='createCookie("song", readCookie("song") *1  +1, 1)'>
                        <img src="image/next.png" style="width:130px; margin-right:20px;">
                    </button>
                </a>
            </div>
        </div>
    </div>
</body>

<script>
    onLoad();
</script>
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