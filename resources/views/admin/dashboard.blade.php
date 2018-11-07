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
                        <li><a href="/admin/all-threads"><i class="glyphicon glyphicon-list"></i> All Threads</a></li>
                        <li><a href="buttons.html"><i class="glyphicon glyphicon-record"></i> Tags</a></li>
                        <li><a href="admin/guest-questions"><i class="glyphicon glyphicon-pencil"></i> Pending Questions</a></li>
                        <li><a href="admin/all-users"><i class="glyphicon glyphicon-tasks"></i> All Users</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10">
                <div class="row">

                    <div class="col-md-12">
                        <div class="content-box-header">
                            {{--<div class="panel-title">Brief Description about self</div>--}}

                            {{--<div class="panel-options">--}}
                                {{--<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>--}}
                                {{--<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="content-box-large box-with-header">--}}

					  		{{--<textarea class="form-control">	Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.--}}
								{{--</textarea>--}}
                            {{--<br /><br />--}}
                        {{--</div>--}}
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-12 ">
                        <h5>Overview</h5>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-stripe">
                                <thead></thead>
                                <tbody>
                                <tr>
                                    <td> Total number of threads created :</td>
                                    <td>{{$allThreads}}</td>
                                </tr>
                                <tr>
                                    <td> Total number of Comments made:</td>
                                    <td>{{$allComments}}</td>
                                </tr>
                                <tr>
                                    <td> Total number of users:</td>
                                    <td>{{$allUsers}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection