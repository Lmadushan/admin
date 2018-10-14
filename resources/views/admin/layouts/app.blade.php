<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guru Gedara Admin Panel</title>

    <!-- Vendor CSS -->
    <link href="/admin/vendors/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="/admin/vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
    <link href="/admin/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.css" rel="stylesheet">
    <link href="/admin/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
    <link href="/admin/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">
    <link href="/admin/vendors/bower_components/google-material-color/dist/palette.css" rel="stylesheet">
    @stack('css')
    <!-- CSS -->
    <link href="/admin/css/app.min.1.css" rel="stylesheet">
    <link href="/admin/css/app.min.2.css" rel="stylesheet">

</head>
<body data-ma-header="teal">
    {{--upper navigation bar--}}
    @include('admin.layouts.upperBar')

<section id="main">
    {{--Side popup Bar for notification, mails and etc..--}}
    @include('admin.layouts.sidePopup')
    {{--Navigation panel in the left side(main navigation)--}}
    @include('admin.layouts.sideNavbar')

    <section id="content">
        @yield('content')
    </section>

    {{--Footer of the site--}}
    <footer id="footer">
        @include('admin.layouts.footer')
    </footer>

</section>

<!-- Page Loader -->
<div class="page-loader palette-Teal bg">
    <div class="preloader pl-xl pls-white">
        <svg class="pl-circular" viewBox="25 25 50 50">
            <circle class="plc-path" cx="50" cy="50" r="20"/>
        </svg>
    </div>
</div>

<!-- Older IE warning message -->
<!--[if lt IE 9]>
<div class="ie-warning">
    <h1 class="c-white">Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="/admin/img/browsers/chrome.png" alt="">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="/admin/img/browsers/firefox.png" alt="">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="/admin/img/browsers/opera.png" alt="">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="/admin/img/browsers/safari.png" alt="">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="/admin/img/browsers/ie.png" alt="">
                    <div>IE (New)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->

<!-- Javascript Libraries -->
<script src="/admin/vendors/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/admin/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="/admin/vendors/bower_components/salvattore/dist/salvattore.min.js"></script>



<script src="/admin/vendors/bower_components/flot/jquery.flot.js"></script>
<script src="/admin/vendors/bower_components/flot/jquery.flot.resize.js"></script>
<script src="/admin/vendors/bower_components/flot.curvedlines/curvedLines.js"></script>

<script src="/admin/vendors/sparklines/jquery.sparkline.min.js"></script>
<script src="/admin/vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>

<script src="/admin/vendors/bower_components/moment/min/moment.min.js"></script>
<script src="/admin/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="/admin/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>
<script src="/admin/vendors/bower_components/Waves/dist/waves.min.js"></script>
<script src="/admin/vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
<script src="/admin/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js"></script>
<script src="/admin/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- Placeholder for IE9 -->
<!--[if IE 9 ]>
<script src="/admin/vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
<![endif]-->

<script src="/admin/js/flot-charts/curved-line-chart.js"></script>
<script src="/admin/js/flot-charts/bar-chart.js"></script>
<script src="/admin/js/charts.js"></script>

<script src="/admin/js/charts.js"></script>
<script src="/admin/js/functions.js"></script>
<script src="/admin/js/actions.js"></script>
<script src="/admin/js/demo.js"></script>
@stack('js')

</body>
</html>