@extends("Admin.master")
@section("content")

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                         <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Ministry List</h2>
                                </div>
                            </div>
                        </div>
                         <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>name</th>
                                                <th>email</th>
                                                <th>password</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($mi as $ministry)
                                            <tr class="tr-shadow">
                                                <td>{{$ministry['username']}}</td>
                                                <td>
                                                    <span class="block-email">{{$ministry['email']}}</span>
                                                </td>
                                                <td class="desc">{{$ministry['password']}}</td>

                                                <td>

                                                        <a href="/editministry/{{$ministry['id']}}" class="btn btn-primary" >Edit</a>
                                                         <a href="/deleteministry/{{$ministry['id']}}" class="btn btn-danger" >Delete</a>

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
