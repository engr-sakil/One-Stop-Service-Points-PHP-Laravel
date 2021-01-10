@extends("Admin.master")
@section("content")

    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9">
                        <div class="overview-wrap">
                            <h2 class="title-1">Project Cost List</h2>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="overview-wrap">
                            <a href="/addcostestimate" class="btn btn-primary" >Add Cost Estimate</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2">

                        <thead>
                        <tr>
                            <th>Project Name</th>
                            <th>Cost</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($em as $costinfo)
                            <tr class="tr-shadow">
                                <td>{{$costinfo['projectName']}}</td>
                                <td>{{$costinfo['Cost']}}</td>
                                <td>

                                    <a href="/editcostestimate/{{$costinfo['id']}}" class="btn btn-primary" >Edit</a>


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
