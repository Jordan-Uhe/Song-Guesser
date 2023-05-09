<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Index</title>
    <link rel='stylesheet' type='text/css' href='style.css'>
</head>
<h1>start.php</h1>
<a href="index.php" target="_self">home</a>

<body>

    <iframe width="0" height="0" src="https://www.youtube.com/embed/CN7JSoGLaJE?autoplay=1&start=5&end=35"
        frameborder="0"></iframe>


    <form action="start.php" method="get">

        <input type="hidden" id="mood" name="mood" value=<?php print_r($_GET['mood']) ?>>
        <input type="hidden" id="mode" name="mode" value=<?php print_r($_GET['mode']) ?>>

        <input id="numb">
        <button type="button" onclick="myFunction()">Submit</button>
        <p id="demo"></p>


    </form>

    <script>
        function myFunction() {
            // Get the value of the input field with id="numb"
            let x = document.getElementById("numb").value;
            // If x is Not a Number or less than one or greater than 10
            let text;
            if (x!="y") {
                text = "Input not Correct";
            } else {
                text = "Input Correct";
            }
            document.getElementById("demo").innerHTML = text;
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