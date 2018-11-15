@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 col-md-9">
            <h3 class="card-title">{{$threadDetails->title}}</h3>
            <hr>
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6 col-md-6">
                            <h5 >{{$threadDetails->user->name}} posted {{$threadDetails->created_at->diffForHumans()}}</h5> </div>
                        <div class="col-6 col-md-6 ">
                            @foreach($threadDetails->tags as $tag)
                                <span class="tag-background" style="color: white"> {{$tag->name}}</span>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="card-body">
                        <p class="card-text">{!! $threadDetails->body !!}</p>

                </div>
            </div>
            <br>
            {{--ADDED THIS BECAUSE OF PAGINATION--}}
            <?php $comments = $threadDetails->threadComments()->paginate(5); ?>
            @foreach($comments as  $comment)
            <div class="card">
                <h5 class="card-header">{{$comment->user->name}}</h5>
                <div class="card-body">
                    <p class="card-text">{!! $comment->body !!}</p>
                </div>
            </div>
            <br>

            @endforeach

            {{$comments->links()}}

            @guest
            @else
                <h5>Your comments here</h5>
                <form method="POST" action="/comment" enctype="multipart/form-data">
                    {{ csrf_field() }}

                 <input name="thread_id" hidden value="{{$threadDetails->id}}">
                    <textarea name="body" class="form-control" ></textarea>
                    <br>
                    <button class="btn bg-green" style="color: #fff;" type="submit"> Submit </button>
                </form>

                @include('layouts.errors')

                @endguest

        </div>

        {{--For the right hand side--}}

        <div class="col-12 col-md-3">
            {{--<i class="fas fa-user-alt default-avatar"  ></i>--}}
            <h3>
                Posted by: {{$threadDetails->user->name}}
            </h3>

            <table class="table table-bordered table-hover" style="text-align: center;" >
                <thead>
                <tr class="bg-green ">
                    <th scope="col" style="color: white">Tags</th>

                </tr>
                </thead>
                <tbody>
                @foreach($allTags as $allTag)
                    <tr>
                        <td><a href="/tags/{{$allTag->name}}" >{{$allTag->name}} </a></td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
        </div>
    <script>
        var route_prefix = "{{ url(config('lfm.url_prefix', config('lfm.prefix'))) }}";
    </script>

    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>
        var editor_config = {
            path_absolute : "",
            selector: "textarea[name=body]",
            plugins: [
                "link image"
            ],
            relative_urls: false,
            height: 129,
            file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + route_prefix + '?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                });
            }
        };

        tinymce.init(editor_config);
    </script>

    <script>
        {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/lfm.js')) !!}
    </script>
    <script>
        $('#lfm').filemanager('image', {prefix: route_prefix});
        $('#lfm2').filemanager('file', {prefix: route_prefix});
    </script>

@endsection