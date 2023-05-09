<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Index</title>
    <link rel='stylesheet' type='text/css' href='style.css'>
</head>
<h1>index.php</h1>
<nav>

    <ul>
        <li><a href="index.php" target="_self">My List</a></li>
        <li><a href="index.php" target="_self">Spotify</a></li>
        <li><a href="index.php" target="_self">LeaderBoard</a></li>
        <li><a href="index.php" target="_self">Profile</a></li>
    </ul>

</nav>

<body>
    <a href="mood.php" target="_self">Start</a>
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