@extends("Investor.master")
@section("content")
    <div class="page-content" style="background-image: url('{{'assets/alluser/'}}applyform/images/wizard-v1.jpg'); height: 700px;">
        <div class="wizard-v1-content">
            <div class="wizard-form">
                <table class="table table-striped">
                    <thead>
                    <tr>

                        <th scope="col">Project Name</th>
                        <th scope="col">Cost</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($em as $costinfo)
                        <tr>
                            <td>{{$costinfo['projectName']}}</td>
                            <td>{{$costinfo['Cost']}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
