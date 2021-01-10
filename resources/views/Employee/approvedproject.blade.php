@extends("Employee.master")
@section("content")
    <div class="page-content" style="background-image: url('{{'assets/alluser/'}}applyform/images/wizard-v1.jpg'); height: 700px;">
        <div class="wizard-v1-content">
            <div class="wizard-form">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Project Id</th>
                        <th scope="col">Project Name</th>
                        <th scope="col">Project Status</th>

                    </tr>
                    </thead>
                    <tbody>

                    @foreach($pr as $info)
                        @if($info['textilesMinistryFileStatus'] == 'approved' && $info['environmentMinistryFileStatus'] == 'approved' && $info['foreignMinistryFileStatus'] == 'approved' && $info['planningMinistryFileStatus'] == 'approved')
                            <tr>

                                <td>{{$info['username']}}</td>
                                <td>Approved</td>
                                <td>{{$info['id']}}</td>

                            </tr>
                        @endif
                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
