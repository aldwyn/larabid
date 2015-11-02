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
                <div class="thumbnail" style="width: 400px; margin: 20px auto">
                    <img alt="<%= item.name %>" src="/img/asus-zenphone-5.jpg">
                </div>
                <table class="table table-hover table-condensed">
                    <tbody>
                        <tr>
                            <th>Item Name</th>
                            <td><strong><%= item.name %></strong></td>
                        </tr>
                        <tr>
                            <th>Item Description</th>
                            <td>
                                <div class="well well-sm" style="margin-bottom: 0">
                                    <%= item.description %>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Start Bid Amount</th>
                            <td>&#8369;
                                <%= item.start_bid_amount %>
                            </td>
                        </tr>
                        <tr>
                            <th>Start Bid Datetime</th>
                            <td>
                                <%= item.start_bid_datetime %>
                            </td>
                        </tr>
                        <tr>
                            <th>End Bid Datetime</th>
                            <td>
                                <%= item.end_bid_datetime %>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-2">
                        <a href="" class="btn btn-danger" <% if (true) { %>
							disabled onclick="return false;" data-toggle="tooltip" data-placement="top" title="You must first sign in to do this."
						<% } %>><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>&nbsp; Delete</a>
                    </div>
                    <div class="col-md-8"></div>
                    <div class="col-md-2">
                        <a href="" class="btn btn-primary" <% if (true) { %>
							disabled onclick="return false;" data-toggle="tooltip" data-placement="top" title="You must first sign in to do this."
						<% } %>><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp; Update</a>
                    </div>
                </div>
            </div>
        </div>

    @include('templates/footer')
    @include('templates/scripts')

</body>

</html>