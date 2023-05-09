<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Start</title>
    <link rel='stylesheet' type='text/css' href='style.css'>
</head>
<h1>mode.php</h1>
<a href="index.php" target="_self">home</a>
<p> choose mood:</p>
<form action="match.php" method="get">

    <input type="radio" id="speed-up" name="mode" value="speed-up">
    <label for="speed-up">Speed Up</label><br>

    <input type="radio" id="panic" name="mode" value="panic">
    <label for="panic">Panic</label><br>

    <input type="radio" id="just-a-sec" name="mode" value="just-a-sec">
    <label for="just-a-sec">just-a-sec</label><br>

    <input type="hidden" id="mood" name="mood" value=<?php print_r($_GET['mood']) ?>>

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