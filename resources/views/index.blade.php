<!DOCTYPE html>
<html>

<head>
    <title>LaraBid | Dashboard</title>
    @include('templates/metadata')
</head>

<body style="background-image: url({{ asset('assets/img/header.jpg') }}); background-size: cover;">
    @include('templates/header')
    <div id="wrap" class="container">
        <div id="larabidJumbotron">
            <div class="row">
                <div class="col-md-6">
                    <h1 style="font-size: 4em; font-weight: bolder"><em><span class="glyphicon glyphicon-shopping-cart"></span> LaraBid</em></h1>
                    <p style="font-size: 1.3em">The new generation of online bidding & auctioneering.</p>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="{{ asset('/assets/img/portfolio/5.jpg') }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="{{ asset('/assets/img/portfolio/6.jpg') }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="{{ asset('/assets/img/portfolio/1.jpg') }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="{{ asset('/assets/img/portfolio/2.jpg') }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="{{ asset('/assets/img/portfolio/3.jpg') }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="{{ asset('/assets/img/portfolio/4.jpg') }}">
                    </div>
                </div>
            </div>
            <a href="{{ asset('auth/register') }}" class="btn btn-warning">Get started</a>
        </div>
    </div>
    @include('templates/footer')
    @include('templates/scripts')
</body>

</html>
