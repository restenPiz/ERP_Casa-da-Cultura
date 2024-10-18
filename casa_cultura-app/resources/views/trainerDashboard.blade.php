@extends('layouts.layout')
@section('content')
    {{-- * Inicio do conteudo do dash --}}
    <div class="card mb-3">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h5 class="mb-2">Tony Robbins (<a href="mailto:tony@gmail.com">tony@gmail.com</a>)</h5><a
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
                    <p class="mb-0">Customer was created</p>
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
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Logs</h5>
        </div>
        <div class="card-body border-top p-0">
            <div class="row g-0 align-items-center border-bottom py-2 px-3">
                <div class="col-md-auto pe-3"><span class="badge badge-subtle-success rounded-pill">200</span></div>
                <div class="col-md mt-1 mt-md-0"><code>POST /v1/invoiceitems</code></div>
                <div class="col-md-auto">
                    <p class="mb-0">2019/02/23 15:29:45</p>
                </div>
            </div>
            <div class="row g-0 align-items-center border-bottom py-2 px-3">
                <div class="col-md-auto pe-3"><span class="badge badge-subtle-warning rounded-pill">400</span></div>
                <div class="col-md mt-1 mt-md-0"><code>POST /v1/invoiceitems</code></div>
                <div class="col-md-auto">
                    <p class="mb-0">2019/02/19 21:32:12</p>
                </div>
            </div>
            <div class="row g-0 align-items-center border-bottom py-2 px-3">
                <div class="col-md-auto pe-3"><span class="badge badge-subtle-success rounded-pill">200</span></div>
                <div class="col-md mt-1 mt-md-0"><code>POST /v1/invoices/in_1Dnkhadfk</code></div>
                <div class="col-md-auto">
                    <p class="mb-0">2019/02/26 12:23:43</p>
                </div>
            </div>
            <div class="row g-0 align-items-center border-bottom py-2 px-3">
                <div class="col-md-auto pe-3"><span class="badge badge-subtle-success rounded-pill">200</span></div>
                <div class="col-md mt-1 mt-md-0"><code>POST /v1/invoices/in_1Dnkhadfk</code></div>
                <div class="col-md-auto">
                    <p class="mb-0">2019/02/12 23:32:12</p>
                </div>
            </div>
            <div class="row g-0 align-items-center border-bottom py-2 px-3">
                <div class="col-md-auto pe-3"><span class="badge badge-subtle-danger rounded-pill">404</span></div>
                <div class="col-md mt-1 mt-md-0"><code>POST /v1/invoices/in_1Dnkhadfk</code></div>
                <div class="col-md-auto">
                    <p class="mb-0">2019/02/08 02:20:23</p>
                </div>
            </div>
            <div class="row g-0 align-items-center border-bottom py-2 px-3">
                <div class="col-md-auto pe-3"><span class="badge badge-subtle-success rounded-pill">200</span></div>
                <div class="col-md mt-1 mt-md-0"><code>POST /v1/invoices/in_1Dnkhadfk</code></div>
                <div class="col-md-auto">
                    <p class="mb-0">2019/02/01 12:29:34</p>
                </div>
            </div>
        </div>
        <div class="card-footer bg-body-tertiary p-0"><a class="btn btn-link d-block w-100" href="#!">View more
                logs<span class="fas fa-chevron-right fs-11 ms-1"></span></a></div>
    </div>
    <footer class="footer">
        <div class="row g-0 justify-content-between fs-10 mt-4 mb-3">
            <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">Thank you for creating with Falcon <span class="d-none d-sm-inline-block">|
                    </span><br class="d-sm-none" /> 2024 &copy; <a href="https://themewagon.com/">Themewagon</a></p>
            </div>
            <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v3.22.0</p>
            </div>
        </div>
    </footer>
    </div>
    <div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog"
        aria-labelledby="authentication-modal-label" aria-hidden="true">
        <div class="modal-dialog mt-6" role="document">
            <div class="modal-content border-0">
                <div class="modal-header px-5 position-relative modal-shape-header bg-shape">
                    <div class="position-relative z-1">
                        <h4 class="mb-0 text-white" id="authentication-modal-label">Register</h4>
                        <p class="fs-10 mb-0 text-white">Please create your free Falcon account</p>
                    </div>
                    <div data-bs-theme="dark"><button class="btn-close position-absolute top-0 end-0 mt-2 me-2"
                            data-bs-dismiss="modal" aria-label="Close"></button></div>
                </div>
                <div class="modal-body py-4 px-5">
                    <form>
                        <div class="mb-3"><label class="form-label" for="modal-auth-name">Name</label><input
                                class="form-control" type="text" autocomplete="on" id="modal-auth-name" /></div>
                        <div class="mb-3"><label class="form-label" for="modal-auth-email">Email address</label><input
                                class="form-control" type="email" autocomplete="on" id="modal-auth-email" /></div>
                        <div class="row gx-2">
                            <div class="mb-3 col-sm-6"><label class="form-label"
                                    for="modal-auth-password">Password</label><input class="form-control" type="password"
                                    autocomplete="on" id="modal-auth-password" /></div>
                            <div class="mb-3 col-sm-6"><label class="form-label"
                                    for="modal-auth-confirm-password">Confirm Password</label><input class="form-control"
                                    type="password" autocomplete="on" id="modal-auth-confirm-password" /></div>
                        </div>
                        <div class="form-check"><input class="form-check-input" type="checkbox"
                                id="modal-auth-register-checkbox" /><label class="form-label"
                                for="modal-auth-register-checkbox">I accept the <a href="#!">terms </a>and <a
                                    class="white-space-nowrap" href="#!">privacy policy</a></label></div>
                        <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit"
                                name="submit">Register</button></div>
                    </form>
                    <div class="position-relative mt-5">
                        <hr />
                        <div class="divider-content-center">or register with</div>
                    </div>
                    <div class="row g-2 mt-2">
                        <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100"
                                href="#"><span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span>
                                google</a></div>
                        <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100"
                                href="#"><span class="fab fa-facebook-square me-2"
                                    data-fa-transform="grow-8"></span> facebook</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- * Fim do conteudo da dash --}}
@endsection
