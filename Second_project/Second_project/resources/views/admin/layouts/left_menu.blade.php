    <!-- Sidebar -->
    <div style="overflow:scroll;" class="sidebar-fixed position-fixed">

      <a class="logo-wrapper waves-effect">
       <h3>AmpTune</h3>
      </a>

      <div class="list-group list-group-flush">
        <a href="{{ route('admin.song.index') }}" class="{{ (request()->segment(2) == 'song') ? 'active' : '' }} list-group-item list-group-item-action waves-effect">
          <i class="fa-solid fa-music mr-3"></i>Songs
        </a> 
      </div>
    </div>
    <!-- Sidebar -->
