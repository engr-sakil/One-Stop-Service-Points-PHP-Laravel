
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>ONE STOP SERVICE POINTS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Intense Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <link href="../{{'assets/alluser/'}}css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="../{{'assets/alluser/'}}css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="../{{'assets/alluser/'}}css/font-awesome.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">


    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="../{{'assets/alluser/'}}applyform/css/raleway-font.css">
    <link rel="stylesheet" type="text/css" href="../{{'assets/alluser/'}}applyform/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <!-- Jquery -->
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="../{{'assets/alluser/'}}applyform/css/style.css"/>

    <link href="../{{'assets/alluser/'}}pdf/css/main.css" rel="stylesheet">




    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../{{'assets/alluser/'}}login/images/icons/favicon.ico"/>
    <!--===============================================================================================-->

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../{{'assets/alluser/'}}login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../{{'assets/alluser/'}}login/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../{{'assets/alluser/'}}login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../{{'assets/alluser/'}}login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../{{'assets/alluser/'}}login/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../{{'assets/alluser/'}}login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../{{'assets/alluser/'}}login/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../{{'assets/alluser/'}}login/css/util.css">
    <link rel="stylesheet" type="text/css" href="../{{'assets/alluser/'}}login/css/main.css">
    <!--===============================================================================================-->

</head>

<body>
<!-- header -->
@include("Ministry.header")

<!-- banner -->
<!-- banner text -->
<div class="container">
    <div class="page-content" style="background-image: url('../{{'assets/alluser/'}}applyform/images/wizard-v1.jpg'); height: 700px;">
        <div class="wizard-v1-content">
            <div class="wizard-form">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Ministry Name</th>
                        <th scope="col">Project File</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @if($pr['textilesMinistryFileStatus'] == 'processingtom' && session('ministryEmail')=='jute@gmail.com')
                            <td>Ministry of Textiles and Jute</td>
                            <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tfileView"> VIEW </button> </td>
                            <td> <a href="/ministryUpdateTextilesMinistryFileStatus/{{$pr['id']}}" class="btn btn--green">Confirm</a></td>
                        @endif
                    </tr>
                    <tr>
                        @if($pr['environmentMinistryFileStatus'] == 'processingtoe' && session('ministryEmail')=='forest@gmail.com')
                            <td>Ministry of Environment and Forest</td>
                            <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#efileView"> VIEW </button> </td>
                            <td> <a href="#" class="btn btn--green">Confirm</a></td>
                        @endif
                    </tr>
                    <tr>
                        @if($pr['foreignMinistryFileStatus'] == 'processingtof' && session('ministryEmail')=='ferign@gmail.com')
                            <td>Ministry of Foreign Affairs</td>
                            <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ffileView"> VIEW </button> </td>
                            <td> <a href="#" class="btn btn--green">Confirm</a></td>
                        @endif
                    </tr>
                    <tr>
                        @if($pr['planningMinistryFileStatus'] == 'processingtop' && session('ministryEmail')=='planning@gmail.com')
                            <td>Ministry of Planning</td>
                            <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pfileView"> VIEW </button> </td>
                            <td> <a href="#" class="btn btn--green">Confirm</a></td>
                        @endif
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>







    <!--textiles Modal -->
    <div class="modal fade" id="tfileView" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <iframe src="../assets/uploads/product/{{$pr['textilesMinistryFile']}}" width="450px" height="500px"></iframe>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



    <!-- environment Modal -->
    <div class="modal fade" id="efileView" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe src="../assets/uploads/product/{{$pr['environmentMinistryFile']}}" width="450px" height="500px"></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!--foreign Modal -->
    <div class="modal fade" id="ffileView" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe src="../assets/uploads/product/{{$pr['foreignMinistryFile']}}" width="450px" height="500px"></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!--planning Modal -->
    <div class="modal fade" id="pfileView" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe src="../assets/uploads/product/{{$pr['planningMinistryFile']}}" width="450px" height="500px"></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //banner text -->

<script src="../{{'assets/alluser/'}}applyform/js/jquery-3.3.1.min.js"></script>
<script src="../{{'assets/alluser/'}}applyform/js/jquery.steps.js"></script>
<script src="../{{'assets/alluser/'}}applyform/js/main.js"></script>




<!--===============================================================================================-->

<!--===============================================================================================-->
<script src="../{{'assets/alluser/'}}login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="../{{'assets/alluser/'}}login/vendor/bootstrap/js/popper.js"></script>
<script src="../{{'assets/alluser/'}}login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="../{{'assets/alluser/'}}login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="../{{'assets/alluser/'}}login/vendor/daterangepicker/moment.min.js"></script>
<script src="../{{'assets/alluser/'}}login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="../{{'assets/alluser/'}}login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->


<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

</body>

</html>
