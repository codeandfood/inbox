@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                @if($offer)
                <div class="panel-heading">Edit Offer</div>
                <div class="panel-body" ng-app="EditDeleteOfferApp" ng-controller="EditDeleteOfferController">
                    <div class="col-md-7">
                    <form ><!-- class="form-horizontal" role="form" method="POST" action="{{ url('/offers/') }}/{{$offer->id}}/update" enctype="multipart/form-data" > -->

                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Offer name</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" name="name" ng-init="offer.name='{{$offer->name}}'" ng-model='offer.name'>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                            <label for="content" class="col-md-4 control-label">Content</label>

                            <div class="col-md-8">
                                <textarea id="content" class="form-control" name="content" ng-model="offer.content" ng-init="offer.content='{{$offer->content}}'" ></textarea>
                                @if ($errors->has('content'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('start_date') ? ' has-error' : '' }}">
                            <!-- <label for="start_date" class="col-md-4 control-label">Start date</label> -->
                            <label for="from" class="col-md-4 control-label">Start date</label>

                            <div class="col-md-8">
                                <input class="form-control" type="text" id="from" name="start_date" ng-init="offer.start_date='{{$offer->start_date}}'" ng-model="offer.start_date">

                                <!-- <input class="form-control" type="date" name="start_date" id="start_date" ng-init="offer.start_date='{{$offer->start_date}}'" ng-model="offer.start_date"> -->


                                @if ($errors->has('start_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('start_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('end_date') ? ' has-error' : '' }}">
                            <!-- <label for="end_date" class="col-md-4 control-label">End date</label> -->
                            <label for="to" class="col-md-4 control-label">End date</label>
                            <div class="col-md-8">
                                
                                <!-- <input class="form-control" type="date" name="end_date" id="end_date" ng-init="offer.end_date='{{$offer->end_date}}'" ng-model="offer.end_date">  -->
                                <input class="form-control" type="text" id="to" name="end_date" ng-init="offer.end_date='{{$offer->end_date}}'" ng-model="offer.end_date">

                                @if ($errors->has('end_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('end_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            <label for="image" class="col-md-4 control-label">Image</label>

                            <div class="col-md-8">

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

                            <div class="col-md-8">
                                <input class="form-control" type="text" name="price" id="price" ng-init="offer.price='{{$offer->price}}'" ng-model="offer.price">

                                @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                            <label for="mobile" class="col-md-4 control-label">Mobile number</label>

                            <div class="col-md-8">
                                <input class="form-control" type="text" name="mobile" id="mobile"  ng-init="offer.mobile='{{$offer->mobile}}'" ng-model="offer.mobile">

                                @if ($errors->has('mobile'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-8">
                                <input class="form-control" type="email" name="email" id="email" ng-init="offer.email='{{$offer->email}}'" ng-model="offer.email">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" ng-click="edit({{$offer->id}})">
                                    <i class="fa fa-btn fa-user"></i> Edit
                                </button>
                                <p style="text-align:center;color:red;font-size:90%;padding:2px"><span ng-show="error">[[ message ]]</span>
                                    <span ng-show="success">[[ message ]]</span></p>
                            </div>
                        </div>
                    </form>
                    </div>
                    <div class="col-md-5">
                        <label>Current Image</label>
                        <img style="width:100%;" src="../../public/images/lailascounty/{{$offer->image_name}}">
                        <span>*Note : </span>
                    </div>

                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
