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
<form action="mood.php" method="post">

    <input type="radio" id="hard" name="mode" value="hard" onclick='createCookie("mode", "hard", 1); createCookie("song", 0, 1)'>
    <label for="hard">hard</label><br>

    <input type="radio" id="easy" name="mode" value="easy" onclick='createCookie("mode", "easy", 1); createCookie("song", 0, 1)'>
    <label for="easy">easy</label><br>
    <input type="radio" id="test" name="mode" value="test" onclick='createCookie("mode", "test", 1); createCookie("song", 0, 1)'>
    <label for="test">test</label><br>

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
<?php print_r($_COOKIE) ?>
  </pre>
    </aside>
</section>

</html>