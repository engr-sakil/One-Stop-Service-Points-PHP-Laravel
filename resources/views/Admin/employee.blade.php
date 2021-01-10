@extends("Admin.master")
@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                         <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Employee List</h2>
                                </div>
                            </div>
                        </div>
                         <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>name</th>
                                                <th>email</th>
                                                <th>Password</th>

                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($em as $employee)
                                            <tr class="tr-shadow">
                                                <td>{{$employee['username']}}</td>
                                                <td>
                                                    <span class="block-email">{{$employee['email']}}</span>
                                                </td>
                                                <td class="desc">{{$employee['password']}}</td>

                                                <td>
                                                    <div class="table-data-feature">
                                                        <a href="/editemployee/{{$employee['id']}}" class="btn btn-primary" >Edit</a>
                                                         <a href="/deleteemployee/{{$employee['id']}}" class="btn btn-danger" >Delete</a>
                                                    </div>

                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                         @endforeach
                                        </tbody>
                                    </table>
                                </div>
                    </div>
                </div>
            </div>
@endsection
