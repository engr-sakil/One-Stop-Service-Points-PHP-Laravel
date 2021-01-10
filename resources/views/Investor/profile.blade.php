@extends("Investor.master")
@section("content")
    <div class="page-content" style="background-image: url('{{'assets/alluser/'}}applyform/images/wizard-v1.jpg'); height: 700px;">
        <div class="wizard-v1-content">
            <div class="wizard-form">
                <button style="background-color: #34eb67; width: 100px; height: 30px; font-size: 15px; color: white;"  type="submit">Project Status</button>
                <br><br>
                <form class="form-register" id="form-register" action="#" method="">
                    @csrf
                    @foreach($em as $info)
                        @if($info['mail'] == session('investorEmail'))
                    <div class="form-group">
                        <label>Username</label>
                        <input class="au-input au-input--full" type="text" name="username" value="{{$info['username']}}" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input class="au-input au-input--full" type="email" name="email"  value="{{$info['mail']}}" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input class="au-input au-input--full" type="text" name="phoneNumber" value="{{$info['phoneNumber']}}" placeholder="phoneNumber">
                    </div>
                        @endif
                    @endforeach
                    <button style="background-color: #c82333; width: 100px; height: 30px; font-size: 15px; color: white;"  type="submit">UPDATE</button>
                </form>
                <br>
                <form class="form-register" id="form-register" action="#" method="">
                    @csrf
                    <div class="form-group">
                        <label>Current Password</label>
                        <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label>New Password</label>
                        <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                    </div>
                    <button style="background-color: #c82333; width: 120px; height: 30px; font-size: 15px; color: white;" type="submit">Save Changes</button>
                </form>
                <br>
                <a href="/investorlogout" style="background-color: #c82333; width: 120px; height: 30px; font-size: 15px; color: white;">LogOut</a>
            </div>
        </div>
    </div>

@endsection
