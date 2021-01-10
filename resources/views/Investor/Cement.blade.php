@extends("Investor.master")
@section("content")


    <div class="page-content" style="background-image: url('{{'assets/alluser/'}}applyform/images/wizard-v1.jpg')">
        <div class="wizard-v1-content">
            <div class="wizard-form">
                <form class="form-register" id="form-register" action="/projactInfoInsert" enctype="multipart/form-data" method="post">
                    @csrf
                    <div id="form-total">
                        <!-- SECTION 1 -->
                        <h2>
                            <span class="step-icon"><i class="zmdi zmdi-account"></i></span>
                            <span class="step-number">Step 1</span>
                            <span class="step-text">Company Infomation</span>
                        </h2>
                        <section>
                            <div class="inner">
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label for="username">Company Name*</label>
                                        <input type="text" placeholder="Username" onfocusout="myFunction()" class="form-control" id="username" name="username" required>
                                    </div>
                                    <script>
                                        function myFunction() {
                                            var x = document.getElementById("username").value;
                                            var y = document.getElementById("email").value;
                                            var z = document.getElementById("phoneNumber").value;
                                            document.getElementById('showUsername').innerHTML = x;
                                            document.getElementById('showEmail').innerHTML = y;
                                            document.getElementById('showPhoneNumber').innerHTML = z;

                                            var pdf = document.getElementById("textilesMinistryFile").value;
                                            document.getElementById('showtextiles').innerHTML = pdf;
                                        }
                                    </script>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label for="email">Email Address*</label>
                                        <input type="email" placeholder="Your Email" class="form-control" onfocusout="myFunction()" id="email" name="email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder">
                                        <label for="text">Phone Number*</label>
                                        <input type="text" placeholder="Phone Number" onfocusout="myFunction()" class="form-control" id="phoneNumber" name="phoneNumber" required >
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- SECTION 2 -->
                        <h2>
                            <span class="step-icon"><i class="zmdi zmdi-card"></i></span>
                            <span class="step-number">Step 2</span>
                            <span class="step-text">Ministry of Textiles and Jute</span>
                        </h2>
                        <section>
                            <div class="form-row">
                                <div class="name">Upload Documents</div>
                                <div class="value">
                                    <div class="input-group js-input-file">
                                        <input class="" type="file" name="textilesMinistryFile" onfocusout="myFunction()" id="textilesMinistryFile">

                                    </div>
                                    <div class="">Upload your Company Documet or any other relevant file. Max file size 50 MB</div>
                                </div>
                            </div>
                        </section>
                        <!-- SECTION 3 -->
                        <h2>
                            <span class="step-icon"><i class="zmdi zmdi-card"></i></span>
                            <span class="step-number">Step 3</span>
                            <span class="step-text">Ministry of Environment and Forest</span>
                        </h2>
                        <section>
                            <div class="form-row">
                                <div class="name">Upload Documents</div>
                                <div class="value">
                                    <div class="input-group js-input-file">
                                        <input  type="file" name="environmentMinistryFile" id="environmentMinistryFile">
                                    </div>
                                    <div class="">Upload your Company Documet or any other relevant file. Max file size 50 MB</div>
                                </div>
                            </div>
                        </section>
                        <!-- SECTION 4 -->
                        <h2>
                            <span class="step-icon"><i class="zmdi zmdi-card"></i></span>
                            <span class="step-number">Step 4</span>
                            <span class="step-text">Ministry of Foreign Affairs</span>
                        </h2>
                        <section>
                            <div class="form-row">
                                <div class="name">Upload Documents</div>
                                <div class="value">
                                    <div class="input-group js-input-file">
                                        <input  type="file" name="foreignMinistryFile" id="foreignMinistryFile">
                                    </div>
                                    <div class="">Upload your Company Documet or any other relevant file. Max file size 50 MB</div>
                                </div>
                            </div>
                        </section>
                        <!-- SECTION 5 -->
                        <h2>
                            <span class="step-icon"><i class="zmdi zmdi-card"></i></span>
                            <span class="step-number">Step 5</span>
                            <span class="step-text">Ministry of Planning</span>
                        </h2>
                        <section>
                            <div class="form-row">
                                <div class="name">Upload Documents</div>
                                <div class="value">
                                    <div class="input-group js-input-file">
                                        <input  type="file" name="planningMinistryFile" id="planningMinistryFile">
                                    </div>
                                    <div class="">Upload your Company Documet or any other relevant file. Max file size 50 MB</div>
                                </div>
                            </div>
                        </section>
                        <!-- SECTION 6 -->
                        <h2>
                            <span class="step-icon"><i class="zmdi zmdi-receipt"></i></span>
                            <span class="step-number">Step 6</span>
                            <span class="step-text">Confirm Your Details</span>
                        </h2>
                        <section>
                            <div class="inner">
                                <h3>Comfirm Details</h3>
                                <div class="form-row table-responsive">
                                    <table class="table">
                                        <tr>
                                            <td>Company Infomation<br>
                                                Company Name: <p id="showUsername" style="color: white"></p>
                                                Email: <p id="showEmail" style="color: white"></p>
                                                Phone Number: <p id="showPhoneNumber" style="color: white"></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ministry of Textiles and Jute<br><br>
                                                <iframe src="" id="showtextiles" height="580px" width="450px"></iframe>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ministry of Environment and Forest</td>
                                        </tr>
                                        <tr>
                                            <td>Ministry of Foreign Affairs</td>
                                        </tr>
                                        <tr>
                                            <td>Ministry of Planning</td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                            <button style="background-color: #c82333; width: 220px;  height: 30px; font-size: 15px; color: white;" type="submit">SEND DOCUMENT</button>
                        </section>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection
