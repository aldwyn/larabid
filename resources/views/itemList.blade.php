<!DOCTYPE html>
<html>

<head>
    <title>LaraBid | Dashboard</title>
    @include('templates/metadata')
</head>

<body>
    @include('templates/header')
    <div id="wrap" class="container">
        <div class="page-header">
            <h1>List of Items</h1>
        </div>
        @include('templates/errors')
        <div id="data-table">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Item No.</th>
                        <th>Item Name</th>
                        <th>Auctioneer</th>
                        <th>Item Description</th>
                        <th>Start Bid Amount</th>
                        <th>Start Bid Datetime</th>
                        <th>End Bid Datetime</th>
                        <th>Actions</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($items as $item)
                    <tr>
                        <th scope="row">
                            {{ $item->id }}
                        </th>
                        <td><a href="{{ asset('/item/' . $item->id) }}" data-toggle="tooltip" data-placement="top" title="Click to view this item's details."><strong>{{ $item->name }}</strong></a></td>
                        <td><strong>{{ $item->auctioneer->name }}</strong></td>
                        <td>
                            {{ $item->description }}
                        </td>
                        <td><strong>&#8369; {{ $item->start_bid_amount }}</strong></td>
                        <td>
                            {{ $item->start_bid_datetime }}
                        </td>
                        <td>
                            {{ $item->end_bid_datetime }}
                        </td>
                        <td>
                            @if ($item->auctioneer->id == Auth::user()->id)
                                <div class="col-md-6">
                                    <a href="{{ asset('/item/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" style="width: 100%" data-toggle="tooltip" data-placement="top" title="Update"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                </div>
                                <div class="col-md-6">
                                    <form action="{{ asset('/item/' . $item->id) }}" method="POST">
                                        {!! csrf_field() !!}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger btn-xs" style="width: 100%" data-toggle="tooltip" data-placement="top" title="Delete"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                    </form>
                                </div>
                            @else
                                <div class="col-md-12">
                                    <a href="{{ asset('/bid/create?item_id=' . $item->id) }}" class="btn btn-warning btn-xs" style="width: 100%" data-toggle="tooltip" data-placement="top" title="Bid"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Bid</a>
                                </div>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('templates/footer')
    @include('templates/scripts')
</body>

</html>
