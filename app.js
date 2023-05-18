  
var clientID = 'e468d1aca81b48269171f4f2a8ba8f7c';
var clientSecret = '4079f8ca3a034f3dbffdecf8f48d0ecc';

let songList = [[]];

async function getToken(){
    var json = await fetch('https://accounts.spotify.com/api/token', {
        method: 'POST',
        headers: {
            'Content-Type' : 'application/x-www-form-urlencoded', 
            'Authorization' : 'Basic ' + btoa( clientID + ':' + clientSecret)
        },
        body: 'grant_type=client_credentials'
    });

    var token = await json.json();
    return token.access_token;
}

async function getGenres(){
    let token = await getToken();

    var result = await fetch(`https://api.spotify.com/v1/browse/categories`, {
        method: 'GET',
        headers: { 'Authorization' : 'Bearer ' + token}
    });

    var data = await result.json();
    for (let i = 0; i < data.categories.items.length; i++) {
        console.log(data.categories.items[i].name);
    }
    const done = data.categories.items;
    return done;
}

async function getPlaylistSong(playlistID){
    let token = await getToken();

    var result = await fetch(`https://api.spotify.com/v1/playlists/`+ playlistID, {
        method: 'GET',
        headers: { 'Authorization' : 'Bearer ' + token}
    });

    var data = await result.json();
     
    return data.tracks.items;
}

function make2DArray(cols, rows) {
    var arr = new Array(cols);
    for (var i = 0; i < arr.length; i++) {
      arr[i] = new Array(rows);
    }
    return arr;
  }

  function setPlaylistArray(){
    getPlaylistSong("5GoaIW2n8LmCOfduD1JWll").then(data => {
       songList = make2DArray(2, data.length);
       for (let i = 0; i < data.length; i++) {
           songList[0][i] = data[i].track;
       }
       songList[1][0] = "Tiësto - 10_35 (Lyrics) ft. Tate McRae.mp3";
       songList[1][1] = "David Guetta, Bebe Rexha - I'm good (Blue) LYRICS _I'm good, yeah, I'm feelin' alright_.mp3";
       songList[1][2] = "Black Eyed Peas, Shakira, David Guetta - DON'T YOU WORRY (Lyrics).mp3";
       songList[1][3] = "David Guetta, Anne Marie, Coi Leray - Baby Don't Hurt Me (Lyrics).mp3";
       songList[1][4] = "Oliver Tree & Robin Schulz - Miss You (Lyrics).mp3";
       songList[1][5] = "Jax Jones, Calum Scott - Whistle (Lyrics).mp3";

       loadSong();
   }).catch(err => {
       console.log(err);
   });
  }

  let currentSong;

  function loadSong(){
    randomSongArray = [" ", " ", " ", " "];
    let i = 0;
    while(randomSongArray.includes(" ")){
        randomSong = songList[0][Math.floor(Math.random()*songList[0].length)];
        if(!randomSongArray.includes(randomSong)){
            randomSongArray[i] = randomSong;
            i++;
        }
    }
    document.getElementById("b1").innerHTML=randomSongArray[0].name;
    document.getElementById("b2").innerHTML=randomSongArray[1].name;
    document.getElementById("b3").innerHTML=randomSongArray[2].name;
    document.getElementById("b4").innerHTML=randomSongArray[3].name;
    let currentSongPath = " ";
    currentSong = randomSongArray[Math.floor(Math.random() * 4)];
    for (let index = 0; index < songList[0].length; index++) {
        if(currentSong == songList[0][index]){
            currentSongPath = songList[1][index];
        }
    }
    document.getElementById("player").src = currentSongPath + "#t=00:01:00";
}

function checkGuess1(){
    if(document.getElementById("b1").innerHTML==currentSong.name){
        console.log("Correct");
    }else{
        console.log("Incorrect")
    }
}
function checkGuess2(){
    if(document.getElementById("b2").innerHTML==currentSong.name){
        console.log("Correct");
    }else{
        console.log("Incorrect")
    }
}
function checkGuess3(){
    if(document.getElementById("b3").innerHTML==currentSong.name){
        console.log("Correct");
    }else{
        console.log("Incorrect")
    }
}
function checkGuess4(){
    if(document.getElementById("b4").innerHTML==currentSong.name){
        console.log("Correct");
    }else{
        console.log("Incorrect")
    }
}

// function getPlaylistByGenre(){
//     var limit = 10;
    
//     var result = fetch(`https://api.spotify.com/v1/browse/categories/${genreId}/playlists?limit=${limit}`, {
//         method: 'GET',
//         headers: { 'Authorization' : 'Bearer ' + getToken()}
//     });

//     var data = result.json();
//     return data.playlists.items;
// }

// function getTracks(){
//     var limit = 10;

//     var resu2lt = fetch(`${tracksEndPoint}?limit=${limit}`, {
//         method: 'GET',
//         headers: { 'Authorization' : 'Bearer ' + getToken()}
//     });

//     var data = result.json();
//     return data.items;
// }

// function getTrack(){
//     var result = fetch(`${trackEndPoint}`, {
//         method: 'GET',
//         headers: { 'Authorization' : 'Bearer ' + getToken()}
//     });

//     var data = result.json();
//     return data;
// }

// function addPlaylist(){
//     var result = fetch(`${https://api.spotify.com/v1/users/{smedjan}/playlists}`, {
//         method: 'POST',
//         bpdy: {
//             "name": "New Playlist",
//             "description": "New playlist description",
//             "public": false
//         }
//     });

//     var data = result.json();
//     return data;
// }

// var addplaylist = function (id,token) {

//     $.ajax({
//       dataType: 'text',
//       type: 'post',
//       url: 'https://api.spotify.com/v1/users/entelperú/playlists/6sU8XOS7BLicR3COsc0Rhp/tracks?uris=spotify:track:'+ id,
//       headers: {
//         Authorization: "Bearer "+token,
//       },success: function (response) {
//         alert(response);
//       }
//   });
// };
    


function resetTrackDetail() {
    this.inputField().songDetail.innerHTML = '';
}

function resetTracks() {
    this.inputField().tracks.innerHTML = '';
    this.resetTrackDetail();
}

function resetPlaylist() {
    this.inputField().playlist.innerHTML = '';
    this.resetTracks();
}

function storeToken(value) {
    document.querySelector(DOMElements.hfToken).value = value;
}

function getStoredToken() {
    return {
        token: document.querySelector(DOMElements.hfToken).value
    }
}