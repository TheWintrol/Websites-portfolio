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
    .card{
      min-height: 260px;
    }
    .card-body{
      display:flex;
      flex-direction:column;
      justify-content: space-between;
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
      align-items:stretch;
    }
    .mb-4{
      flex-grow: 1;
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
    justify-content: space-between;
  }
  .playlist{
    background-color: #ADD8E6;
		border: none;
		color: white;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		margin: 4px 2px;
		cursor: pointer;
		border-radius: 5px;
		transition-duration: 0.4s;
		}
		.playlist:hover {
			background-color: #00008B;
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
        <header class="jumbotron jumbotron-fluid text-white text-center" style="background-image: url('https://motionarray.imgix.net/preview-542651-EnaLRwaoaCY1VdVf-large.jpg?w=660&q=60&fit=max&auto=format'); background-size: cover;">
        <div class="container" >
          <!--- <img src="https://picsum.photos/300/200?random=1" alt="Jumbotron cover"> --->
            <h1 class="display-4">Discover the Best Music</h1>
            <p class="lead">
            Discover the Latest Music and Artists: Your Ultimate Guide to the Sound of Now!
Looking for new music to add to your playlist? Explore our comprehensive collection of the latest releases and emerging artists from around the world!
            </p>
        </div>
        </header>

<div class="row">
    @foreach($songs as $song)
    <div class="col-md-2 mb-4">
      <div class="card">
        <img src="{{ asset('songs/images/' . $song->image) }}" alt="Album Cover">
        <div class="card-body smaller-card-body">
          <h5 class="card-title">{{ $song->artist }}</h5>
          <h3 class="song-name">{{ $song->title }}</h3>
          <div class="heart-play"> 
            <button id="play-button" class="play-button"><i class="fa fa-play" data-attr-id="{{ $song->id }}"></i></button>
            <!-- <audio id="audio-player" src="{{ asset('songs/files/' . $song->file) }}"></audio> -->
            @auth 
            <span onclick="createLike({{ $song->id }})" class="heart {{ Auth::user()->songs->contains($song) ? 'active' : '' }}"><i class="far fa-heart"></i></span>
            @endauth
            @guest 
            <span class="heart"><i class="far fa-heart"></i></span>
            @endguest
            <span class="download"  data-attr-id="{{ $song->id }}"> <i class="fas fa-download" data-attr-id="{{ $song->id }}"> </i></span>
          </div>
        </div>
      </div>
    </div>  
    @endforeach
</div> 
<!-- Featured Playlists -->
<div class=" feat py-5 bg-light">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <h2 class="mb-4">Featured Playlists</h2>
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="songs/images/1682888674.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Rock</h5>
                <button class="playlist" onclick="window.location.href='http://127.0.0.1:8000/playlist-info?title=Rock'">Go to the playlist</button>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="songs/images/1682888626.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Workout</h5>
                <button class="playlist" onclick="window.location.href='http://127.0.0.1:8000/playlist-info?title=Workout'">Go to the playlist</button>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="songs/images/1682888736.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Pop music</h5>
                <button class="playlist" onclick="window.location.href='http://127.0.0.1:8000/playlist-info?title=Pop music'">Go to the playlist</button>
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
      url: "{{ asset('soundmanagerv297a-20170601/swf') }}",
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
          console.log(this.value);
          if (song){
            song.setPosition(this.value);
            console.log(song);
            console.log(this.value);
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
  
</div> 
  </body>
  </html>
                