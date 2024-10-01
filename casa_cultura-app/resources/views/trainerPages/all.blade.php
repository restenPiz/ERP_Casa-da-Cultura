@extends('layouts.layout')
@section('content')

    {{--Inicio do conteudo--}}
        <div class="card mb-3" id="customersTable" data-list='{"valueNames":["name","email","phone","address","joined"],"page":10,"pagination":true}'>
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
                  <div id="table-customers-replace-element"><button class="btn btn-falcon-default btn-sm" type="button"><span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ms-1">New</span></button><button class="btn btn-falcon-default btn-sm mx-2" type="button"><span class="fas fa-filter" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ms-1">Filter</span></button><button class="btn btn-falcon-default btn-sm" type="button"><span class="fas fa-external-link-alt" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ms-1">Export</span></button></div>
                </div>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive scrollbar">
                <table class="table table-sm table-striped fs-10 mb-0 overflow-hidden">
                  <thead class="bg-200">
                    <tr>
                      <th>
                        <div class="form-check fs-9 mb-0 d-flex align-items-center"><input class="form-check-input" id="checkbox-bulk-customers-select" type="checkbox" data-bulk-select='{"body":"table-customers-body","actions":"table-customers-actions","replacedElement":"table-customers-replace-element"}' /></div>
                      </th>
                      <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="name">Name</th>
                      <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="email">Email</th>
                      <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="phone">Phone</th>
                      <th class="text-900 sort pe-1 align-middle white-space-nowrap ps-5" data-sort="address" style="min-width: 200px;">Billing Address</th>
                      <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="joined">Actividade</th>
                      <th class="align-middle no-sort"></th>
                    </tr>
                  </thead>
                  <tbody class="list" id="table-customers-body">
                    @foreach ($trainers as $trainer)
                        <tr class="btn-reveal-trigger">
                            <td class="align-middle py-2" style="width: 28px;">
                                <div class="form-check fs-9 mb-0 d-flex align-items-center"><input class="form-check-input" type="checkbox" id="customer-1" data-bulk-select-row="data-bulk-select-row" /></div>
                            </td>
                            <td class="name align-middle white-space-nowrap py-2"><a href="customer-details.html">
                                <div class="d-flex d-flex align-items-center">
                                    <div class="avatar avatar-xl me-2">
                                    <img class="rounded-circle" src="{{ asset('storage/' . $trainer->upload_file) }}" alt="" />
                                    </div>
                                    <div class="flex-1">
                                    <h5 class="mb-0 fs-10">{{$trainer->name}}</h5>
                                    </div>
                                </div>
                                </a></td>
                            <td class="email align-middle py-2"><a href="mailto:emma@example.com">{{$trainer->email}}</a></td>
                            <td class="phone align-middle white-space-nowrap py-2"><a href="tel:2122288403">{{$trainer->contact}}</a></td>
                            <td class="address align-middle white-space-nowrap ps-5 py-2">{{$trainer->place}}</td>
                            <td class="joined align-middle py-2">{{$trainer->function}}</td>
                            <td class="align-middle white-space-nowrap py-2 text-end">
                                <div class="dropdown font-sans-serif position-static"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" id="customer-dropdown-1" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="customer-dropdown-1">
                                    <div class="py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                                </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-center"><button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
              <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
            </div>
          </div>
        </div>
    {{--Fim do conteudo--}}

@endsection