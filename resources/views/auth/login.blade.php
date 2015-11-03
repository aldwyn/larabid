<!DOCTYPE html>
<html>

<head>
    <title>Fsoft Bidding Engine</title>
    @include('templates/metadata')
</head>

<body>
    @include('templates/header')
    <div id="wrap" class="container">
        <div style="width: 60%" class="container">
            <div class="page-header">
                <h2>Sign in...</h2>
            </div>
            <div class="alert alert-warning" role="alert">
                <span>First things first. This is to ensure that you are in
				our data store.</span>
            </div>
            <form class="form-horizontal" action="{{ asset('/auth/login') }}" method="POST">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email address
                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="email" name="email" placeholder="E.g. juan.tamad@fsoft.com.ph" value="juan.tamad@fsoft.com.ph">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="password" value="aldwyn" name="password" placeholder="E.g. **********">
                    </div>
                </div>
                @include('templates/errors')
                <div class="form-group">
                    <div class="col-sm-10"></div>
                    <div class="col-sm-2">
                        <input type="submit" class="btn btn-primary" id="submit" value="Proceed" />
                    </div>
                </div>
            </form>
        </div>
    </div>
    @include('templates/footer')
    @include('templates/scripts')
</body>

</html>
