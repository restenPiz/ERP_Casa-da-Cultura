@extends('layouts.layout')
@section('content')
    {{-- Inicio do conteudo --}}
    <div class="card mb-3" id="customersTable" style="background-image: url('../../imagem/n1.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center; height: 100vh; margin: 0;"
        data-list='{"valueNames":["name","email","phone","address","joined"],"page":10,"pagination":true}'>
        <div class="card-header">
            <div class="row flex-between-center">
                <div class="col-4 col-sm-auto d-flex align-items-center pe-0">
                    <h5 class="fs-9 mb-0 text-nowrap py-2 py-xl-0">Artistas</h5>
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
                    <div id="table-customers-replace-element"><a class="btn btn-falcon-default btn-sm"
                            data-bs-target="#staticBack" href="#staticBack" data-bs-toggle="modal">
                            <span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span><span
                                class="d-none d-sm-inline ms-1">New</span></a>
                                <a href="{{ route('artist.export') }}" class="btn btn-falcon-default btn-sm" type="button">
                                <span class="fas fa-external-link-alt" data-fa-transform="shrink-3 down-2"></span>
                                <span class="d-none d-sm-inline-block ms-1">Exportar</span></a> 
                    </div>
                </div>
            </div>
        </div>

        {{-- Inicio do modal de Adicao de Artistas --}}

        {{-- Inicio do modal para adicionar o Artista --}}
        <div class="modal fade" id="staticBack" data-bs-backdrop="static" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg mt-6" role="document">
                <div class="modal-content border-0">
                    <div class="position-absolute top-0 end-0 mt-3 me-3 z-1"><button
                            class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                            data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body p-0">
                        <div class="rounded-top-3 bg-body-tertiary py-3 ps-4 pe-6">
                            <h4 class="mb-1" id="staticBackdropLabel">Adicionar Artista
                            </h4>
                        </div><br>
                        <div class="p-4" style="margin-top: -3rem;">
                            <form action="/artistStore" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label class="form-label" for="first-name">Nome Completo</label>
                                        <input name="Name" class="form-control @error('Name') is-invalid @enderror" id="first-name" type="text" placeholder="Nome Completo" />
                                        @error('Name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-6">
                                        <label class="form-label" for="last-name">Morada</label>
                                        <input name="Address" placeholder="Morada" class="form-control @error('Address') is-invalid @enderror" id="last-name" type="text" />
                                        @error('Address')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-6">
                                        <label class="form-label" for="email2">Contacto</label>
                                        <input class="form-control @error('Cell_number') is-invalid @enderror" id="email2" type="text" name="Cell_number" placeholder="Ex: 867336817" />
                                        @error('Cell_number')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-6">
                                        <label class="form-label" for="email2">Actividade</label>
                                        <input class="form-control @error('Activity') is-invalid @enderror" id="email2" type="text" name="Activity" placeholder="Ex: Desenvolvedor FullStack" />
                                        @error('Activity')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    {{-- Fim dos inputs type hidden --}}
                                    <div style="margin-top: 1rem" class="col-12 d-flex"><button style="border-radius: 0"
                                            class="btn btn-primary" type="submit">Adicionar Artista
                                        </button>
                                        
                                    </div>

                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- Fim  do modal de Adicao de Artistas --}}

        <div class="card-body p-0">
            <div class="table-responsive scrollbar">
                <table class="table table-sm table-striped fs-10 mb-0 overflow-hidden">
                    <thead class="bg-200">
                        <tr>
                            <th class="text-900 sort pe-1 align-middle white-space-nowrap ps-5" data-sort="address"></th>
                            <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="name">Name</th>
                            <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="email">Endereco</th>
                            <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="phone">Phone</th>
                            <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="joined">Actividade
                            </th>
                            <th class="align-middle no-sort"></th>
                        </tr>
                    </thead>
                    <tbody class="list" id="table-customers-body">
                        @foreach ($artists as $artist)
                            <tr class="btn-reveal-trigger">
                                <th>
                                    <div class="form-check fs-9 mb-0 d-flex align-items-center"><input
                                            class="form-check-input" id="checkbox-bulk-customers-select" type="checkbox"
                                            data-bulk-select='{"body":"table-customers-body","actions":"table-customers-actions","replacedElement":"table-customers-replace-element"}' />
                                    </div>
                                </th>
                                <td class="email align-middle py-2">{{ $artist->Name }}</td>
                                <td class="phone align-middle white-space-nowrap py-2">{{ $artist->Address }}</td>
                                <td class="address align-middle white-space-nowrap ps-5 py-2">{{ $artist->Cell_number }}
                                </td>
                                <td class="joined align-middle py-2">{{ $artist->Activity }}</td>
                                <td class="align-middle white-space-nowrap py-2 text-end">
                                    <div class="dropdown font-sans-serif position-static"><button
                                            class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button"
                                            id="customer-dropdown-1" data-bs-toggle="dropdown" data-boundary="window"
                                            aria-haspopup="true" aria-expanded="false"><span
                                                class="fas fa-ellipsis-h fs-10"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end border py-0"
                                            aria-labelledby="customer-dropdown-1">
                                            <div class="py-2"><a class="dropdown-item" href="#staticBackdrop"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#staticBackdrop{{ $artist->id }}">Edit</a><a
                                                    class="dropdown-item text-danger"
                                                    href="{{ route('artist.delete', ['id' => $artist->id]) }}">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            {{-- inicio do modal da parte de editar --}}
                            <div class="modal fade" id="staticBackdrop{{ $artist->id }}" data-bs-keyboard="false"
                                data-bs-backdrop="static" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg mt-6" role="document">
                                    <div class="modal-content border-0">
                                        <div class="position-absolute top-0 end-0 mt-3 me-3 z-1"><button
                                                class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                                data-bs-dismiss="modal" aria-label="Close"></button></div>
                                        <div class="modal-body p-0">
                                            <div class="rounded-top-3 bg-body-tertiary py-3 ps-4 pe-6">
                                                <h4 class="mb-1" id="staticBackdropLabel">Adicionar Artista
                                                </h4>
                                            </div><br>
                                            <div class="p-4" style="margin-top: -3rem;">
                                                <form action="{{route('artist.update',['id'=>$artist->id])}}" method="post">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-lg-6"> <label class="form-label"
                                                                for="first-name">
                                                                Nome Completo</label><input name="Name"
                                                                class="form-control" id="first-name" type="text"
                                                                value="{{$artist->Name}}" /></div>
                                                        <div class="col-lg-6"> <label class="form-label"
                                                                for="last-name">Morada</label><input name="Address"
                                                                value="{{$artist->Address}}" class="form-control" id="last-name"
                                                                type="text" /></div>
                                                        <div class="col-lg-6"> <label class="form-label"
                                                                for="email2">Contacto</label><input class="form-control"
                                                                id="email2" type="text" name="Cell_number"
                                                                value="{{$artist->Cell_number}}" />
                                                        </div>
                                                        <div class="col-lg-6"> <label class="form-label"
                                                                for="email2">Actividade</label><input
                                                                class="form-control" id="email2" type="text"
                                                                name="Activity"
                                                                value="{{$artist->Activity}}" />
                                                        </div>
                                                        {{-- Fim dos inputs type hidden --}}
                                                        <div style="margin-top: 1rem" class="col-12 d-flex"><button
                                                                style="border-radius: 0" class="btn btn-primary"
                                                                type="submit">Actualizar Artista
                                                            </button></div>
                                                    </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            {{-- Fim do modal de editar --}}
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
