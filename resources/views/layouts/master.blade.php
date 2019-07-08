<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- css -->
    @include('partials-layouts.topcss')
    <!-- js -->
    @include('partials-layouts.topjs')
</head>
<body>
    <div class="wrapper" >
        <!-- Navigation -->
            @include('partials-layouts.nav')
        <!-- End Nav -->
        <!-- start sidebar + content -->
        <div class="row sidbarandcontent" style="margin-right: 15px;margin-left: 15px;">
        <!-- sidebar -->
            <div class="col-md-3">
                @include('partials-layouts.sidbar')
            </div>
            <!-- end Sidbar -->
            <!-- content -->
            <div class="col-md-9">
                @yield('content')
            </div>
            <!-- End Content -->
        </div>
        <!-- End sidebar + content -->
        <!-- footer -->
        @include('partials-layouts.footer')
        <!-- end footer -->
    </div>
    <!-- js -->
    @include('partials-layouts.bottomjs')
</body>
</html>