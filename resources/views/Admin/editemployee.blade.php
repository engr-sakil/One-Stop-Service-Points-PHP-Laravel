<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="../{{'assets/'}}css/font-face.css" rel="stylesheet" media="all">
    <link href="../{{'assets/'}}vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../{{'assets/'}}vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../{{'assets/'}}vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../{{'assets/'}}vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../{{'assets/'}}vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../{{'assets/'}}vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../{{'assets/'}}vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../{{'assets/'}}vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../{{'assets/'}}vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../{{'assets/'}}vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../{{'assets/'}}vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../{{'assets/'}}css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
<div class="page-wrapper">

    <!-- MENU SIDEBAR-->
@include('Admin.sidebar')
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
@include("Admin.topbar")

    <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="container">
                        <div class="login-wrap">
                            <div class="login-content">
                                <div class="login-logo">
                                    <h2 class="title-1">Update EMPLOYEE</h2>
                                </div>
                                <div class="login-form">
                                    <form action="/editinfo/{{$em['id']}}" method="post">
                                        @csrf
                                        {{method_field('PUT')}}
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="au-input au-input--full" type="text" name="username" value="{{$em['username']}}" placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <label>Email Address</label>
                                            <input class="au-input au-input--full" type="email" name="email" value="{{$em['email']}}" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="au-input au-input--full" type="password" name="password" value="{{$em['password']}}" placeholder="Password">
                                        </div>
                                        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
    </div>

</div>

<!-- Jquery JS-->
<script src="../{{'assets/'}}vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="../{{'assets/'}}vendor/bootstrap-4.1/popper.min.js"></script>
<script src="../{{'assets/'}}vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="../{{'assets/'}}vendor/slick/slick.min.js">
</script>
<script src="../{{'assets/'}}vendor/wow/wow.min.js"></script>
<script src="../{{'assets/'}}vendor/animsition/animsition.min.js"></script>
<script src="../{{'assets/'}}vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="../{{'assets/'}}vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="../{{'assets/'}}vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="../{{'assets/'}}vendor/circle-progress/circle-progress.min.js"></script>
<script src="../{{'assets/'}}vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="../{{'assets/'}}vendor/chartjs/Chart.bundle.min.js"></script>
<script src="../{{'assets/'}}vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="../{{'assets/'}}js/main.js"></script>

</body>

</html>
<!-- end document-->
