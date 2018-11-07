@extends('layouts.user-app')

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-md-2">
                <div class="sidebar content-box" style="display: block;">
                    <ul class="nav">
                        <!-- Main menu -->
                        <li class="current"><a href="/dashboard"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                        <li><a href="/my-threads"><i class="glyphicon glyphicon-calendar"></i> My Threads</a></li>
                        <li><a href="/my-comments"><i class="glyphicon glyphicon-stats"></i> My Comments</a></li>
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

					  		{{--<textarea class="form-control profile-description">	Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.--}}
								{{--</textarea>--}}
                            {{--<br /><br />--}}
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-12 ">
                        <div class="table-responsive">
                            <table class="table table-stripe">
                                <thead></thead>
                                <tbody>
                                <tr>
                                    <td> Total number of threads created by you:</td>
                                    <td>{{$userThreads}}</td>
                                </tr>
                                <tr>
                                    <td> Total number of Comments made by you:</td>
                                    <td>{{$userComments}}</td>
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