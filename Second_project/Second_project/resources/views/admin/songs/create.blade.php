@include('admin.layouts.header')
<main class="pt-3 mx-lg-5">
    <div style="padding-top:70px" class="container-fluid ">
        <div class="row">
            <div class="col-12">
                <div class="card-m-white p-4 mt-3 mb-5">
                    <div class="row">
                        <div class="col-12"><h3>Create Song</h3></div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            @include('admin.messages.message')
                            <form action="{{ route('admin.song.store') }}" method="POST" enctype="multipart/form-data">
                                @CSRF
                                <div class="row">
                                    <div class="col-12">
                                        <label for="title">Song Title</label>
                                        <input class="form-control auth-form mb-4" type="text" name="title">
                                    </div>
                                    <div class="col-12">
                                        <label for="title">Artist</label>
                                        <input class="form-control auth-form mb-4" type="text" name="artist">
                                    </div>
                                    <div class="col-12">
                                        <label for="title">Music file</label>
                                        <input class="form-control auth-form mb-4" type="file" name="file">
                                    </div>
                                    <div class="col-12">
                                        <label for="title">Song Image</label>
                                        <input class="form-control auth-form mb-4" type="file" name="image">
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <button class="btn main-button col-12">Upload</button>
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