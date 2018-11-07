@extends('layouts.user-app')

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-md-2">
                <div class="sidebar content-box" style="display: block;">
                    <ul class="nav">
                        <!-- Main menu -->
                        <li ><a href="/dashboard"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                        <li class="current"><a href="/my-threads"><i class="glyphicon glyphicon-calendar"></i> My Threads</a></li>
                        <li><a href="my-comments"><i class="glyphicon glyphicon-stats"></i> My Comments</a></li>

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
                                @if(count($userThreads) == 1)
                                    <h1>You aint got any damn thread</h1>
                                    @else
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Thread Title</th>
                                        <th>Number of comments</th>
                                        <th>Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($userThreads as $userThread)
                                    <tr>
                                        <td>1</td>
                                        <td>{{$userThread->title}}</td>
                                        <td>{{count($userThread->threadComments)}}</td>
                                        <td>{{$userThread->created_at}}</td>
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