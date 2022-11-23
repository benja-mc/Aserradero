@extends('dashboard.layouts.app')
@section('title', 'Usuarios')
@section('main-menu')
    <div class="main-content user">
        <div class="row">
            <div class="col-9 col-xl-12">
                <div class="box">
                    <div class="box-body pb-30">
                        <div class="row">
                            <div class="col-md-12 col-xl-10 mb-0">
                                <div class="row">
                                    <div class="mb-0">
                                        <div class="form-group">
                                            <label class="form-label">Nombre de usuario:</label>
                                            <input name="attendance"
                                                class="form-control custom-select select2 select2-hidden-accessible"
                                                data-placeholder="Nombre de usuario" tabindex="-1" aria-hidden="true"
                                                data-select2-id="select2-data-16-akyu" />

                                            <span class="select2 select2-container select2-container--default"
                                                dir="ltr" data-select2-id="select2-data-17-6y8j"
                                                style="width: 100%;"><span class="selection">
                                                    <span class="select2-selection select2-selection--single"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0" aria-disabled="false"
                                                        aria-labelledby="select2-attendance-ws-container"
                                                        aria-controls="select2-attendance-ws-container">
                                                        <span class="select2-selection__rendered"
                                                            id="select2-attendance-ws-container" role="textbox"
                                                            aria-readonly="true" title="Select Priority"></span>
                                                        <span class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b>
                                                        </span>
                                                    </span>
                                                </span>
                                                <span class="dropdown-wrapper" aria-hidden="true"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-2 mb-0">
                                <div class="form-group mt-32"> <a href="#"
                                        class="btn bg-primary btn-block color-white">Buscar</a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <div id="task-profile_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-vcenter text-nowrap table-bordered dataTable no-footer"
                                            id="task-profile" role="grid">
                                            <thead>
                                                <tr class="top">
                                                    <th class="border-bottom-0 text-center sorting fs-14 font-w500"
                                                        tabindex="0" aria-controls="task-profile" rowspan="1"
                                                        colspan="1" style="width: 26.6562px;">Nro</th>
                                                    <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0"
                                                        aria-controls="task-profile" rowspan="1" colspan="1"
                                                        style="width: 222.312px;">Nombre</th>
                                                    <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0"
                                                        aria-controls="task-profile" rowspan="1" colspan="1"
                                                        style="width: 84.8281px;">Email</th>
                                                    <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0"
                                                        aria-controls="task-profile" rowspan="1" colspan="1"
                                                        style="width: 87.9844px;">Rol</th>
                                                    <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0"
                                                        aria-controls="task-profile" rowspan="1" colspan="1"
                                                        style="width: 87.9844px;">Fecha creación</th>
                                                    <th class="border-bottom-0 sorting_disabled fs-14 font-w500"
                                                        rowspan="1" colspan="1" style="width: 145.391px;">Acciones
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($users as $user)
                                                    <tr class="odd">
                                                        <td class="text-center">{{ $user->id }}</td>
                                                        <td>
                                                            <span>{{ $user->name }}</span>
                                                        </td>
                                                        <td>
                                                            <span>{{ $user->email }}</span>
                                                        </td>
                                                        <td><span class="badge badge-success-light">Admin</span></td>
                                                        <td>{{ $user->created_at }}</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="btn-link"
                                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="bx bx-dots-horizontal-rounded"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#"
                                                                        data-toggle="modal"
                                                                        data-target="#delete_client"><i
                                                                            class="bx bx-trash"></i> Eliminar
                                                                    </a>
                                                                    <a class="dropdown-item" href="#"
                                                                        data-toggle="modal" data-target="#edit_client"><i
                                                                            class="bx bx-edit mr-5"></i>Editar
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <h2 class="text-center">No hay usuarios disponibles</h2>
                                                @endforelse

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row d-none">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="task-profile_info" role="status"
                                            aria-live="polite">Mostrando 1 - 3 de 3 usuarios</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="task-profile_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="task-profile_previous"><a href="#"
                                                        aria-controls="task-profile" data-dt-idx="0" tabindex="0"
                                                        class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="task-profile" data-dt-idx="1" tabindex="0"
                                                        class="page-link">01</a></li>
                                                <li class="paginate_button page-item active"><a href="#"
                                                        aria-controls="task-profile" data-dt-idx="1" tabindex="0"
                                                        class="page-link">02</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="task-profile" data-dt-idx="1" tabindex="0"
                                                        class="page-link">03</a></li>
                                                <li class="paginate_button page-item next disabled"
                                                    id="task-profile_next"><a href="#" aria-controls="task-profile"
                                                        data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
