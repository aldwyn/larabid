<!DOCTYPE html>
<html>

<head>
    <title>LaraBid | Bid</title>
    @include('templates/metadata')
</head>

<body>
    @include('templates/header')
    <div id="wrap" class="container">
        <div style="width: 60%" class="container">
            <div class="page-header">
                <h3>How much do you want to bid?</h3>
            </div>
                @include('templates/errors')
                <div class="well">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="thumbnail" style="margin-bottom: 0">
                                <img src="{{ asset('/assets/img/cart.ico') }}">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <h4>{{ $item->name }}</h4>
                            <p>{{ $item->description }}</p>
                        </div>
                    </div>
                </div>
                <form class="form-horizontal" action="{{ asset('/bid') }}" method="POST">
                    {!! csrf_field() !!}
                    <input type="hidden" name="item_id" value="{{ $item->id }}"/>
                    <div class="form-group">
                        <label for="itemStartBidAmount" class="col-sm-3 control-label">Bid amount</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <div class="input-group-addon">&#8369;</div>
                                <input type="number" class="form-control" name="bid_amount" id="itemStartBidAmount" placeholder="E.g. 100" value="12345" />
                                <div class="input-group-addon">.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10"></div>
                        <div class="col-sm-2">
                            <input type="submit" class="btn btn-primary" id="submit" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @include('templates/footer')
    @include('templates/scripts')
</body>

</html>
