@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Offers Postings</div>
                <div class="panel-body" ng-app="CreateOfferApp" ng-controller="CreateOfferController">
                    <form class="form-horizontal" role="form" enctype="multipart/form-data"><!--   method="POST" action="{{ url('/offers') }}"  >
 -->
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('property_id') ? ' has-error' : '' }}">
                            <label for="property_id" class="col-md-4 control-label">Property</label>

                            <div class="col-md-6">
                                <select id="property_id" type="text" class="form-control" name="property_id">
                                    @foreach($data['properties'] as $key => $val)
                                    <option value="{{$val->id}}">{{$val->name}}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('property_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('property_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Offer name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" ng-model='offer.name'>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                            <label for="content" class="col-md-4 control-label">Content</label>

                            <div class="col-md-6">
                                <textarea id="content" class="form-control" name="content" ng-model="offer.content"></textarea>
                                @if ($errors->has('content'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('start_date') ? ' has-error' : '' }}">
                            <label for="from" class="col-md-4 control-label">Start date</label>

                            <div class="col-md-6">     
                                <input class="form-control" type="text" id="from" name="start_date" ng-model="offer.start_date" >

                                @if ($errors->has('start_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('start_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('end_date') ? ' has-error' : '' }}">
                            <label for="to" class="col-md-4 control-label">End date</label>

                            <div class="col-md-6">
<!--                                 <textarea id="starting date" class="form-control" name="starting date"></textarea> -->
                                <input class="form-control" type="text" id="to" name="end_date" ng-model="offer.end_date">

                                @if ($errors->has('end_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('end_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            <label for="image" class="col-md-4 control-label">Image</label>

                            <div class="col-md-6">

                                <input class="form-control" type="file" name="image" id="image">
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                            <label for="price" class="col-md-4 control-label">Price</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="price" id="price" ng-model="offer.price">

                                @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                            <label for="mobile" class="col-md-4 control-label">Mobile number</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="mobile" id="mobile" ng-model="offer.mobile">

                                @if ($errors->has('mobile'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input class="form-control" type="email" name="email" id="email" ng-model="offer.email">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" ng-click="create()">
                                    <i class="fa fa-btn fa-user"></i> Post
                                </button>
                                <p style="text-align:center;color:red;font-size:90%;padding:2px"><span ng-show="error">[[ message ]]</span>
                                    <span ng-show="success">[[ message ]]</span></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
