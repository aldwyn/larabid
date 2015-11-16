<!DOCTYPE html>
<html>

<head>
    <title>LaraBid | Dashboard</title>
    @include('templates/metadata')
</head>

<body>
    @include('templates/header')
    <div id="wrap" class="container">
        <div class="jumbotron" style="margin-top: 40px;">
            <h1><span class="glyphicon glyphicon-shopping-cart"></span> LaraBid</h1>
            <p>The new generation online bidding portal</p>
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
                <!-- <div class="col-md-2">
                    <div class="thumbnail">
                        <img src="{{ asset('/assets/img/portfolio/5.jpg') }}">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="thumbnail">
                        <img src="{{ asset('/assets/img/portfolio/6.jpg') }}">
                    </div>
                </div> -->

            </div>
        </div>
    </div>
    @include('templates/footer')
    @include('templates/scripts')
</body>

</html>
