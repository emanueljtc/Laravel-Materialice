
<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 3.1
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>@yield('title',config('app.name'))</title>

    <!-- Favicons-->
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->
    <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- CSS for full screen (Layout-2)-->
    <link href="css/layouts/style-fullscreen.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->
    <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">


    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="js/plugins/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">


</head>

<body>
    <!-- INICIO Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>        
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- FIN Loading -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- INICIO HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
            <!--PARTIALS DE BARRA NAV-->
             @include('layouts.partials.navbar')
        <!-- end header nav-->
    </header>
    <!-- FIN HEADER -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">

            <!-- INICIO SIDEBAR NAV-->
                <!--PARTIALS DE MENU-->
                  @include('layouts.partials.menu')
            <!-- FIN LEFT SIDEBAR NAV-->

            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- INICIO DEL CONTENIDO -->
            <section id="content">

                <!--start container-->
                <div class="container">
                    @yield('content')

                </div>
                <!--end container-->
            </section>
            <!-- FIN DEL CONTENIDO -->

            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!-- START RIGHT SIDEBAR NAV-->
            <aside id="right-sidebar-nav">
                <ul id="chat-out" class="side-nav rightside-navigation">
                    <li class="li-hover">
                    <a href="#" data-activates="chat-out" class="chat-close-collapse right"><i class="mdi-navigation-close"></i></a>
                    <div id="right-search" class="row">
                        <form class="col s12">
                            <div class="input-field">
                                <i class="mdi-action-search prefix"></i>
                                <input id="icon_prefix" type="text" class="validate">
                                <label for="icon_prefix">Search</label>
                            </div>
                        </form>
                    </div>
                    </li>
                    <li class="li-hover">
                        <ul class="chat-collapsible" data-collapsible="expandable">
                        <li>
                            <div class="collapsible-header teal white-text active"><i class="mdi-social-whatshot"></i>Recent Activity</div>
                            <div class="collapsible-body recent-activity">
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i class="mdi-action-add-shopping-cart"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">just now</a>
                                        <p>Jim Doe Purchased new equipments for zonal office.</p>
                                    </div>
                                </div>
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i class="mdi-device-airplanemode-on"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">Yesterday</a>
                                        <p>Your Next flight for USA will be on 15th August 2015.</p>
                                    </div>
                                </div>
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">5 Days Ago</a>
                                        <p>Natalya Parker Send you a voice mail for next conference.</p>
                                    </div>
                                </div>
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i class="mdi-action-store"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">Last Week</a>
                                        <p>Jessy Jay open a new store at S.G Road.</p>
                                    </div>
                                </div>
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">5 Days Ago</a>
                                        <p>Natalya Parker Send you a voice mail for next conference.</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header light-blue white-text active"><i class="mdi-editor-attach-money"></i>Sales Repoart</div>
                            <div class="collapsible-body sales-repoart">
                                <div class="sales-repoart-list  chat-out-list row">
                                    <div class="col s8">Target Salse</div>
                                    <div class="col s4"><span id="sales-line-1"></span>
                                    </div>
                                </div>
                                <div class="sales-repoart-list chat-out-list row">
                                    <div class="col s8">Payment Due</div>
                                    <div class="col s4"><span id="sales-bar-1"></span>
                                    </div>
                                </div>
                                <div class="sales-repoart-list chat-out-list row">
                                    <div class="col s8">Total Delivery</div>
                                    <div class="col s4"><span id="sales-line-2"></span>
                                    </div>
                                </div>
                                <div class="sales-repoart-list chat-out-list row">
                                    <div class="col s8">Total Progress</div>
                                    <div class="col s4"><span id="sales-bar-2"></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header red white-text"><i class="mdi-action-stars"></i>Favorite Associates</div>
                            <div class="collapsible-body favorite-associates">
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Eileen Sideways</p>
                                        <p class="place">Los Angeles, CA</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Zaham Sindil</p>
                                        <p class="place">San Francisco, CA</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Renov Leongal</p>
                                        <p class="place">Cebu City, Philippines</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Weno Carasbong</p>
                                        <p>Tokyo, Japan</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Nusja Nawancali</p>
                                        <p class="place">Bangkok, Thailand</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        </ul>
                    </li>
                </ul>
            </aside>
            <!-- LEFT RIGHT SIDEBAR NAV-->

        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->
        <br> <br> <br>


    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START FOOTER -->
    <footer class="page-footer">

        <div class="footer-copyright">
            <div class="container">
                Copyright ©  <?php echo date('20'.'y')?><a class="grey-text text-lighten-4" href="http://themeforest.net/user/geekslabs/portfolio?ref=geekslabs" target="_blank"> Redes y Aplicaciones Cacique Maracay,</a> Derechos Reservados.
                <span class="right"> Desarrolado por <a class="grey-text text-lighten-4" href="http://geekslabs.com/">Redes y Aplicaciones Cacique Maracay</a></span>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->


    <!-- ================================================
    Scripts
    ================================================ -->

    <!-- jQuery Library -->
    <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    

    <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>

    <!-- chartjs -->
    <script type="text/javascript" src="js/plugins/chartjs/chart.min.js"></script>
    <script type="text/javascript" src="js/plugins/chartjs/chart-script.js"></script>

    <!-- sparkline -->
    <script type="text/javascript" src="js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="js/plugins/sparkline/sparkline-script.js"></script>
    
    <!-- google map api -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAZnaZBXLqNBRXjd-82km_NO7GUItyKek"></script>

    <!--jvectormap-->
    <script type="text/javascript" src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script type="text/javascript" src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script type="text/javascript" src="js/plugins/jvectormap/vectormap-script.js"></script>

    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>
    <!-- Toast Notification -->
    <script type="text/javascript">
    // Toast Notification
    $(window).load(function() {
        setTimeout(function() {
            Materialize.toast('<span>Hiya! I am a toast.</span>', 1500);
        }, 1500);
        setTimeout(function() {
            Materialize.toast('<span>You can swipe me too!</span>', 3000);
        }, 5000);
        setTimeout(function() {
            Materialize.toast('<span>You have new order.</span><a class="btn-flat yellow-text" href="#">Read<a>', 3000);
        }, 15000);
    });


    $(function() {
      // Google Maps
      $('#map-canvas').addClass('loading');
      var latlng = new google.maps.LatLng(40.6700, -73.9400); // Set your Lat. Log. New York
      var settings = {
          zoom: 10,
          center: latlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          mapTypeControl: false,
          scrollwheel: false,
          draggable: true,
          styles: [{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#e0efef"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"hue":"#1900ff"},{"color":"#c0e8e8"}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"visibility":"on"},{"lightness":700}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#7dcdcd"}]}],
          mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
          navigationControl: false,
          navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
      };
      var map = new google.maps.Map(document.getElementById("map-canvas"), settings);

      google.maps.event.addDomListener(window, "resize", function() {
          var center = map.getCenter();
          google.maps.event.trigger(map, "resize");
          map.setCenter(center);
          $('#map-canvas').removeClass('loading');
      });

      var contentString =
          '<div id="info-window">'+
          '<p>18 McLuice Road, Vellyon Hills,<br /> New York, NY 10010<br /><a href="https://plus.google.com/102896039836143247306/about?gl=za&hl=en" target="_blank">Get directions</a></p>'+
          '</div>';
      var infowindow = new google.maps.InfoWindow({
          content: contentString
      });

      var companyImage = new google.maps.MarkerImage('images/map-marker.png',
          new google.maps.Size(36,62),// Width and height of the marker
          new google.maps.Point(0,0),
          new google.maps.Point(18,52)// Position of the marker
      );

      var companyPos = new google.maps.LatLng(40.6700, -73.9400);

      var companyMarker = new google.maps.Marker({
          position: companyPos,
          map: map,
          icon: companyImage,
          title:"Shapeshift Interactive",
          zIndex: 3});

      google.maps.event.addListener(companyMarker, 'click', function() {
          infowindow.open(map,companyMarker);
          pageView('/#address');
      });
    });
    </script>
</body>

</html>
