<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 1.0
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Web - Transportation Information System</title>

    <!-- Favicons-->
    <link rel="icon" href="{{URL::asset('web/images/favicon/favicon-32x32.png')}}" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="{{URL::asset('web/images/favicon/apple-touch-icon-152x152.png')}}">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->
    <link href="{{URL::asset('web/css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{URL::asset('web/css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{URL::asset('web/css/my.css')}}" type="text/css" rel="stylesheet" media="screen,projection">

    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="{{URL::asset('web/js/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{URL::asset('web/js/plugins/jvectormap/jquery-jvectormap.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{URL::asset('web/js/plugins/chartist-js/chartist.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">

    <!--GOOGLE MAPS-->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqfb8CDIX61ZoIyg1cKAgng96pLdd-db4&callback=initMap"></script>
    <style>
       #map {
        height: 600px;
        width: 100%;
       }
    </style>
</head>

<body>
    <!-- Start Page Loading -->

    <!-- End Page Loading -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="cyan">
                <div class="nav-wrapper">
                    <h1 class="logo-wrapper"><a href="{{URL::asset('web/index.html')}}" class="brand-logo darken-1"></a> <span class="logo-text">Materialize</span></h1> <!--untuk membuat logo-->
                    <ul class="right hide-on-med-and-down">
                        <li><a href="{{URL('rute')}}" data-activates="chat-out" class="waves-effect waves-block waves-light "><i href="{{URL('rute')}}" class="mdi-maps-map tooltipped" data-tooltip="Rute"></i></a>
                        </li>
                        <li><a href="{{URL('news')}}" data-activates="chat-out" class="waves-effect waves-block waves-light"><i class="mdi-action-description tooltipped" data-tooltip="Berita"></i></a>
                        </li>
                        <li><a href="{{URL('about')}}" data-activates="chat-out" class="waves-effect waves-block waves-light"><i class="mdi-action-account-circle tooltipped" data-tooltip="Tentang"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end header nav-->
    </header>
    <!-- END HEADER -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">

            <!-- START LEFT SIDEBAR NAV--> <!--untuk sidebar-->

            <aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav fixed rightside-navigation side-nav1">
                    <li class="red darken-2">
                        <div class="row">
                            <div class="col s4 m-3">
                                <h3 class="white-text">DAFTAR RUTE</h3>
                            </div>
                         </div>
                    <li class="bold"><a href="{{URL('table-data')}}" class="waves-effect waves-cyan rute3"><img src="{{URL::asset('web/images/background1.jpg')}}" class="rute rute2"></img> Rute A</a>
                    <li class="bold"><a href="{{URL('table-data')}}" class="waves-effect waves-cyan rute3"><img src="{{URL::asset('web/images/background1.jpg')}}" class="rute rute2"></img> Rute B</a>
                    <li class="bold"><a href="{{URL('table-data')}}" class="waves-effect waves-cyan rute3"><img src="{{URL::asset('web/images/background1.jpg')}}" class="rute rute2"></img> Rute C</a>
                    <li class="bold"><a href="{{URL('table-data')}}" class="waves-effect waves-cyan rute3"><img src="{{URL::asset('web/images/background1.jpg')}}" class="rute rute2"></img> Rute D</a>
                    <li class="bold"><a href="{{URL('table-data')}}" class="waves-effect waves-cyan rute3"><img src="{{URL::asset('web/images/background1.jpg')}}" class="rute rute2"></img> Rute E</a>
                    <li class="bold"><a href="{{URL('table-data')}}" class="waves-effect waves-cyan rute3"><img src="{{URL::asset('web/images/background1.jpg')}}" class="rute rute2"></img> Rute F</a>
                    <li class="bold"><a href="{{URL('table-data')}}" class="waves-effect waves-cyan rute3"><img src="{{URL::asset('web/images/background1.jpg')}}" class="rute rute2"></img> Rute G</a>
                    <li class="bold"><a href="{{URL('table-data')}}" class="waves-effect waves-cyan rute3"><img src="{{URL::asset('web/images/background1.jpg')}}" class="rute rute2"></img> Rute H</a>
                </ul>
          </aside>
            <!-- END LEFT SIDEBAR NAV-->

            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- START CONTENT -->
            <section id="content">

                <!--start container-->
                <div class="container">



                    <!--chart dashboard start-->
                    <div id="map"></div>

                    <!--chart dashboard end-->

                    <!-- //////////////////////////////////////////////////////////////////////////// -->

                    <!--card stats start-->

                    <!--card stats end-->

                    <!-- //////////////////////////////////////////////////////////////////////////// -->

                    <!--card widgets start-->

                    <!--card widgets end-->

                    <!-- //////////////////////////////////////////////////////////////////////////// -->

                    <!--work collections start-->

                    <!--work collections end-->

                </div>
                <!--end container-->
            </section>
            <!-- END CONTENT -->

            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!-- START RIGHT SIDEBAR NAV-->

            <!-- LEFT RIGHT SIDEBAR NAV-->

        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->



    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START FOOTER -->



    <!-- END FOOTER -->


    <!-- ================================================
    Scripts
    ================================================ -->

    <!-- jQuery Library -->
    <script type="text/javascript" src="{{URL::asset('web/js/jquery-1.11.2.min.js')}}"></script>
    <!--materialize js-->
    <script type="text/javascript" src="{{URL::asset('web/js/materialize.min.js')}}"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="{{URL::asset('web/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>


    <!-- chartist -->
    <script type="text/javascript" src="{{URL::asset('web/js/plugins/chartist-js/chartist.min.js')}}"></script>

    <!-- chartjs -->
    <script type="text/javascript" src="{{URL::asset('web/js/plugins/chartjs/chart.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('web/js/plugins/chartjs/chart-script.js')}}"></script>

    <!-- sparkline -->
    <script type="text/javascript" src="{{URL::asset('web/js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('web/js/plugins/sparkline/sparkline-script.js')}}"></script>

    <!--jvectormap-->
    <script type="text/javascript" src="{{URL::asset('web/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('web/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('web/js/plugins/jvectormap/vectormap-script.js')}}"></script>


    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="{{URL::asset('web/js/plugins.js')}}"></script>
    <!-- Toast Notification -->

    <script>
function initMap() {
var uluru = {lat: -6.39184090, lng: 106.80603880};
var map = new google.maps.Map(document.getElementById('map'), {
zoom: 12,
center: uluru
});
var marker = new google.maps.Marker({
position: uluru,
map: map
});
}
</script>
  </body>

</html>
