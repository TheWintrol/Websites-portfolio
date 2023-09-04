@include('admin.layouts.header')
<main class="pt-3 mx-lg-5">
    <div style="padding-top:70px" class="container-fluid ">
        <div class="row">
            <div class="col-12">
                <div class="card-m-white p-4 mt-3 mb-5">
                    <div class="row">
                        <div class="col-6"><h3>Edit - {{ $song->title }}</h3></div>
                        <div class="col-6"><button data-bs-toggle="modal" data-bs-target="#delete_song" class="btn btn-outline-danger col-12">Delete Song</button></div>
                        @include('admin.songs.modals.delete')
                    </div>
                    <div class="row">
                        <div class="col-12">
                            @include('admin.messages.message')
                            <form action="{{ route('admin.song.update', $song) }}" method="POST" enctype="multipart/form-data">
                                @CSRF
                                @method('PUT')
                                <div class="row">
                                    <div class="col-12">
                                        <label for="title">Song Title</label>
                                        <input class="form-control auth-form mb-4" type="text" name="title" value="{{ $song->title }}">
                                    </div>
                                    <div class="col-12">
                                        <label for="title">Artist</label>
                                        <input class="form-control auth-form mb-4" type="text" name="artist" value="{{ $song->artist }}">
                                    </div>
                                    <div class="col-12">
                                        <label for="title">Music file</label>
                                        <input class="form-control auth-form mb-4" type="file" name="file">
                                    </div>
                                    <div class="col-6">
                                        <label for="title">Song Image</label>
                                        <input class="form-control auth-form mb-4" type="file" name="image">
                                    </div>  
                                    <div class="col-6">
                                        <img style="width:150px;" src="{{ asset('songs/images/' . $song->image) }}" alt="">
                                    </div>  
                                    <div class="row">
                                        <div class="col-12">
                                            <button class="btn main-button col-12">Update</button>
                                        </div>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@include('admin.layouts.footer')