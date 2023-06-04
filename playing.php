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
<script>
    const musiclist = [<?php
    //load data file
    $filename = 'data.json';
    $myfile = fopen($filename, "r") or die("Unable to open file!");
    $dataUncleaned = (fread($myfile, filesize($filename)));
    fclose($myfile);
    print_r($dataUncleaned);
    ?>][0];

    console.log(musiclist);
    function checkAnswer() {

        try {
            x = document.querySelector('input[name="mcanswer"]:checked').value;

            console.log(x);
        } catch (error) {
            console.log("no selected");

        }

        let input = document.getElementById("player-input").value;
        cleanedinput = (input.replace(/[^a-zA-Z0-9]/g, '')).toLowerCase();
        let text;

        if (cleanedinput != musiclist[readCookie("mood")][readCookie("song")]["song"].replace(/[^a-zA-Z0-9]/g, '').toLowerCase()) {
            text = "Wrong";

        } else {
            text = "Correct";
            const attr = document.createAttribute("disabled");
            document.getElementById("player-input").setAttributeNode(attr);
            createCookie("score", readCookie("score") * 1 + 1, 1);
        }
        document.getElementById("result").innerHTML = text;
    }

    function onLoad() {
        console.log("on load");

        if (readCookie("song") >= 10) {
            console.log("redirect");
            location.replace("results.php");
        };
        const attr3 = document.createAttribute("src");
        attr3.value = "https://www.youtube.com/embed/" + musiclist[readCookie("mood")][readCookie("song")]["link"] + "?autoplay=1&start=" + musiclist[readCookie("mood")][readCookie("song")]["start"] + "&end=" + musiclist[readCookie("mood")][readCookie("song")]["end"];
        const element = document.getElementById("youtube-frame");
        element.setAttributeNode(attr3);

        if (readCookie("mode") == "easy") {
            console.log("easy");
            document.getElementById("optionshard").innerHTML = '';
        } else if (readCookie("mode") == "hard") {
            console.log("hard");
            document.getElementById("optionseasy").innerHTML = '';
        } else {
            console.log("test");
        }
    }
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
                <input type="radio" id="option1" name="mcanswer" value="option1">
                <label for="option1">option1</label><br>
                <input type="radio" id="option2" name="mcanswer" value="option2">
                <label for="option2">option2</label><br>
                <input type="radio" id="option3" name="mcanswer" value="option3">
                <label for="option3">option3</label><br>
                <input type="radio" id="option4" name="mcanswer" value="option4">
                <label for="option4">option4</label><br>
            </div>
            <div id="songcontrols">
                <button type="radio" id="checkanswer" onclick="checkAnswer()">
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