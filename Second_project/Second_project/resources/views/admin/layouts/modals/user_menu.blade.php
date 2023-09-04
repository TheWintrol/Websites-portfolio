<!-- Full Height modal right admin menu-->

              <div class="modal fade right" id="userMenu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true" data-backdrop="false">
                <div class="modal-dialog modal-full-height modal-right modal-notify" role="document">
                  <!--Content-->
                  <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header bg_deep_blue">
                      <p class="heading lead">{{ Auth::user()->name }}</p>
                      <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                      </button>
                    </div>

                    <!--Body-->
                    <div class="modal-body">
                      <div class="text-center">
                        <p><i style="margin-right:10px;" class="fas fa-user-alt p-1"></i>Email: {{ Auth::user()->email }}</p>
                      </div>
                      <ul class="list-group z-depth-0">
                        <li class="list-group-item justify-content-between"><a href="{{ route('admin.song.index') }}">
                          Songs
                          <span class="float-right deep-blue"><i class="fas fa-arrow-right"></i></span>
                        </a></li>
                      </ul>
                    </div>

                    <!--Footer-->
                    <div class="modal-footer justify-content-center">
                      <a role="button" class="btn btn-outline-deep_blue waves-effect"  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Log Out</a>
                    </div>
                  </div>
                  <!--/.Content-->
                </div>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
                 </form>
              </div>


 <!-- End of right admin menu-->