<!DOCTYPE html>
<html lang='en'>

<script><?php
    
    if ($_GET['song'] >= 10) {
        header("Location: results.php"); // redirect if movie code invalid
        exit();
    }?>
</script>




<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Index</title>
    <link rel='stylesheet' type='text/css' href='style.css'>
</head>
<h1>start.php</h1>
<a href="index.php" target="_self">home</a>

<body onload="onLoad()">
    --make width 0 and height 0 for functional app, 100 for testing
    <iframe width="100" height="100" id="youtube-frame" frameborder="0"></iframe>

    <form action="start.php" method="get">

        <input type="hidden" id="mood" name="mood" value=<?php print_r($_GET['mood']) ?>>
        <input type="hidden" id="mode" name="mode" value=<?php print_r($_GET['mode']) ?>>
        <input type="hidden" id="song" name="song" value=<?php print_r($_GET['song'] + 1) ?>>
        <input id="player-input">
        <button type="button" id="check-answer" onclick="myFunction()">Check Answer</button>
        <p id="result"></p>

        <input type="submit" value="Submit"> next song

    </form>

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

</body>
<section>
    <aside id="debug">
        <hr>
        <h3>Debug Area</h3>
        <pre>
GET Contains:
<?php print_r($_GET) ?>
  </pre>
    </aside>
</section>

</html>