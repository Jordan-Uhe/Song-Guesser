<!DOCTYPE html>
<html lang="en">

<head>
    <script src='cookie.js' type='text/javascript'></script>
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
        const musiclist = [
            ["fUYaosyR4bE", "Lily Allen", "Not Fair"],
            ["NI6aOFI7hms", "The Cardigans", "Lovefool"],
            ["ryDOy3AosBw", "Skee-Lo", "I Wish"],
            ["fPO76Jlnz6c", "Coolio", "Gangsta's Paradise"],
            ["aSLZFdqwh7E", "Eminem", "Stan"],
            ["34Na4j8AVgA", "The Weeknd", "Starboy"],
            ["fnlJw9H0xAM", "NF", "The Search"],
            ["S9bCLPwzSC0", "Eminem", "Mockingbird"],
            ["VDvr08sCPOc", "Fort Minor", "Remember The Name"],
            ["dvgZkm1xWPE", "Coldplay", "Viva La Vida"]
        ];
        if (x != musiclist[readCookie("song")][2]) {
            text = "Wrong";

        } else {
            text = "Correct";
            const attr = document.createAttribute("disabled");
            document.getElementById("player-input").setAttributeNode(attr);
            createCookie("score", readCookie("score") * 1 + 1, 1);


        }
        document.getElementById("result").innerHTML = text;


    }

    function onLoad() {
        console.log("on load");

if (readCookie("song") >=10 ) {
    console.log("redirect");
    location.replace("results.php");
};

        const musiclist = [
            ["fUYaosyR4bE", "Lily Allen", "Not Fair"],
            ["NI6aOFI7hms", "The Cardigans", "Lovefool"],
            ["ryDOy3AosBw", "Skee-Lo", "I Wish"],
            ["fPO76Jlnz6c", "Coolio", "Gangsta's Paradise"],
            ["aSLZFdqwh7E", "Eminem", "Stan"],
            ["34Na4j8AVgA", "The Weeknd", "Starboy"],
            ["fnlJw9H0xAM", "NF", "The Search"],
            ["S9bCLPwzSC0", "Eminem", "Mockingbird"],
            ["VDvr08sCPOc", "Fort Minor", "Remember The Name"],
            ["dvgZkm1xWPE", "Coldplay", "Viva La Vida"]
        ];
        const attr3 = document.createAttribute("src");
        attr3.value = "https://www.youtube.com/embed/" + musiclist[readCookie("song")][0] +
            "?autoplay=1&start=5&end=35";
        const element = document.getElementById("youtube-frame");
        element.setAttributeNode(attr3);

    }
</script>

<body>
    <a href="index.php" target="_self">home</a>
    <div class="container">
        <div class="song-guessr">
            <div class="playing">
                <iframe width="300" height="300" id="youtube-frame" frameborder="0"></iframe>
                <input id="player-input"><br>
                <p id="result"></p> <br>
            </div>
            <div class="options">
                <button type="radio" onclick="myFunction()">
                    <img src="image/check.png" style="width:130px; margin-right:20px;">
                </button>
                <a href="playing.php">
                    <button type="radio" onclick='createCookie("song", readCookie("song") *1  +1, 1)'>
                        <img src="image/next.png" style="width:130px; margin-right:20px;">
                    </button>
                </a>
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
        COOKIE Contains:
<?php print_r($_COOKIE) ?>
  </pre>
    </aside>
</section>




</html>