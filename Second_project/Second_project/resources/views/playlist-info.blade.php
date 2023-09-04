<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>AmpTune</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" crossorigin="anonymous">

  <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    crossorigin="anonymous"
  />  
  <style>
    .smaller-card-body {
        font-size: 14px;
        padding: 10px;
        text-align: center;
    }
    .fa-search {
        color: black !important;
        position: absolute;
    }
    .form-control {
        border-radius: 50px !important;
        position: relative;
    }
    .navbar {
        display: flex;
    }
    .navbar .form-inline{
        flex: 1;
    }
    .collapse{
        flex: 0;
    }
    .input-group{
        margin-left: auto;
        margin-right: auto;
    }
    .fa-search{
        position: static;
    }
    .input-group{
        background-color: white;
        border-radius: 50px;
    }
    .form-control{
        border: none;
    }
    .container {
        text-align: center;
    }

    .Playtitle {
        margin-top: 20px;
    }
    header {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .song-list {
    padding: 60px 0;
    background-color: #f8f9fa;
    max-height: 400px; 
    overflow-y: scroll; 
    }

    .song-list h3 {
    margin-bottom: 40px;
    text-align: center;
    font-weight: bold;
    text-transform: uppercase;
    }

    .song-list li {
    background-color: white;
    border: 1px solid #dee2e6;
    border-radius: 5px;
    padding: 20px;
    }

    .song-list img {
    width: 75px;
    height: 75px;
    object-fit: cover;
    border-radius: 5px;
    }

    .song-list button {
    margin-left: auto;
    display: block;
    }

    @media (max-width: 767.98px) {
    .song-list li {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        }
    }
    .btn{
        margin-top: 20px;
    }
    .footer {
    padding: 10px 0;
    height: 10px;
    }
    .heart {
    cursor: pointer;
    position: relative;
    display: inline-block;
    font-size: 24px;
    width: 24px;
    height: 24px;
    line-height: 24px;
    text-align: center;
    margin-left: 10px;
    margin-top: 15px;
    color: red;
  }

  .heart i {
    position: absolute;
    top: 0;
    left: 0;
    width: 24px;
    height: 24px;
    transition: all 0.2s ease-in-out;
  }

  .heart i:before {
    content: "\f004";
  }

  .heart.active i:before {
    content: "\f004";
    color: green;
  }
  /* CSS for the audio player */
  #player {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #f5f5f5;
    padding: 10px;
    border-radius: 5px;
    background: white;
    }
    #player button {
    margin: 0 10px;
    font-size: 18px;
    border: none;
    background-color: transparent;
    cursor: pointer;
    }
    #playButton{
    margin-left: 50px !important;
    }

    #player #volumeBar {
    margin-right: 10px;
    }

    #player #totalTime {
      margin-right: 10px;
    }

    #player #progressBar {
      margin-right: 10px;
    }

    #player #currentTime {
      margin-right: 10px;
    }
    #player #volume-icon{
      margin-right: 10px;
    }
    .hidden {
    display: none;
    }
    .progressBar {
    height: 5px;
    -webkit-appearance: none !important;
    appearance: none !important;
    background-color: #e6e6e6;
    border-radius: 2.5px;
    outline: none;
    }
    .progressBar::-webkit-progress-bar {
    background-color: blueviolet;
    border-radius: 2.5px;
    }
    .progressBar::-webkit-progress-value {
    background-color: #2196f3;
    border-radius: 2.5px;
    }
    .volume {
    height: 5px;
    -webkit-appearance: none !important;
    appearance: none !important;
    background-color: #e6e6e6;
    border-radius: 2.5px;
    outline: none;
    }
    .icons{
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    }
    .download{
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    margin-top: 15px;
    margin-left: 10px;
    }
</style>
  </head>
  <body>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="welcome">AmpTune</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
      <span class="navbar-toggler-icon"></span>
      </button>
      <form action="{{ route('search') }}" method="GET" class="form-inline my-2 my-lg-0">
        @CSRF
          <div class="input-group">
            <input class="form-control mr-sm-2" name="search" type="text" placeholder="Search" aria-label="Search" />
            <div class="input-group-append">
              <button class="btn  my-2 my-sm-0" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>                
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          @auth
            <li class="nav-item">
            <a class="nav-link" href="{{ url('/saved-songs') }}">Your library</a>
          @endauth
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/playlists') }}">Playlists</a>
          </li>
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/signup-page') }}">Sign Up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/login-page') }} ">Sign In</a>
          </li>
          @endguest
          @auth
          <li class="nav-item">
            <form action="{{ url('/logout') }}" method="POST">
              @csrf
              <button style="all: unset;"><a class="nav-link">Log Out</a></button>
            </form>
          </li>
          @endauth
        </ul>
      </div>
    </nav>
        <header class="jumbotron jumbotron-fluid text-white">
        <div class="container">
            <div class="playlist col-md-12">
                <img src="songs/images/1682888736.jpg" alt="title">
                <div class="Playtitle">
                <h2 id="name"></h2>
                </div>
            </div>
        </div>
        </header>

        <section class="song-list">
            <div class="container">
              <div class="row">
              @foreach($songs as $song)
                <div class="col-md-6">
                  <ul class="list-unstyled">
                    <li class="media mb-4">
                      <img class="mr-3" src="{{ asset('songs/images/' . $song->image) }}" alt="Song 1">
                      <div class="media-body">
                        <h5 class="mt-0 mb-1">{{ $song->title }}</h5>
                        <p class="mb-0">{{ $song->artist }}</p> 
                        @auth 
                        <span onclick="createLike({{ $song->id }})" class="heart {{ Auth::user()->songs->contains($song) ? 'active' : '' }}"><i class="far fa-heart"></i></span>
                        @endauth
                        <div class="icons">
                        @guest 
                        <span class="heart"><i class="far fa-heart"></i></span>
                        @endguest
                        <span class="download"  data-attr-id="{{ $song->id }}"> <i class="fas fa-download" data-attr-id="{{ $song->id }}"> </i></span>
                        </div>
                      </div>
                      <button type="button" class="btn btn-outline-secondary play-button" data-attr-id="{{ $song->id }}">Play</button>
                    </li>
                  </ul>
                </div>
                @endforeach
              </div>
            </div>
          </section>

  <!-- Footer -->
  <footer class="footer py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">© 2023 Soundcloud</p>
    </div>
  </footer>
</div> 

<div id="player">
    <button id="previousButton">&lt;</button>
    <button id="nextButton">&gt;</button>
    <button id="playButton">&#9658;</button>
    <button id="pauseButton">&#10074;&#10074;</button>
    <span id="currentTime">0:00</span>
    <input class="progressBar" id="progressBar" type="range" min="0" step="1">
    <span id="totalTime">0:00</span>
    <div id="volume-icon" onclick="toggleVolumeBar()">
      <i class="fa fa-volume-up"></i>
    </div>
    <input class="volume" id="volumeBar" type="range" min="0" max="100"> 
  </div>
  <select id="songName">
    <option value="test.mp3"> pirmas </option>
    <option value="test2.mp3"> antras </option>
  </select>

  <script>
  var token = "{{ csrf_token() }}";
  var routeUrl = "{{ url('like-song') }}";
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/ajax.js') }}"></script>
  
  <!-- Bootstrap core JavaScript -->
  <!-- <script src="path/to/soundmanager2.js"></script> -->
  <!-- <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
  <!-- <script
  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  crossorigin="anonymous"></script> -->
<!-- <script
  src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/bundles/popper-core.min.js"
  crossorigin="anonymous"></script> -->
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
  <script src="{{ asset('/soundmanagerv297a-20170601/script/soundmanager2.js') }}"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/soundmanager2/2.97a.20150601/soundmanager2.min.js"></script> -->

<script>

var manager; // player
    var song; // playing song
    var songList;
    var currentSong;

    var playButton;
    var pauseButton;
    var progressBar;
    var currentTime;
    var totalTime;
    var volumeBar;
    var previousButton;
    var nextButton;
    var songs = <?php echo $songs; ?>;
    var index = 0;

    document.addEventListener('DOMContentLoaded', function() {


      playButton = document.getElementById('playButton');
      pauseButton = document.getElementById('pauseButton');
      progressBar = document.getElementById('progressBar');
      currentTime = document.getElementById('currentTime');
      totalTime = document.getElementById('totalTime');
      volumeBar = document.getElementById('volumeBar');
      songList = document.getElementById('songName');
      previousButton = document.getElementById('previousButton');
      nextButton = document.getElementById('nextButton');

      var url = new URLSearchParams(window.location.search);
      document.getElementById('name').textContent=url.get("title");

      previousButton.addEventListener('click', function() {
      if (!currentSong)
         return
       var _currentSong = null
        for(let i = 0; i < songs.length; i++){
          if(currentSong.id == songs[i].id && i>=0){
            _currentSong = songs[i-1];
            break;
          }
        }
      currentSong = _currentSong
        if(currentSong)
        playSong(currentSong.file);
       else
      pauseButton.click();
      })

      nextButton.addEventListener('click', function() {
        if (!currentSong)
         return
       var _currentSong = null
        for(let i = 0; i < songs.length; i++){
          if(currentSong.id == songs[i].id && i<songs.length){
            _currentSong = songs[i+1];
            break;
          }
        }
      currentSong = _currentSong
        if(currentSong)
        playSong(currentSong.file);
       else
      pauseButton.click();
      })

      document.querySelectorAll(".play-button").forEach(button=>{button.addEventListener('click', function(e) {
        var id = e.target.getAttribute("data-attr-id")
        for (let i = 0; i < songs.length; i++) {
            if(songs[i].id == id ){
              currentSong = songs[i];
            }
          }
        playSong(currentSong.file);
      })})

      document.querySelectorAll(".download").forEach(button=>{button.addEventListener('click', function(e) {
        var _currentSong;
        var id = e.target.getAttribute("data-attr-id")
        for (let i = 0; i < songs.length; i++) {
            if(songs[i].id == id ){
              _currentSong = songs[i];
            }
          }
        console.log(e.target);
        fetch('http://127.0.0.1:8000/songs/files/' + _currentSong.file)
        .then(response => response.blob())
        .then(blob => {
          // Create a link element
          const link = document.createElement('a');
          link.href = URL.createObjectURL(blob);
          link.download = 'file.mp3';
          // Simulate a click on the link to initiate the download
          link.click();
        });
      })})

      volumeBar.value = 25;
    });

manager = soundManager.setup({
  url: 'soundmanagerv297a-20170601/swf',
  onready: function() {
    // SoundManager 2 is ready to use

    playButton.addEventListener('click', function() {
      if (song && (song.playState !== 1 || song.paused)) {
        song.play();
      }
    });

    pauseButton.addEventListener('click', function() {
      if (song) {
        song.pause();
      }
    });
    
    progressBar.addEventListener('input', function() {
      if (song){
        song.setPosition(this.value)
        currentTime.innerText = formatTime(this.value)
      }
    });

    volumeBar.addEventListener('input', function() {
      if (song){
        song.setVolume(this.value)
      }
    }); 

    setInterval(updateProgress, 1000)

    function updateProgress(){
      if (song){
        progressBar.value = song.position 
        currentTime.innerText = formatTime(song.position)
      }
    }
  }
});

function playSong(title){
  if(song && song.playState === 1 )
  {
    song.stop() 
  }
  title = "songs/files/" + title;
  song = manager.createSound({
    url:title, onload(){
      progressBar.value = 0
      currentTime.innerText = "0:00"
      totalTime.innerText = formatTime(this.durationEstimate)
      progressBar.max = this.durationEstimate
      song.setVolume(volumeBar.value)
    }
  })
  song.play()
}

function formatTime(currentTime) {
  var seconds = Math.ceil(currentTime / 1000);
  var minutes = Math.floor(seconds / 60);
  var seconds = seconds - minutes * 60;

if (seconds < 10) {
  seconds = "0" + seconds;
}

return minutes + ":" + seconds;
}

function toggleVolumeBar() {
var volume = document.getElementById("volumeBar");
volume.classList.toggle("hidden");
}

document.querySelectorAll('.heart').forEach(function(heart) {
heart.addEventListener('click', function() {
heart.classList.toggle('active');
});
}); 

</script>

  </body>
  </html>
                