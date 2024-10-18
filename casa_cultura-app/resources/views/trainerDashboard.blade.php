@extends('layouts.layout')
@section('content')
    {{-- * Inicio do conteudo do dash --}}
    <div class="card mb-3">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h5 class="mb-2">{{Auth::user()->name}} {{Auth::user()->Surname}} (<a href="mailto:{{Auth::user()->email}}">{{Auth::user()->email}}</a>)</h5><a
                        class="btn btn-falcon-default btn-sm" href="#!"><span class="fas fa-plus fs-11 me-1"></span>Add
                        note</a><button class="btn btn-falcon-default btn-sm dropdown-toggle ms-2 dropdown-caret-none"
                        type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                            class="fas fa-ellipsis-h"></span></button>
                    <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item"
                            href="#">Report</a><a class="dropdown-item" href="#">Archive</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#">Delete
                            user</a>
                    </div>
                </div>
                <div class="col-auto d-none d-sm-block">
                    <h6 class="text-uppercase text-600">Customer<span class="fas fa-user ms-2"></span></h6>
                </div>
            </div>
        </div>
        <div class="card-body border-top">
            <div class="d-flex"><span class="fas fa-user text-success me-2" data-fa-transform="down-5"></span>
                <div class="flex-1">
                    <p class="mb-0">Formador foi criado em</p>
                    <p class="fs-10 mb-0 text-600">Jan 12, 11:13 PM</p>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                    <h5 class="mb-0">Details</h5>
                </div>
                <div class="col-auto"><a class="btn btn-falcon-default btn-sm" href="#!"><span
                            class="fas fa-pencil-alt fs-11 me-1"></span>Update details</a></div>
            </div>
        </div>
        <div class="card-body bg-body-tertiary border-top">
            <div class="row">
                <div class="col-lg col-xxl-5">
                    <h6 class="fw-semi-bold ls mb-3 text-uppercase">Account Information</h6>
                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-1">ID</p>
                        </div>
                        <div class="col">dcfasyo_Dfdjl</div>
                    </div>
                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-1">Created</p>
                        </div>
                        <div class="col">2019/01/12 23:13</div>
                    </div>
                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-1">Email</p>
                        </div>
                        <div class="col"><a href="mailto:tony@gmail.com">tony@gmail.com</a></div>
                    </div>
                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-1">Description</p>
                        </div>
                        <div class="col">
                            <p class="fst-italic text-400 mb-1">No Description</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-0">VAT number</p>
                        </div>
                        <div class="col">
                            <p class="fst-italic text-400 mb-0">No VAT number</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-xxl-5 mt-4 mt-lg-0 offset-xxl-1">
                    <h6 class="fw-semi-bold ls mb-3 text-uppercase">Billing Information</h6>
                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-1">Send email to</p>
                        </div>
                        <div class="col"><a href="mailto:tony@gmail.com">tony@gmail.com</a></div>
                    </div>
                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-1">Address</p>
                        </div>
                        <div class="col">
                            <p class="mb-1">8962 Lafayette St. <br />Oswego, NY 13126</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-1">Phone number</p>
                        </div>
                        <div class="col"><a href="tel:+12025550110">+1-202-555-0110</a></div>
                    </div>
                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-0">Invoice prefix</p>
                        </div>
                        <div class="col">
                            <p class="fw-semi-bold mb-0">7C23435</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer border-top text-end"><a class="btn btn-falcon-default btn-sm" href="#!"><span
                    class="fas fa-dollar-sign fs-11 me-1"></span>Refund</a><a class="btn btn-falcon-default btn-sm ms-2"
                href="#!"><span class="fas fa-check fs-11 me-1"></span>Save changes</a></div>
    </div> 
    </div>

    {{-- * Fim do conteudo da dash --}}
@endsection
