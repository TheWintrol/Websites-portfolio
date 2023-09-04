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
      position: relative;
    }
    .fa-search {
        color: black !important;
        position: absolute;
    }
    .form-control{
        border-radius: 50px !important;
        position: relative;
    }
    .navbar{
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
    .btn{
      outline: none !important;
    }
    .row{
      margin-top: 10px;
    }
    .feat{
      margin-top: 10px;
    }
    .song-name {
      margin: 0;
      font-size: 20px;
    }
  .play-button {
    background: transparent;
    border: none;
    color: #000;
    cursor: pointer;
    font-size: 24px;
    margin-right: 10px;
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
    padding-top: 10px;
    font-size: 24px;
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
  .footer{
    height: 80px;
    display: flex;
    align-items: center;
  }
  .heart-play{
    display: flex;
    align-items: center;
    justify-content: center;
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

</style>
  </head>
  <body>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="MainPage.html">AmpTune</a>
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
      <form class="form-inline my-2 my-lg-0">
          <div class="input-group">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
            <div class="input-group-append">
              <button class="btn  my-2 my-sm-0" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>                
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <a class="nav-link" href="SavedSongs.html">Your library</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Playlists.html">Playlists</a>
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
        <header class="jumbotron jumbotron-fluid text-white text-center" style="background-image: url('https://picsum.photos/300/200?random=1'); background-size: cover;">
        <div class="container" >
          <!--- <img src="https://picsum.photos/300/200?random=1" alt="Jumbotron cover"> --->
            <h1 class="display-4">Discover the Best Music</h1>
            <p class="lead">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id
            tortor sed nunc consectetur sollicitudin vel sed ante. Duis vitae
            mi commodo, tempor velit vel, commodo mauris. Ut in nisi in lacus
            ullamcorper malesuada quis vitae risus. Donec sit amet velit vel
            urna euismod rhoncus.
            </p>
        </div>
        </header>

<div class="row">
    <div class="col-md-2">
      <div class="card">
        <img src="https://picsum.photos/300/200?random=1" alt="Album Cover">
        <div class="card-body smaller-card-body">
          <h5 class="card-title">Artist Title</h5>
          <h3 class="song-name">Song Name</h3>
          <div class="heart-play"> 
            <button id="play-button" class="play-button"><i class="fa fa-play"></i></button>
            <audio id="audio-player" src="test.mp3"></audio>
            <span class="heart"><i class="far fa-heart"></i></span>
          </div>
        </div>
      </div>
    </div>  
    <div class="col-md-2"> 
      <div class="card">
        <img src="https://picsum.photos/300/200?random=2" class="card-img-top" alt="...">
        <div class="card-body smaller-card-body">
          <h5 class="card-title">Artist Title</h5>
          <h3 class="song-name">Song Name</h3>
          <div class="heart-play"> 
          <button id="play-button" class="play-button"><i class="fa fa-play"></i></button>
          <audio id="audio-player" src="test.mp3"></audio>
          <span class="heart"><i class="far fa-heart"></i></span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-2"> 
      <div class="card">
        <img src="https://picsum.photos/300/200?random=3" class="card-img-top" alt="...">
        <div class="card-body smaller-card-body">
          <h5 class="card-title">Artist Title</h5>
          <h3 class="song-name">Song Name</h3>
          <div class="heart-play"> 
            <button id="play-button" class="play-button"><i class="fa fa-play"></i></button>
            <audio id="audio-player" src="test.mp3"></audio>
            <span class="heart"><i class="far fa-heart"></i></span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-2"> 
      <div class="card">
        <img src="https://picsum.photos/300/200?random=4" class="card-img-top" alt="...">
        <div class="card-body smaller-card-body">
          <h5 class="card-title">Artist Title</h5>
          <h3 class="song-name">Song Name</h3>
          <div class="heart-play"> 
            <button id="play-button" class="play-button"><i class="fa fa-play"></i></button>
            <audio id="audio-player" src="test.mp3"></audio>
            <span class="heart"><i class="far fa-heart"></i></span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-2"> 
        <div class="card">
          <img src="https://picsum.photos/300/200?random=4" class="card-img-top" alt="...">
          <div class="card-body smaller-card-body">
            <h5 class="card-title">Artist Title</h5>
            <h3 class="song-name">Song Name</h3>
            <div class="heart-play"> 
            <button id="play-button" class="play-button"><i class="fa fa-play"></i></button>
            <audio id="audio-player" src="test.mp3"></audio>
            <span class="heart"><i class="far fa-heart"></i></span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-2"> 
        <div class="card">
          <img src="https://picsum.photos/300/200?random=4" class="card-img-top" alt="...">
          <div class="card-body smaller-card-body">
            <h5 class="card-title">Artist Title</h5>
            <h3 class="song-name">Song Name</h3>
            <div class="heart-play"> 
              <button id="play-button" class="play-button"><i class="fa fa-play"></i></button>
              <audio id="audio-player" src="test.mp3"></audio>
              <span class="heart"><i class="far fa-heart"></i></span>
            </div>
          </div>
        </div>
      </div>
  </div>
  
   
 <!-- second line -->

 <div class="row">
    <div class="col-md-2">
      <div class="card">
        <img src="https://picsum.photos/300/200?random=1" class="card-img-top" alt="...">
        <div class="card-body smaller-card-body">
          <h5 class="card-title">Artist Title</h5>
          <h3 class="song-name">Song Name</h3>
          <div class="heart-play"> 
            <button id="play-button" class="play-button"><i class="fa fa-play"></i></button>
            <audio id="audio-player" src="test.mp3"></audio>
            <span class="heart"><i class="far fa-heart"></i></span>
          </div>
        </div>
      </div>
    </div>  
    <div class="col-md-2"> 
      <div class="card">
        <img src="https://picsum.photos/300/200?random=2" class="card-img-top" alt="...">
        <div class="card-body smaller-card-body">
          <h5 class="card-title">Artist Title</h5>
          <h3 class="song-name">Song Name</h3>
          <div class="heart-play"> 
            <button id="play-button" class="play-button"><i class="fa fa-play"></i></button>
            <audio id="audio-player" src="test.mp3"></audio>
            <span class="heart"><i class="far fa-heart"></i></span>
            </div>
        </div>
      </div>
    </div>
    <div class="col-md-2"> 
      <div class="card">
        <img src="https://picsum.photos/300/200?random=3" class="card-img-top" alt="...">
        <div class="card-body smaller-card-body">
          <h5 class="card-title">Artist Title</h5>
          <h3 class="song-name">Song Name</h3>
          <div class="heart-play"> 
            <button id="play-button" class="play-button"><i class="fa fa-play"></i></button>
            <audio id="audio-player" src="test.mp3"></audio>
            <span class="heart"><i class="far fa-heart"></i></span>
            </div>
        </div>
      </div>
    </div>
    <div class="col-md-2"> 
      <div class="card">
        <img src="https://picsum.photos/300/200?random=4" class="card-img-top" alt="...">
        <div class="card-body smaller-card-body">
          <h5 class="card-title">Artist Title</h5>
          <h3 class="song-name">Song Name</h3>
          <div class="heart-play"> 
            <button id="play-button" class="play-button"><i class="fa fa-play"></i></button>
            <audio id="audio-player" src="test.mp3"></audio>
            <span class="heart"><i class="far fa-heart"></i></span>
            </div>
        </div>
      </div>
    </div>
    <div class="col-md-2"> 
        <div class="card">
          <img src="https://picsum.photos/300/200?random=4" class="card-img-top" alt="...">
          <div class="card-body smaller-card-body">
            <h5 class="card-title">Artist Title</h5>
            <h3 class="song-name">Song Name</h3>
            <div class="heart-play"> 
              <button id="play-button" class="play-button"><i class="fa fa-play"></i></button>
              <audio id="audio-player" src="test.mp3"></audio>
              <span class="heart"><i class="far fa-heart"></i></span>
              </div>
          </div>
        </div>
      </div>
      <div class="col-md-2"> 
        <div class="card">
          <img src="https://picsum.photos/300/200?random=4" class="card-img-top" alt="...">
          <div class="card-body smaller-card-body">
            <h5 class="card-title">Artist Title</h5>
            <h3 class="song-name">Song Name</h3>
            <div class="heart-play"> 
              <button id="play-button" class="play-button"><i class="fa fa-play"></i></button>
              <audio id="audio-player" src="test.mp3"></audio>
              <span class="heart"><i class="far fa-heart"></i></span>
              </div>
          </div>
        </div>
      </div>
  </div>
  
 

<!-- Featured Playlists -->
<div class=" feat py-5 bg-light">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <h2 class="mb-4">Featured Playlists</h2>
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Playlist Title</h5>
                <p class="card-text">
                  Playlist name
                </p>
                <button id="play-button" class="play-button"><i class="fa fa-play"></i></button>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Playlist Title</h5>
                <p class="card-text">
                  Playlist name
                </p>
                <button id="play-button" class="play-button"><i class="fa fa-play"></i></button>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Playlist Title</h5>
                <p class="card-text">
                  Playlist name
                </p>
                <button id="play-button" class="play-button"><i class="fa fa-play"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">© 2023 AmpTune</p>
    </div>
    <!-- /.container -->
  </footer>

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
  
  <!-- Bootstrap core JavaScript -->
  <script src="path/to/soundmanager2.js"></script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script
  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  crossorigin="anonymous"></script>
<script
  src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/bundles/popper-core.min.js"
  crossorigin="anonymous"></script>
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
  crossorigin="anonymous"></script>
  <script src="soundmanagerv297a-20170601/script/soundmanager2.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/soundmanager2/2.97a.20150601/soundmanager2.min.js"></script>

  <script>

    var manager; // player
    var song; // playing song
    var songList;

    var playButton;
    var pauseButton;
    var progressBar;
    var currentTime;
    var totalTime;
    var volumeBar;
    var previousButton;
    var nextButton;
    var songs = ['test.mp3', 'test2.mp3'];
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

      previousButton.addEventListener('click', function() {
        playSong(songs[index--])
      })
      nextButton.addEventListener('click', function() {
        playSong(songs[index++])
      })

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
  
</div> 
  </body>
  </html>