<!DOCTYPE html>
<html lang='en'>

<head>
    <script src='cookie.js' type='text/javascript'></script>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Start</title>
    <link rel='stylesheet' type='text/css' href='style.css'>
</head>
<h1>mode.php</h1>
<a href="index.php" target="_self">home</a>
<p> choose mood:</p>
<form action="Playing.php" method="get">

    <input type="radio" id="speed-up" name="mode" value="speed-up" onclick='createCookie("mode", "speed-up", 1); createCookie("song", 0, 1)'>
    <label for="speed-up">Speed Up</label><br>

    <input type="radio" id="panic" name="mode" value="panic" onclick='createCookie("mode", "panic", 1); createCookie("song", 0, 1)'>
    <label for="panic">Panic</label><br>

    <input type="radio" id="just-a-sec" name="mode" value="just-a-sec" onclick='createCookie("mode", "just-a-sec", 1); createCookie("song", 0, 1)'>
    <label for="just-a-sec">just-a-sec</label><br>
    <input type="submit" value="Submit">
</form>


<body>

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