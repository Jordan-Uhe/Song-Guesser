<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Index</title>
    <link rel='stylesheet' type='text/css' href='style.css'>
</head>
<h1>match.php</h1>
<a href="index.php" target="_self">home</a>

<body>
    <p> searching for opponents please wait or click play solo</p>

    <form action="start.php" method="get">

        <input type="hidden" id="mood" name="mood" value=<?php print_r($_GET['mood']) ?>>
        <input type="hidden" id="mode" name="mode" value=<?php print_r($_GET['mode']) ?>>

        <input type="submit" value="Submit">
        <label for="submit">click to play solo</label><br>
    </form>



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