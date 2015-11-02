<!DOCTYPE html>
<html>

<head>
    <title>Update an Item | Fsoft Bidding Engine</title>
    @include('templates/metadata')
</head>

<body>

    @include('templates/header')

    <div id="wrap" class="container">
        <div style="width: 60%" class="container">
            <div class="page-header">
                <h2>Update an item to auction...</h2>
            </div>
            
            @include('templates/errors')

            <form class="form-horizontal" action="<c:url value='/updateItem' />" method="POST">
                <div class="form-group">
                    <label for="itemId" class="col-sm-3 control-label">Item Id.</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="itemId" name="item_id" placeholder="E.g. 199" value="${item.item_id}" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="itemName" class="col-sm-3 control-label">Name of the item</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="itemName" name="item_name" placeholder="E.g. Toothbrush" value="${item.item_name}" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="itemDescription" class="col-sm-3 control-label">Item description
                    </label>
                    <div class="col-sm-9">
                        <textarea rows="2" class="form-control" id="itemDescription" name="item_description" placeholder="Write a little persuading description about the item...">${item.item_description}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="itemDescription" class="col-sm-3 control-label">Start bid amount</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
                            <input type="number" class="form-control" name="start_bid_amount" id="itemDescription" placeholder="E.g. 100" value="${item.start_bid_amount}" />
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
                <input type="hidden" name="account_id" value="2" />
            </form>
        </div>
    </div>
    
    @include('templates/footer')
    @include('templates/scripts')

</body>

</html>
