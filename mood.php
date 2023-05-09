<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Start</title>
    <link rel='stylesheet' type='text/css' href='style.css'>
</head>
<h1>mood.php</h1>
<a href="index.php" target="_self">home</a>
<p> choose mood:</p>
<form action="mode.php">

    <input type="radio" id="random" name="mood" value="random">
    <label for="random">Random</label><br>

    <input type="radio" id="party" name="mood" value="party">
    <label for="party">Party</label><br>

    <input type="radio" id="workout" name="mood" value="workout">
    <label for="workout">Workout</label><br>

    <input type="radio" id="chill" name="mood" value="chill">
    <label for="chill">Chill</label><br>



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