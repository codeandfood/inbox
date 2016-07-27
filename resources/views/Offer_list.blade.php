@extends('layouts.dashboard')

@section('content')
<div class="container" ng-app="EditDeleteOfferApp" ng-controller="EditDeleteOfferController">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                
                <div class="panel-heading">Edit or delete offers</div>
                <div class="panel-body">
                    <p>
                        @if($data)
                        <table style="width:100%">
                            <tr>
                                <th>Property</th>
                                <th>Offer Name</th>
                                <th>Offer Content</th>
                                <th>Offer Start Date</th>
                                <th>Offer End Date</th>
                                <th>Mobile</th>
                                <th>Price</th>
                                <!-- <th>Image</th> -->
                                <th>Edit/Delete</th>
                            </tr>

                            @foreach($data['properties'] as $key => $value)
                                @foreach($value->offers as $k =>$v)                            
                                <tr>
                                    <td><?=$value->name;?></td>
                                    <td><?=$v->name;?></td>
                                    <td><?=$v->content;?></td>
                                    <td><?=$v->start_date;?></td>
                                    <td><?=$v->end_date;?></td>
                                    <td><?=$v->mobile;?></td>
                                    <td><?=$v->price;?></td>
                                    <td><a href="offers/<?=$v->id;?>/edit"><button type="submit">Edit</button></a><br><button ng-click="confirmDelete(<?=$v->id;?>)">Delete</button></td>
                                </tr>
                                @endforeach
                            @endforeach
                        </table>
                        @endif
                            
                    </p>
                    
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection