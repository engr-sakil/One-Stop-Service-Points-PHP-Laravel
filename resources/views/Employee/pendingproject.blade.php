@extends("Employee.master")
@section("content")
    <div class="page-content" style="background-image: url('{{'assets/alluser/'}}applyform/images/wizard-v1.jpg'); height: 700px;">
        <div class="wizard-v1-content">
            <div class="wizard-form">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Project Id</th>
                        <th scope="col">Project Name</th>
                        <th scope="col">Project Status</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pr as $info)
                        @if($info['textilesMinistryFileStatus'] == 'processingtom' && $info['environmentMinistryFileStatus'] == 'processingtoe' && $info['foreignMinistryFileStatus'] == 'processingtof' && $info['planningMinistryFileStatus'] == 'processingtop')
                            <tr>
                                <td>{{$info['id']}}</td>
                                <td>{{$info['username']}}</td>
                                <td>PROCESSING</td>
                            </tr>
                        @endif
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
