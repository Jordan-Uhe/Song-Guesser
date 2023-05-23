<!DOCTYPE html>
<html lang='en'>

<head>
    <script src='cookie.js' type='text/javascript'></script>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Index</title>
    <link rel='stylesheet' type='text/css' href='style.css'>
</head>
<h1>results.php</h1>
<a href="index.php" target="_self">home</a><br>

<body>
    results from the player gets shown here:
    <p id="gameresults"></p><br>
    <ul>
        <li><a href="index.php" target="_self">Home</a></li>
        <li><a href="scoreboard.php" target="_self">ScoreBoard</a></li>
    </ul>

</body>
<script>
    function onLoad() {
        console.log("on load");
        document.getElementById("gameresults").innerHTML = readCookie("score") + "/" +readCookie("song") ;
    }


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