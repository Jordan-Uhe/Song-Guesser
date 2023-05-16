<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="song.css">
</head>
<script>
    function myFunction() {
        let x = document.getElementById("player-input").value;
        let text;
        if (x != "y") {
            text = "Input not Correct";

        } else {
            text = "Input Correct";
            console.log("test");
            const attr = document.createAttribute("disabled");
            document.getElementById("player-input").setAttributeNode(attr);
            const attr2 = document.createAttribute("disabled");
            document.getElementById("check-answer").setAttributeNode(attr2);
            // score++;

        }
        document.getElementById("result").innerHTML = text;


    }

    function onLoad() {
        console.log("on load");

        const attr3 = document.createAttribute("src");
        attr3.value = "https://www.youtube.com/embed/CN7JSoGLaJE?autoplay=1&start=5&end=35";
        const element = document.getElementById("youtube-frame");
        element.setAttributeNode(attr3);

    }
</script>

<body>
    <div class="container">
        <div class="song-guessr">
            <div class="status-bar"></div>
            <div class="previous"> </div>

            <div class="playing">
                <div onload=>

                    <iframe width="300" height="300" id="youtube-frame" frameborder="0"></iframe>
                    <form action="start.php" method="get">
                        <input type="hidden" id="mood" name="mood" value=<?php print_r($_GET['mood']) ?>>
                        <input type="hidden" id="mode" name="mode" value=<?php print_r($_GET['mode']) ?>>
                        <input type="hidden" id="song" name="song" value=<?php print_r($_GET['song'] + 1) ?>>

                        <input id="player-input"><br>

                        <button type="button" id="check-answer" onclick="myFunction()">Check Answer

                        <p id="result"></p> <br>


                        </button><input type="submit" value="Submit"> next song <button type="submit"><br></button>
                        <br>


                    </form>

                </div>

            </div>
            <div class="score">

            </div>
            <div class="buzzerd">


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
GET Contains:
<?php print_r($_GET) ?>

POST Contains:
<?php print_r($_POST) ?>

  </pre>
    </aside>
</section>




</html>