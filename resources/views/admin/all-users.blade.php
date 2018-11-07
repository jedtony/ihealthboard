@extends('layouts.user-app')

@section('content')

    <div class="page-content">
        <div class="row">
            <div class="col-md-2">
                <div class="sidebar content-box" style="display: block;">
                    <ul class="nav">
                        <!-- Main menu -->
                        <li ><a href="index.html"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                        <li><a href="/my-threads"><i class="glyphicon glyphicon-calendar"></i> My Threads</a></li>
                        <li><a href="/my-comments"><i class="glyphicon glyphicon-stats"></i> My Comments</a></li>
                        <li><a href="/admin/all-threads"><i class="glyphicon glyphicon-list"></i> All Threads</a></li>
                        <li><a href="buttons.html"><i class="glyphicon glyphicon-record"></i> Tags</a></li>
                        <li><a href="/admin/guest-questions"><i class="glyphicon glyphicon-pencil"></i> Pending Questions</a></li>
                        <li class="current"><a href="forms.html"><i class="glyphicon glyphicon-tasks"></i> All Users</a></li>
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
                            <div class="panel-body table-responsive  ">
                                @if(count($allUsers) <= 1 )
                                    <h1>We aint got any user</h1>
                                @else
                                <table class="table table-striped ">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Registered</th>
                                        <th>Threads</th>
                                        <th>Comments</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {{--This is just for numbering--}}
                                    <?php
                                    $jed = 1;
                                    ?>
                                    @foreach($allUsers as $allUser)

                                    <tr>
                                        <td>{{$jed++}}</td>
                                        <td>{{$allUser-> name}}</td>
                                        <td>{{$allUser-> email}}</td>
                                        <td>{{$allUser -> created_at}}</td>
                                        <td>{{count($allUser ->threads)}}</td>
                                        <td>{{count($allUser -> threadComments)}}</td>
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