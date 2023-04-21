  
var clientID = 'e468d1aca81b48269171f4f2a8ba8f7c';
var clientSecret = '4079f8ca3a034f3dbffdecf8f48d0ecc';

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
     
    return data.categories.items;
}

getGenres();

function getPlaylistByGenre(){
    var limit = 10;
    
    var result = fetch(`https://api.spotify.com/v1/browse/categories/${genreId}/playlists?limit=${limit}`, {
        method: 'GET',
        headers: { 'Authorization' : 'Bearer ' + getToken()}
    });

    var data = result.json();
    return data.playlists.items;
}

function getTracks(){
    var limit = 10;

    var result = fetch(`${tracksEndPoint}?limit=${limit}`, {
        method: 'GET',
        headers: { 'Authorization' : 'Bearer ' + getToken()}
    });

    var data = result.json();
    return data.items;
}

function getTrack(){
    var result = fetch(`${trackEndPoint}`, {
        method: 'GET',
        headers: { 'Authorization' : 'Bearer ' + getToken()}
    });

    var data = result.json();
    return data;
}
    


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