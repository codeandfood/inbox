@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                @if($offer)
                <div class="panel-heading">show Offer</div>
                <div class="panel-body">
                    {{$offer}}
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
