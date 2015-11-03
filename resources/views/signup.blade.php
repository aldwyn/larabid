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
                <h2>Register...</h2>
            </div>
            <form class="form-horizontal" action="{{ asset('/auth/register') }}" method="POST">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Name
                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Juan Lechonero" value="Juan Lechonero">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email address
                    </label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="email" name="email" placeholder="E.g. juan.tamad@fsoft.com.ph" value="juan.tamad@fsoft.com.ph">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="password" value="aldwyn" name="password" placeholder="E.g. **********">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password_confirmation" class="col-sm-3 control-label">Confirm Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="password_confirmation" value="aldwyn" name="password_confirmation" placeholder="E.g. **********">
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
