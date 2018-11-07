@extends('layouts.app')
@section('content')

    <div class="col-12 col-md-12">
        <form method="POST" action="/thread" enctype="multipart/form-data">
        {{ csrf_field() }}

            <div class="form-group">
                <label for="exampleInputEmail1">Topic</label>
                <input type="text" class="form-control" name="title" id="inputTitle"
                       aria-describedby="titleHelp" placeholder="Enter Topic" value="{{old('title')}}" required>
                <small id="emailHelp" class="form-text text-muted">The number of letters remaining is: </small>
            </div>

            <textarea name="body" class="form-control" ></textarea>

            <div class="form-group">
                <label for="exampleFormControlSelect2">Tags</label>
                <select multiple class="form-control" id="exampleFormControlSelect2" name="tags[]">
                    @foreach($allTags as $allTag)
                        <option value="{{$allTag->id}}" >{{$allTag->name}} </option>

                    @endforeach
                </select>
                <small id="emailHelp" class="form-text text-muted">You can select multiple tags</small>
            </div>
            <input type="submit">
        </form>

        @include('layouts.errors')
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