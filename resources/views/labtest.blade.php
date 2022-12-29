@extends('main')
@section('title',"Home")


@section('pagestyles')



@endsection

@section('content')

<Section id="medicalVisit">
    <div class="container mt-2">
        <div class="heading">Lab Test</div>
        <div class="row">
            <div class="col-md-12">
                <div class="sec-heading">Dashboard</div>
                <div class="row">
                    <div class="card dashboard-card col-md-3 mr-5">
                        <div class="card-body">
                            <div class="board">
                                <h1>9</h1>
                                <p>recent lab results</p>
                            </div>
                            <i class="fa-solid fa-vial" style="color: dodgerblue; font-size: 56px;"></i>
                        </div>
                    </div>
                    <div class="card dashboard-card col-md-3 mr-5">
                        <div class="card-body">
                            <div class="board">
                                <h1>2</h1>
                                <p>unread messages</p>
                            </div>
                            <i class="fa-solid fa-message" style="color: dodgerblue; font-size: 56px;"></i>
                        </div>
                    </div>
                    <div class="card dashboard-card col-md-4">
                        <div class="card-body">
                            <div class="board">
                                <h1>1</h1>
                                <p>upcoming appointments</p>
                            </div>
                            <i class="fa-solid fa-calendar-days" style="color: dodgerblue; font-size: 56px;"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mt-5">
                <div class="sec-heading">Lab Test List</div>
                <div class="row">
                    <div class="card testList-card col-md-10 mr-5">
                        <div class="card-body">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-transparent active">
                                    <input type="radio" name="options" id="option1" autocomplete="off" checked> Albumin Test
                                </label>
                                <label class="btn btn-transparent">
                                    <input type="radio" name="options" id="option2" autocomplete="off"> Blood Group Test
                                </label>
                                <label class="btn btn-transparent">
                                    <input type="radio" name="options" id="option3" autocomplete="off"> Calcium Test
                                </label>
                                <label class="btn btn-transparent">
                                    <input type="radio" name="options" id="option4" autocomplete="off"> ECG
                                </label>
                                <label class="btn btn-transparent">
                                    <input type="radio" name="options" id="option5" autocomplete="off"> MRI Scan
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
            <div class="col-md-6 mt-5">
                <div class="sec-heading">Appointments</div>
                <div class="row">
                    <div class="page">
                        <!-- Responsive calendar - START -->
                        <div class="responsive-calendar">
                            <div class="controls">
                                <a class="pull-left" data-go="prev">
                                    <div class="btn"><i class="icon-chevron icon-chevron-rotate"></i></div>
                                </a>
                                <h4><span data-head-year></span> <span data-head-month></span></h4>
                                <a class="pull-right" data-go="next">
                                    <div class="btn"><i class="icon-chevron"></i></div>
                                </a>
                            </div>
                            <hr />
                            <div class="day-headers">
                                <div class="day header">Mon</div>
                                <div class="day header">Tue</div>
                                <div class="day header">Wed</div>
                                <div class="day header">Thu</div>
                                <div class="day header">Fri</div>
                                <div class="day header">Sat</div>
                                <div class="day header">Sun</div>
                            </div>
                            <div class="days" data-group="days">
                                <!-- the place where days will be generated -->
                            </div>
                        </div>
                        <!-- Responsive calendar - END -->
                        <!-- Placeholder -->
                        <div class="responsive-calendar-placeholder">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</Section>
@endsection