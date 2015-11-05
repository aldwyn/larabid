<!DOCTYPE html>
<html>

<head>
    <title>LaraBid | {{ $item->name }} </title>
    @include('templates/metadata')
</head>

<body>
    @include('templates/header')
    <div id="wrap" class="container">
        <div class="page-header">
            <h3>{{ $item->name }}</h3>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail" style="width: 400px; margin: 20px auto">
                    <img alt="{{ $item->name }}" src="{{ asset('/assets/img/cart.ico') }}">
                </div>
            </div>
            <div class="col-md-8">
                <div class="container-fluid" style="width: 80%">
                    <table class="table table-hover table-condensed">
                        <tbody>
                            <tr>
                                <th>Item Name</th>
                                <td><strong>{{ $item->name }}</strong></td>
                            </tr>
                            <tr>
                                <th>Item Description</th>
                                <td>
                                    <div class="well well-sm" style="margin-bottom: 0">
                                        {{ $item->description }}
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Start Bid Amount</th>
                                <td>&#8369;
                                    {{ $item->start_bid_amount }}
                                </td>
                            </tr>
                            <tr>
                                <th>Start Bid Datetime</th>
                                <td>
                                    {{ $item->start_bid_datetime }}
                                </td>
                            </tr>
                            <tr>
                                <th>End Bid Datetime</th>
                                <td>
                                    {{ $item->end_bid_datetime }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-2">
                            <form action="{{ asset('/item/' . $item->id) }}" method="POST">
                                {!! csrf_field() !!}
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" href="{{ asset('/item') }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp; Delete</button></td>
                            </form>
                        </div>
                        <div class="col-md-10">
                            <a href="{{ asset('/item/' . $item->id . '/edit') }}" class="btn btn-primary"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp; Update</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('templates/footer')
    @include('templates/scripts')
</body>

</html>
