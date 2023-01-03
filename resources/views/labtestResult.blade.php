@extends('main')
@section('title',"Home")


@section('pagestyles')



@endsection

@section('content')

<Section id="medicalVisit">
    <div class="container mt-2">
        <div class="heading">Lab Test Result</div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <table class="table table-hover">
                        <thead>
                            <tr class="text-center">
                                <th scope="col" class="text-left">Order Date</th>
                                <th scope="col">Name</th>
                                <th scope="col">Results</th>
                                <th scope="col">Physician</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <th scope="row" class="text-left">17/12/2022</th>
                                <td>Albumin Test</td>
                                <td><i class="fa fa-circle text-success mr-2" style="font-size: 10px;"></i> Normal</td>
                                <td>Dr. Amy Natson</td>
                            </tr>
                            <tr class="text-center">
                                <th scope="row" class="text-left">17/12/2022</th>
                                <td>Albumin Test</td>
                                <td><i class="fa fa-circle text-danger mr-2" style="font-size: 10px;"></i> Normal</td>
                                <td>Dr. Amy Natson</td>
                            </tr>
                            <tr class="text-center">
                                <th scope="row" class="text-left">17/12/2022</th>
                                <td>Albumin Test</td>
                                <td><i class="fa fa-circle text-success mr-2" style="font-size: 10px;"></i> Normal</td>
                                <td>Dr. Amy Natson</td>
                            </tr>
                            <tr class="text-center">
                                <th scope="row" class="text-left">17/12/2022</th>
                                <td>Albumin Test</td>
                                <td><i class="fa fa-circle text-danger mr-2" style="font-size: 10px;"></i> Normal</td>
                                <td>Dr. Amy Natson</td>
                            </tr>
                            <tr class="text-center">
                                <th scope="row" class="text-left">17/12/2022</th>
                                <td>Albumin Test</td>
                                <td><i class="fa fa-circle text-success mr-2" style="font-size: 10px;"></i> Normal</td>
                                <td>Dr. Amy Natson</td>
                            </tr>
                            <tr class="text-center">
                                <th scope="row" class="text-left">17/12/2022</th>
                                <td>Albumin Test</td>
                                <td><i class="fa fa-circle text-success mr-2" style="font-size: 10px;"></i> Normal</td>
                                <td>Dr. Amy Natson</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</Section>
@endsection