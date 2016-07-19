<?php
    $URL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Transparent Oil Namibia</title>
    <meta name="description" content="CHANGEME">

    <script>
        (function () {

            document.documentElement.className = document.documentElement.className.replace(/(^|\\b)no\-js(\\b|$)/gi, 'has-js');

            svgSupported = (function () {
                var div = document.createElement('div');
                    div.innerHTML = '<svg/>';
                return (typeof SVGRect != 'undefined' && div.firstChild && div.firstChild.namespaceURI) == 'http://www.w3.org/2000/svg';
            }());

            if (svgSupported) {
                document.documentElement.className += ' has-svg';
            } else {
                document.documentElement.className += ' no-svg';
            }

            var isMobile = window.matchMedia && window.matchMedia('only screen and (max-width: 767px)').matches;

            if (isMobile) {
                document.documentElement.className += ' is-mobile';
            }

            var canvasSupported = (function () {
                var canvas = document.createElement('canvas');
                return !!(canvas.getContext && canvas.getContext('2d')) && canvas.toDataURL('image/png').indexOf('data:image/png') === 0;
            }());

            if (canvasSupported) {
                document.documentElement.className += ' has-canvas';
            } else {
                document.documentElement.className += ' no-canvas';
            }

        }());
    </script>

    <meta property="og:site_name" content="Transparent Oil Namibia" />
    <meta property="og:title" content="Transparent Oil Namibia" />
    <meta property="og:description" content="CHANGEME" />
    <meta property="og:url" content="<?php echo $URL ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="" />

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="dns-prefetch" href="//gstatic.com">
    <link rel="dns-prefetch" href="//code.jquery.com">
    <link rel="dns-prefetch" href="//www.googletagmanager.com">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">

    <link rel="stylesheet" href="http://libs.cartocdn.com/cartodb.js/v3/3.15/themes/css/cartodb.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />

    <!-- build:css /css/min.css -->
    <link rel="stylesheet" href="/css/global.css" />
    <!-- endbuild -->

</head>
<body>

    <header class="Header center-align">
        <div class="Header-inner">
            <div class="">

                <div class="row">
                    <div class="col s12">
                        <h1 class="Header-title">
                            <span class="Header-title--secondary">Transparent Oil</span>
                            <span class="Header-title--primary">Namibia</span>
                        </h1>
                    </div>
                    <div class="col s12 m6 offset-m3">
                        <p class="light Header-description">The Transparent Oil Namibia platform maps the details, trends and connections in the allocation of Petroleum Exploration Licences in Namibia.</p>
                    </div>
                </div>

                <ul class="Header-navigation">
                    <li><a href="about.php">About</a></li>
                    <li><a href="help.php">Help</a></li>
                </ul>


                <ul class="tabs Header-tabs">
                    <li class="tab col"><a class="active" href="#licenses">Browse by licence</a></li>
                    <li class="tab col"><a href="#companies">Browse by company</a></li>
                </ul>

            </div>
        </div>
    </header>



    <div class="Content">
        <div id="licenses" class="col s12">

            <ul class="Filters z-depth-1">
                <li class="Filters-item">
                    <span class="Filters-itemFilter">Soon to expire</span>
                </li>
                <li class="Filters-item">
                    <span class="Filters-itemFilter">Without ownership</span>
                </li>
                <li class="Filters-item">
                    <span class="Filters-itemFilter">Recently changed ownership</span>
                </li>
            </ul>


            <div class="Data is-loading">


                <div class="List List-licenses z-depth-1">

                    <div class="Search z-depth-1">
                        <div class="input-field">
                            <input id="search-licenses" class="Search-input Search-input--licenses" />
                            <label for="search-licenses"><i class="material-icons small">search</i></label>
                        </div>
                    </div>

                    <div class="List-holder">
                        <ul class="collapsible" data-collapsible="accordion">
                        </ul>
                    </div>
                </div>

                <div class="Map" id="map"></div>


                <div class="Loader">
                    <div class="Loader-holder">
                        <div class="preloader-wrapper big active"> <div class="spinner-layer spinner-blue-only"> <div class="circle-clipper left"> <div class="circle"></div> </div><div class="gap-patch"> <div class="circle"></div> </div><div class="circle-clipper right"> <div class="circle"></div> </div> </div> </div>
                    </div>
                </div>


            </div>




        </div>
        <div id="companies" class="">

            <div class="Search row">

                <div class="input-field col s6 right">
                    <input id="search-companies" class="Search-input Search-input--companies" />
                    <label for="search-companies"><i class="material-icons small">search</i></label>
                </div>

            </div>

        </div>

    </div>






    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.2.0/list.min.js"></script>
    <script src="http://libs.cartocdn.com/cartodb.js/v3/3.15/cartodb.js"></script>

    <!-- build:js /js/min.js -->
    <script src="/js/vendor/burza/utils.js"></script>
    <script src="/js/main.js"></script>
    <!-- endbuild -->

    <script type="infowindow/html" id="infowindow_template">
        <div class="cartodb-popup">
            <a href="#close" class="cartodb-popup-close-button close">x</a>

            <div class="cartodb-popup-content-wrapper">
                <div class="cartodb-popup-content">
                    {{ cartodb_id }}
                </div>
            </div>
            <div class="cartodb-popup-tip-container"></div>
        </div>
    </script>

    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>
</body>
</html>
