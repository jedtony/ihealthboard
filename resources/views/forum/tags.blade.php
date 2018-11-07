@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 col-md-12">
            <h2>Tags</h2>
            <hr>
        </div>
    </div>

    <!-- THIS IS WHERE THE MAIN BODY STARTED -->
    <div class="row">
        <div class="col-12 col-md-2">
            @guest
            @else
                <a href="/forum/create" class="btn btn-block btn-primary" role="button">Create Thread</a>
            <br>
                @endguest
                <table class="table table-bordered table-hover" style="text-align: center;" >
                    <thead>
                    <tr>
                        <th scope="col">Tags</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($allTags as $allTag)
                        <tr>
                                <td>
                                    <a href="/tag/{{$allTag->name}}">{{$allTag->name}} </a>
                                </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
        </div>

        <div class="col-12 col-md-9">
            @if(count($threads) == 0)
                <h1>There are no threads here</h1>
            @else
                @foreach($threads as $thread)
                    <div class="card ">
                        <div class="card-header ">
                            <div class="row">
                                <div class="col-6 col-md-6"><h5 >{{$thread->user->name}}</h5> </div>
                                <div class="col-6 col-md-6 ">
                                    @foreach($thread->tags as $tag)
                                        <span > {{$tag->name}}</span>
                                @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <a href="/thread/{{$thread->id}}">
                                <h5 class="card-title">{{$thread->title}}</h5>
                                {{--<p class="card-text">{{$thread->body}}</p>--}}
                            </a>
                        </div>
                    </div>
                    <br>
                @endforeach
            @endif
            <div class="row">
                <div class=" col-12 col-md-7 " style="position: fixed; bottom: 0; width: 100%;">
                    @guest
                    <form action="/guest-question" method="post">
                        {{csrf_field()}}
                        <input class="form-control form-control-sm" name="description" type="text" placeholder="ask any health question">
                        <small id="emailHelp" class="form-text text-muted">You don't have to register to ask.</small>
                        <button type="submit" class=" btn btn-primary " role="button">
                            submit</button>
                    </form>
                    @endguest
                </div>
            </div>
        </div>

    </div>


@endsection