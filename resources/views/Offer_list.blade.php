@extends('layouts.dashboard')

@section('content')
<div class="container" ng-app="EditDeleteOfferApp" ng-controller="EditDeleteOfferController">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                
                <div class="panel-heading">Edit or delete offers</div>
                <div class="panel-body">
                    <p>
                        @if($offer)
                        <table style="width:100%">
                            <tr>
                                <th>Offer Name</th>
                                <th>Offer Content</th>
                                <th>Offer Start Date</th>
                                <th>Offer End Date</th>
                                <th>Mobile</th>
                                <th>Price</th>
                                <!-- <th>Image</th> -->
                                <th>Edit/Delete</th>
                            </tr>

                            @foreach($offer as $key => $value)
                            <tr>
                                <td><?=$value->offer_name;?></td>
                                <td><?=$value->offer_content;?></td>
                                <td><?=$value->start_date;?></td>
                                <td><?=$value->end_date;?></td>
                                <td><?=$value->mobile;?></td>
                                <td><?=$value->price;?></td>
                                <td><a href="offers/<?=$value->id;?>/edit"><button type="submit">Edit</button></a><br><button ng-click="confirmDelete(<?=$value->id;?>)">Delete</button></td>
                            </tr>
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