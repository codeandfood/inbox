@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <!-- Add property block -->
                <div class="panel-heading">Add Property</div>
                <div class="panel-body">

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/property') }}" enctype="multipart/form-data" >

                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Property name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <textarea id="description" class="form-control" name="description"></textarea>
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('address1') ? ' has-error' : '' }}">
                            <label for="address1" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="address1" id="address1" >

                                @if ($errors->has('address1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('contact') ? ' has-error' : '' }}">
                            <label for="contact" class="col-md-4 control-label">Contact number</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="contact" id="contact" >

                                @if ($errors->has('contact'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contact') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('contact_email') ? ' has-error' : '' }}">
                            <label for="contact_email" class="col-md-4 control-label">Contact Email</label>

                            <div class="col-md-6">
                                <input class="form-control" type="contact_email" name="contact_email" id="contact_email" >

                                @if ($errors->has('contact_email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contact_email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Post
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Add property block -->

                @if($data['is_property_available'])
                    <div class="panel-heading">Property Details</div>
                    @foreach($data['property'] as $k => $v)
                    <div class="panel-body">
                        <b>Name</b> : {{$v['name']}}<br>
                        <b>Desc</b> : {{$v['description']}}
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
