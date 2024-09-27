@extends('layouts.layout')
@section('content')

    <div class="card mb-3">
        <div class="card-body px-xxl-0 pt-4">
            <div class="row g-0">
                <div
                    class="col-xxl-3 col-md-6 px-3 text-center border-end-md border-bottom border-bottom-xxl-0 pb-3 p-xxl-0 ps-md-0">
                    <div class="icon-circle icon-circle-primary"><span
                            class="fs-7 fas fa-user-graduate text-primary"></span></div>
                    <h4 class="mb-1 font-sans-serif"><span class="text-700 mx-2"
                            data-countup='{"endValue":"4968"}'>100</span><span class="fw-normal text-600">New
                            Learners</span></h4>
                    <p class="fs-10 fw-semi-bold mb-0">4203 <span class="text-600 fw-normal">last
                            month</span></p>
                </div>
                <div
                    class="col-xxl-3 col-md-6 px-3 text-center border-end-xxl border-bottom border-bottom-xxl-0 pb-3 pt-4 pt-md-0 pe-md-0 p-xxl-0">
                    <div class="icon-circle icon-circle-info"><span
                            class="fs-7 fas fa-chalkboard-teacher text-info"></span></div>
                    <h4 class="mb-1 font-sans-serif"><span class="text-700 mx-2"
                            data-countup='{"endValue":"324"}'>0</span><span class="fw-normal text-600">New
                            Trainers</span></h4>
                    <p class="fs-10 fw-semi-bold mb-0">301 <span class="text-600 fw-normal">last
                            month</span></p>
                </div>
                <div
                    class="col-xxl-3 col-md-6 px-3 text-center border-end-md border-bottom border-bottom-md-0 pb-3 pt-4 p-xxl-0 pb-md-0 ps-md-0">
                    <div class="icon-circle icon-circle-success"><span
                            class="fs-7 fas fa-book-open text-success"></span></div>
                    <h4 class="mb-1 font-sans-serif"><span class="text-700 mx-2"
                            data-countup='{"endValue":"3712"}'>0</span><span class="fw-normal text-600">New
                            Courses</span></h4>
                    <p class="fs-10 fw-semi-bold mb-0">2779 <span class="text-600 fw-normal">last
                            month</span></p>
                </div>
                <div class="col-xxl-3 col-md-6 px-3 text-center pt-4 p-xxl-0 pb-0 pe-md-0">
                    <div class="icon-circle icon-circle-warning"><span
                            class="fs-7 fas fa-dollar-sign text-warning"></span></div>
                    <h4 class="mb-1 font-sans-serif"><span class="text-700 mx-2"
                            data-countup='{"endValue":"1054"}'>0</span><span
                            class="fw-normal text-600">Refunds</span></h4>
                    <p class="fs-10 fw-semi-bold mb-0">1201 <span class="text-600 fw-normal">last
                            month</span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-3 mb-3">
        <div class="col-xxl-4">
            <div class="card h-100">
                <div class="card-header bg-body-tertiary d-flex flex-between-center py-2">
                    <h6 class="mb-0">Trending Keywords</h6>
                    <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                            class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal"
                            type="button" id="dropdown-trending-keywords" data-bs-toggle="dropdown"
                            data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span
                                class="fas fa-ellipsis-h fs-11"></span></button>
                        <div class="dropdown-menu dropdown-menu-end border py-2"
                            aria-labelledby="dropdown-trending-keywords"><a class="dropdown-item"
                                href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                href="#!">Remove</a>
                        </div>
                    </div>
                </div>
                <div class="card-body p-2 d-flex flex-center">
                    <!-- Find the JS file for the following chart at: src/js/charts/d3/trending-keywords.js--><!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                    <div class="d3-trending-keywords position-relative w-100"><svg
                            class="d3-trending-keywords-svg h-100 w-100"></svg>
                        <div class="d3-trending-keywords-tooltip pe-none position-fixed py-1 px-2 rounded">
                            <div class="d-flex align-items-center fs-10"><span
                                    class="dot d3-tooltip-dot"></span><span
                                    class="fw-semi-bold d3-tooltip-name pe-2"></span><span
                                    class="fw-semi-bold d3-tooltip-value"></span></div>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-body-tertiary py-2">
                    <div class="row justify-content-between">
                        <div class="col-auto"><select class="form-select form-select-sm">
                                <option value="week" selected="selected">Last 7 days</option>
                                <option value="month">Last month</option>
                                <option value="year">Last year</option>
                            </select></div>
                        <div class="col-auto"><a class="btn btn-sm btn-falcon-default" href="#!">View
                                All</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-8">
            <div class="row g-3 h-100">
                <div class="col-md-6">
                    <div class="card font-sans-serif h-100">
                        <div class="card-header pb-0">
                            <h6 class="mb-0"> Monthly Revenue Target</h6>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row align-items-end h-100 mb-n1">
                                <div class="col-6 col-sm-5 pe-md-0 pe-lg-3">
                                    <div class="row g-0">
                                        <div class="col-7">
                                            <h6 class="text-600">Target:</h6>
                                        </div>
                                        <div class="col-5">
                                            <h6 class="text-800">$1.2M</h6>
                                        </div>
                                    </div>
                                    <div class="row g-0">
                                        <div class="col-7">
                                            <h6 class="mb-0 text-600">Reached:</h6>
                                        </div>
                                        <div class="col-5">
                                            <h6 class="mb-0 text-800">$823K</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-7">
                                    <div class="lms-half-doughnut ms-auto mt-n4">
                                        <div class="position-relative"><canvas class="pe-none"
                                                data-half-doughnut='{"data":{"labels":["Target","Reached"],"datasets":[{"data":[1200000,823000],"backgroundColor":["primary","gray-300"]}]}}'></canvas>
                                            <p class="mt-n4 mb-0 position-absolute start-50 translate-middle-x fs-8 fw-medium"
                                                data-countup='{"endValue":"69","suffix":"%"}'>0</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card font-sans-serif h-100">
                        <div class="card-header pb-0">
                            <h6 class="mb-0">Monthly Visitor Target</h6>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row align-items-end h-100 mb-n1">
                                <div class="col-6 col-sm-5 pe-md-0 pe-lg-3">
                                    <div class="row g-0">
                                        <div class="col-7">
                                            <h6 class="text-600">Target:</h6>
                                        </div>
                                        <div class="col-5">
                                            <h6 class="text-800">$7.5M</h6>
                                        </div>
                                    </div>
                                    <div class="row g-0">
                                        <div class="col-7">
                                            <h6 class="mb-0 text-600">Reached:</h6>
                                        </div>
                                        <div class="col-5">
                                            <h6 class="mb-0 text-800">$4.8M</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-7">
                                    <div class="lms-half-doughnut ms-auto mt-n4">
                                        <div class="position-relative"><canvas class="pe-none"
                                                data-half-doughnut='{"data":{"labels":["Target","Reached"],"datasets":[{"data":[7500000,4800000],"backgroundColor":["info","gray-300"]}]}}'></canvas>
                                            <p class="mt-n4 mb-0 position-absolute start-50 translate-middle-x fs-8 fw-medium"
                                                data-countup='{"endValue":"64","suffix":"%"}'>0</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card h-100">
                        <div class="card-header py-2">
                            <div class="row flex-between-center g-0">
                                <div class="col-auto">
                                    <h6 class="mb-0">Avarage Enrollment Rate</h6>
                                </div>
                                <div class="col-12 col-md-auto order-3 order-md-2">
                                    <div class="d-flex flex-wrap gap-md-2"><button
                                            class="btn btn-link text-decoration-none text-600 fs-11 px-0 me-2"
                                            id="onSaleCourse"><span class="fas fa-circle text-primary me-1"
                                                data-fa-transform="shrink-3"></span>On Sale
                                            Course</button><button
                                            class="btn btn-link text-decoration-none text-600 fs-11 px-0"
                                            id="regularPaidCourse"><span
                                                class="fas fa-circle text-warning me-1"
                                                data-fa-transform="shrink-3"></span>Regular Paid
                                            Course</button></div>
                                </div>
                                <div class="col-auto order-2 order-md-3">
                                    <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                                            class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal"
                                            type="button" id="dropdown-avg-enrollment-lms"
                                            data-bs-toggle="dropdown" data-boundary="viewport"
                                            aria-haspopup="true" aria-expanded="false"><span
                                                class="fas fa-ellipsis-h fs-11"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end border py-2"
                                            aria-labelledby="dropdown-avg-enrollment-lms"><a
                                                class="dropdown-item" href="#!">View</a><a
                                                class="dropdown-item" href="#!">Export</a>
                                            <div class="dropdown-divider"></div><a
                                                class="dropdown-item text-danger" href="#!">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pb-0">
                            <div class="echart-avg-enrollment-rate" data-echart-responsive="true"
                                data-options='{"optionOne":"onSaleCourse","optionTwo":"regularPaidCourse"}'>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
