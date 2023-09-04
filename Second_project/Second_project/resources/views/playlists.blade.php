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
    .row {
    display: flex;
    flex-wrap: nowrap;
    align-items: center;
    }
    .playlist {
    background-color: white;
    box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.3);
    margin-bottom: 10px;
    padding: 5px;
    border-radius: 5px;
    transition: transform 0.3s ease-in-out;
    vertical-align: top;
    flex-grow: 1;
    min-width: 0;
    }
    .playlist:hover {
        transform: scale(1.05);
    }
    .playlist img {
        width: 80%;
        border-radius: 5px;
    }
    .playlist h2 {
        margin: 5px 0;
        font-size: 1rem;
    }
    .playlist p {
    margin: 0;
    color: #888;
    font-size: 0.7rem;
    line-height: 1rem;
    max-height: 2.1rem;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
}
    .playlist a {
    color: #333;
    text-decoration: none;
    font-size: 0.8rem;
    font-weight: bold;
    display: inline-block;
    margin-top: 5px;
    padding: 3px 5px;
    border-radius: 3px;
     background-color: #f2f2f2;
    transition: background-color 0.3s ease-in-out;
    }
    .playlist a:hover {
        background-color: #ddd;
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
        <div class="container">
            <h1 class="display-4">Playlists</h1>
        </div>
        </header>

        
        <div class="row">
            <div class="col-md-3">
              <div class = "playlist"> 
                <img src="songs/images/1682888599.jpg" alt="Playlist 1">
                <h2>Rap</h2>
                <a href="{{ url('/playlist-info?title=Rap') }}">Listen Now</a>
              </div>
            </div>
            <div class="col-md-3">
            <div class = "playlist"> 
                <img src="songs/images/1682888736.jpg" alt="Playlist 2">
                <h2>Pop music</h2>
                <a href="{{ url('/playlist-info?title=Pop music') }}">Listen Now</a>
            </div>
            </div>
            <div class="col-md-3">
            <div class = "playlist"> 
                <img src="songs/images/1682888674.jpg" alt="Playlist 2">
                <h2>Rock</h2>
                <a href="{{ url('/playlist-info?title=Rock') }}">Listen Now</a>
            </div>
            </div>
            <div class="col-md-3">
            <div class = "playlist"> 
                <img src="songs/images/1682888626.jpg" alt="Playlist 2">
                <h2>Workout</h2>
                <a href="{{ url('/playlist-info?title=Workout') }}">Listen Now</a>
            </div>
            </div>
        </div>

  <!-- Footer -->
  <footer class="footer py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">© 2023 Soundcloud</p>
    </div>
  </footer>
  
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
 
</div> 


<script>

var url = new URLSearchParams(window.location.search);
document.getElementById('name').textContent=url.get("title");

</script>
  </body>
  </html>
                