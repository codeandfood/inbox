@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!

                    @role('owner')
                        <li><a href="{{ URL::to('/admin/user') }}">Manager User</a></li>
                    @endrole
                    <li><a href="{{ URL::to('/admin/post') }}">Manager Posts</a></li>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
