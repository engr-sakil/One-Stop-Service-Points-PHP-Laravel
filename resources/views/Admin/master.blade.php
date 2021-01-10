<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <title>ONE STOP SERVICE POINTS</title>

    @include("Admin.css")

</head>

<body class="animsition">
    <div class="page-wrapper">

        <!-- MENU SIDEBAR-->
        @include("Admin.sidebar")
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
          @include("Admin.topbar")
            <!-- HEADER DESKTOP-->

            <!-- M9AIN CONTENT-->
            @yield('content')
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
    </div>

    <!-- Jquery JS-->s
 @include("Admin.js")

</body>

</html>
<!-- end document-->
