<!DOCTYPE html>
<html>

<head>
    <title>Add an Item | Fsoft Bidding Engine</title>
    @include('templates/metadata')
</head>

<body>
    @include('templates/header')
    <div id="wrap" class="container">
        <div style="width: 60%" class="container">
            <div class="page-header">
                <h3>Add an item to auction...</h3>
            </div>
                @include('templates/errors')
                <form class="form-horizontal" action="{{ asset('/item') }}" method="POST">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="itemName" class="col-sm-3 control-label">Name of the item</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="itemName" name="name" placeholder="E.g. Toothbrush" value="Toothbrush" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="itemDescription" class="col-sm-3 control-label">Item description
                        </label>
                        <div class="col-sm-9">
                            <textarea rows="2" class="form-control" id="itemDescription" name="description" placeholder="Write a little persuading description about the item...">Item description for </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="itemStartBidAmount" class="col-sm-3 control-label">Start bid amount</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <div class="input-group-addon">&#8369;</div>
                                <input type="number" class="form-control" name="start_bid_amount" id="itemStartBidAmount" placeholder="E.g. 100" value="12345" />
                                <div class="input-group-addon">.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="itemStartBidDate" class="col-sm-3 control-label">Start date of auction</label>
                        <div class="col-sm-9">
                            <div class='input-group date' id='itemStartBidDate'>
                                <input type='text' class="form-control" name="start_bid_datetime" />
                                <span class="input-group-addon"> <span
                        class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="itemEndBidDate" class="col-sm-3 control-label">End date of auction</label>
                        <div class="col-sm-9">
                            <div class='input-group date' id='itemEndBidDate'>
                                <input type='text' class="form-control" name="end_bid_datetime" />
                                <span class="input-group-addon"> <span
                        class="glyphicon glyphicon-calendar"></span>
                                </span>
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
