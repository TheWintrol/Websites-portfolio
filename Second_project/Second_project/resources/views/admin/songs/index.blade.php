@include('admin.layouts.header')
<main class="pt-3 mx-lg-5">
    <div style="padding-top:70px" class="container-fluid ">
        <div class="row">
            <div class="col-12">
                <div class="card-m-white p-4 mt-3 mb-5">
                    <div class="row">
                        <div class="col-6"><h3>Songs</h3></div>
                        <div class="col-6 text-right"><a href="{{ route('admin.song.create') }}"><button class="btn main-button col-12">Add Song</button></a></div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <table class="table cursor_pointer">
                                <thead>
                                    <tr>
                                        <th class="font-weight-bold" scope="col-1">#</th>
                                        <th class="font-weight-bold" scope="col">Title</th>
                                        <th class="font-weight-bold" scope="col">Artist</th>
                                        <th class="font-weight-bold" scope="col">User liked</th>
                                        <th class="font-weight-bold" scope="col">Image</th>
                                        <th class="font-weight-bold" scope="col">Actions</th>
                                    </tr>
                                </thead> 
                                <tbody> 
                                @foreach($songs as $song)
                                    <tr>
                                        <th scope="row"><a href="">{{ $loop->iteration }}</a></th>
                                        <td><a href="">{{ $song->title }}</a></td>
                                        <td><a href="">{{ $song->artist }}</a></td>
                                        <td><a href="">5</a></td>
                                        <td><a href=""><img style="width:35px;" src="{{ asset('songs/images/' . $song->image) }}" alt=""></a></td>
                                        <td><a href="{{ route('admin.song.edit', $song) }}">Edit</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@include('admin.layouts.footer')