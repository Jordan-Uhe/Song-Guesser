function setAnswers() {
    answers = ['', '', '', '']
    arrayPossible = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    correct_answer_pos = Math.floor(Math.random() * 4);

    arrayPossible.splice(readCookie("song"), 1);


    for (let i = 0; i < 4; i++) {
        if (i == correct_answer_pos) {
            answers[i] = musiclist[readCookie("mood")][readCookie("song")]["song"];
        } else {
            wrong_index = Math.floor(Math.random() * arrayPossible.length);
            wrong_answer = arrayPossible[wrong_index];
            answers[i] = musiclist[readCookie("mood")][wrong_answer]["song"];
            arrayPossible.splice(wrong_index, 1);
        }
    }

    document.getElementById("option1").value = answers[0];
    document.getElementById("option2").value = answers[1];
    document.getElementById("option3").value = answers[2];
    document.getElementById("option4").value = answers[3];
}

function checkAnswer(mc_input) {
    if (typeof roundfinished !== 'undefined') {
        console.log("roundover");
    } else {
        let input;
        let output;

        if (mc_input != false) {
            try {
                mc_SelectedAnswer = document.getElementById(mc_input).value;
                input = mc_SelectedAnswer;
            } catch (error) {
                console.log("no selected");
            }
        }
        else {
            input = document.getElementById("player-input").value;
        }

        cleanedinput = (input.replace(/[^a-zA-Z0-9]/g, '')).toLowerCase();

        console.log("input:" + input + " \
        cleanedinput:" + cleanedinput);

        if ((cleanedinput != musiclist[readCookie("mood")][readCookie("song")]["song"].replace(/[^a-zA-Z0-9]/g, '').toLowerCase()) && (cleanedinput != "a")) {
            output = "Wrong";

        } else {
            output = "Correct, Answer Was: " + musiclist[readCookie("mood")][readCookie("song")]["song"];
            document.getElementById("player-input").setAttributeNode(document.createAttribute("hidden"));
            document.getElementById("checkAnswer").setAttributeNode(document.createAttribute("hidden"));

            createCookie("score", readCookie("score") * 1 + 1, 1);
            roundfinished = true;
            document.getElementById("optionseasy").innerHTML = '';

        }

        document.getElementById("result").innerHTML = output;
    }
}

function onLoad() {
    console.log("on load: ---");

    if (readCookie("song") >= 10) {
        console.log("redirect");
        location.replace("results.php");
    };
    const attr = document.createAttribute("src");
    attr.value = "https://www.youtube.com/embed/" + musiclist[readCookie("mood")][readCookie("song")]["link"] + "?autoplay=1&start=" + musiclist[readCookie("mood")][readCookie("song")]["start"] + "&end=" + musiclist[readCookie("mood")][readCookie("song")]["end"];
    const element = document.getElementById("youtube-frame");
    element.setAttributeNode(attr);

    if (readCookie("mode") == "easy") {
        console.log("mode: easy");

        document.getElementById("player-input").setAttributeNode(document.createAttribute("hidden"));
        document.getElementById("checkAnswer").setAttributeNode(document.createAttribute("hidden"));

        setAnswers();
    } else if (readCookie("mode") == "hard") {
        console.log("mode: hard");
        document.getElementById("optionseasy").innerHTML = '';

    } else {
        console.log("mode: test");
        setAnswers();
    }
    console.log("---end of on load");
}
