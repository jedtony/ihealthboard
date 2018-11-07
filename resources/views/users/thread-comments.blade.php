@extends('layouts.user-app')

@section('content')

    <div class="page-content">
        <div class="row">
            <div class="col-md-2">
                <div class="sidebar content-box" style="display: block;">
                    <ul class="nav">
                        <!-- Main menu -->
                        <li ><a href="/dashboard"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                        <li ><a href="/my-threads"><i class="glyphicon glyphicon-calendar"></i> My Threads</a></li>
                        <li class="current"><a href="stats.html"><i class="glyphicon glyphicon-stats"></i> My Comments</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-10">

                <div class="row">

                    <div class="col-md-12">
                        <div class="content-box-large">
                            <div class="panel-heading">
                                <div class="panel-title">Threads</div>

                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                                    <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                @if(count($userComments) == 1)
                                    <h2> You aint got any comments</h2>

                                @else
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Thread Title</th>
                                        <th>Number of comments</th>
                                        <th>Date of Comment</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($userComments as $userComment)
                                    <tr>
                                        <td>1</td>
                                        <td>{{$userComment->thread->title}}</td>
                                        <td>{{count($userComment->thread->comments)}}</td>
                                        <td>{{$userComment->created_at}}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                    @endif
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>


@endsection