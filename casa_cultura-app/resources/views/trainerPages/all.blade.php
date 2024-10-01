@extends('layouts.layout')
@section('content')
    {{-- Inicio do conteudo --}}
    <div class="card mb-3" id="customersTable"
        data-list='{"valueNames":["name","email","phone","address","joined"],"page":10,"pagination":true}'>
        <div class="card-header">
            <div class="row flex-between-center">
                <div class="col-4 col-sm-auto d-flex align-items-center pe-0">
                    <h5 class="fs-9 mb-0 text-nowrap py-2 py-xl-0">Formadores</h5>
                </div>
                <div class="col-8 col-sm-auto text-end ps-2">
                    <div class="d-none" id="table-customers-actions">
                        <div class="d-flex"><select class="form-select form-select-sm" aria-label="Bulk actions">
                                <option selected="">Bulk actions</option>
                                <option value="Refund">Refund</option>
                                <option value="Delete">Delete</option>
                                <option value="Archive">Archive</option>
                            </select><button class="btn btn-falcon-default btn-sm ms-2" type="button">Apply</button></div>
                    </div>
                    <div id="table-customers-replace-element"><button class="btn btn-falcon-default btn-sm"
                            type="button"><span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span><span
                                class="d-none d-sm-inline-block ms-1">New</span></button><button
                            class="btn btn-falcon-default btn-sm mx-2" type="button"><span class="fas fa-filter"
                                data-fa-transform="shrink-3 down-2"></span><span
                                class="d-none d-sm-inline-block ms-1">Filter</span></button><button
                            class="btn btn-falcon-default btn-sm" type="button"><span class="fas fa-external-link-alt"
                                data-fa-transform="shrink-3 down-2"></span><span
                                class="d-none d-sm-inline-block ms-1">Export</span></button></div>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive scrollbar">
                <table class="table table-sm table-striped fs-10 mb-0 overflow-hidden">
                    <thead class="bg-200">
                        <tr>
                            <th>
                                <div class="form-check fs-9 mb-0 d-flex align-items-center"><input class="form-check-input"
                                        id="checkbox-bulk-customers-select" type="checkbox"
                                        data-bulk-select='{"body":"table-customers-body","actions":"table-customers-actions","replacedElement":"table-customers-replace-element"}' />
                                </div>
                            </th>
                            <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="name">Name</th>
                            <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="email">Email</th>
                            <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="phone">Phone</th>
                            <th class="text-900 sort pe-1 align-middle white-space-nowrap ps-5" data-sort="address"
                                style="min-width: 200px;">Billing Address</th>
                            <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="joined">Actividade
                            </th>
                            <th class="align-middle no-sort"></th>
                        </tr>
                    </thead>
                    <tbody class="list" id="table-customers-body">
                        @foreach ($trainers as $trainer)
                            <tr class="btn-reveal-trigger">
                                <td class="align-middle py-2" style="width: 28px;">
                                    <div class="form-check fs-9 mb-0 d-flex align-items-center"><input
                                            class="form-check-input" type="checkbox" id="customer-1"
                                            data-bulk-select-row="data-bulk-select-row" /></div>
                                </td>
                                <td class="name align-middle {{--white-space-nowrap--}} py-2"><a href="customer-details.html">
                                        <div class="d-flex d-flex align-items-center">
                                            <div class="avatar avatar-xl me-2">
                                                <img class="rounded-circle"
                                                    src="{{ asset('storage/' . $trainer->upload_file) }}" alt="" />
                                            </div>
                                            <div class="flex-1">
                                                <h5 class="mb-0 fs-10">{{ $trainer->name }}</h5>
                                            </div>
                                        </div>
                                    </a>
                                </td>
                                <td class="email align-middle py-2"><a
                                        href="mailto:emma@example.com">{{ $trainer->email }}</a></td>
                                <td class="phone align-middle white-space-nowrap py-2"><a
                                        href="tel:2122288403">{{ $trainer->contact }}</a></td>
                                <td class="address align-middle white-space-nowrap ps-5 py-2">{{ $trainer->place }}</td>
                                <td class="joined align-middle py-2">{{ $trainer->function }}</td>
                                <td class="align-middle white-space-nowrap py-2 text-end">
                                    <div class="dropdown font-sans-serif position-static"><button
                                            class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button"
                                            id="customer-dropdown-1" data-bs-toggle="dropdown" data-boundary="window"
                                            aria-haspopup="true" aria-expanded="false"><span
                                                class="fas fa-ellipsis-h fs-10"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end border py-0"
                                            aria-labelledby="customer-dropdown-1">
                                            <div class="py-2"><a class="dropdown-item" href="#staticBackdrop" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Edit</a><a
                                                    class="dropdown-item text-danger" href="{{route('trainer.delete',['id'=>$trainer->id])}}">Delete</a></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            {{--inicio do modal da parte de editar--}}
                            <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg mt-6" role="document">
                                <div class="modal-content border-0">
                                <div class="position-absolute top-0 end-0 mt-3 me-3 z-1"><button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button></div>
                                <div class="modal-body p-0">
                                    <div class="rounded-top-3 bg-body-tertiary py-3 ps-4 pe-6">
                                    <h4 class="mb-1" id="staticBackdropLabel">Add a new illustration to the landing page</h4>
                                    <p class="fs-11 mb-0">Added by <a class="link-600 fw-semi-bold" href="#!">Antony</a></p>
                                    </div>
                                    <div class="p-4">
                                    <div class="row">
                                        <div class="col-lg-9">
                                        <div class="d-flex"><span class="fa-stack ms-n1 me-3"><i class="fas fa-circle fa-stack-2x text-200"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-tag" data-fa-transform="shrink-2"></i></span>
                                            <div class="flex-1">
                                            <h5 class="mb-2 fs-9">Labels</h5>
                                            <div class="d-flex"><span class="badge me-1 py-2 badge-subtle-success">New</span><span class="badge me-1 py-2 badge-subtle-primary">Goal</span><span class="badge me-1 py-2 badge-subtle-info">Enhancement</span>
                                                <div class="dropdown dropend"><button class="btn btn-sm btn-secondary px-2 fsp-75 bg-400 border-400 dropdown-toggle dropdown-caret-none" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-plus"></span></button>
                                                <div class="dropdown-menu">
                                                    <h6 class="dropdown-header py-0 px-3 mb-0">Select Label</h6>
                                                    <div class="dropdown-divider"></div>
                                                    <div class="px-3"><button class="badge-subtle-danger dropdown-item rounded-1 mb-2" type="button">New</button><button class="badge-subtle-primary dropdown-item rounded-1 mb-2" type="button">Goal</button><button class="badge-subtle-info dropdown-item rounded-1 mb-2" type="button">Enhancement</button></div>
                                                    <div class="dropdown-divider"></div>
                                                    <div class="px-3"><button class="btn btn-sm d-block w-100 btn-outline-secondary border-400">Create Label</button></div>
                                                </div>
                                                </div>
                                            </div>
                                            <hr class="my-4" />
                                            </div>
                                        </div>
                                        <div class="d-flex"><span class="fa-stack ms-n1 me-3"><i class="fas fa-circle fa-stack-2x text-200"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-align-left" data-fa-transform="shrink-2"></i></span>
                                            <div class="flex-1">
                                            <h5 class="mb-2 fs-9">Description</h5>
                                            <p class="text-break fs-10">The illustration must match to the contrast of the theme. The illustraion must described the concept of the design. To know more about the theme visit the page. </p>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-lg-3">
                                        <h6 class="mt-5 mt-lg-0">Add To Card</h6>
                                        <ul class="nav flex-lg-column fs-10">
                                            <li class="nav-item me-2 me-lg-0"><a class="nav-link nav-link-card-details" href="#!"><span class="fas fa-user me-2"></span>Members</a></li>
                                            <li class="nav-item me-2 me-lg-0"><a class="nav-link nav-link-card-details" href="#!"><span class="fas fa-tag me-2"></span>Label</a></li>
                                            <li class="nav-item me-2 me-lg-0"><a class="nav-link nav-link-card-details" href="#!"><span class="fas fa-paperclip me-2"></span>Attachments</a></li>
                                            <li class="nav-item me-2 me-lg-0"><a class="nav-link nav-link-card-details" href="#!"><span class="fa fa-align-left me-2"></span>Description </a></li>
                                        </ul>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            {{--Fim do modal de editar--}}
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer d-flex align-items-center justify-content-center"><button
                class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous"
                data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
            <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-falcon-default ms-1" type="button"
                title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
        </div>
    </div>
    </div>
    {{-- Fim do conteudo --}}
@endsection
