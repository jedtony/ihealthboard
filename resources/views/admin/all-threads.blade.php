@extends('layouts.user-app')

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-md-2">
                <div class="sidebar content-box" style="display: block;">
                    <ul class="nav">
                        <!-- Main menu -->
                        <li class="/admin"><a href="index.html"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                        <li><a href="/my-threads"><i class="glyphicon glyphicon-calendar"></i> My Threads</a></li>
                        <li><a href="/my-comments"><i class="glyphicon glyphicon-stats"></i> My Comments</a></li>
                        <li><a href="tables.html"><i class="glyphicon glyphicon-list"></i> All Threads</a></li>
                        <li><a href="buttons.html"><i class="glyphicon glyphicon-record"></i> Tags</a></li>
                        <li><a href="admin/guest-questions"><i class="glyphicon glyphicon-pencil"></i> Pending Questions</a></li>
                        <li><a href="admin/all-users"><i class="glyphicon glyphicon-tasks"></i> All Users</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-10">

                <div class="row">

                    <div class="col-md-12">
                        <div class="content-box-large">
                            <div class="panel-heading">
                                <div class="panel-title">All Threads</div>

                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                                    <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                @if(count($allThreads) == 1)
                                    <h1>There are no threads</h1>
                                @else
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Thread Title</th>
                                            <th>Number of comments</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($allThreads as $allThread)
                                            <tr>
                                                <td>1</td>
                                                <td><a href="/thread/{{$allThread->id}}"> {{$allThread->title}} </a></td>
                                                <td>{{count($allThread->threadComments)}}</td>
                                                <td>{{$allThread->created_at}}</td>
                                                <td><a href="" class="btn btn-danger"> Delete</a> </td>
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