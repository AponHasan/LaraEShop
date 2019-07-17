<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('admin.layouts.partials-layouts.topcss')

</head>
<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        @include('admin.layouts.partials-layouts.nav')
    </aside>
    <!-- /#left-panel -->
    <div id="right-panel" class="right-panel">
    @yield('content')
    </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
        @include('admin.layouts.partials-layouts.footer')
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->
    @include('admin.layouts.partials-layouts.js')
</body>
</html>
