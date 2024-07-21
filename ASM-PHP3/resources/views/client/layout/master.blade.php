<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('tieudetrang')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Bootstrap News Template - Free HTML Templates" name="keywords">
    <meta content="Bootstrap News Template - Free HTML Templates" name="description">

    @include('client.layout.partials.css')

</head>

<body>
    <!-- Brand Start -->
    <div class="brand">
        @include('client.layout.partials.brand')
    </div>
    <!-- Brand End -->

    <!-- Nav Bar Start -->
    <div class="nav-bar">
        <div class="container">
            @include('client.layout.partials.header-nav')
        </div>
    </div>
    <!-- Nav Bar End -->

    @yield('content')

    <!-- Footer Start -->
    <div class="footer">
        @include('client.layout.partials.footer')
    </div>
    <!-- Footer End -->
    
    <!-- Footer Bottom Start -->
    <div class="footer-bottom">
        @include('client.layout.partials.footer-bottom')
    </div>
    <!-- Footer Bottom End -->

    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    @include('client.layout.partials.js')
</body>

</html>