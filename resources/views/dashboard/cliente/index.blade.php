@extends('dashboard.layouts.app')
@section('title', 'Clientes')
@section('main-menu')
    <div class="main-content client list">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-body d-flex pt-0 pb-0">
                        <div class="search-form d-flex">
                            <input type="text" placeholder="Nombre" class="form-control">
                            <button type="submit" class="search d-flex"><i class="fas fa-search"></i>Buscar</button>
                        </div>
                    </div>
                </div>
            </div>
            @forelse ($clientes as $cliente)
                <div class="col-3 col-md-6 col-sm-12 mb-25">
                    <div class="box client">
                        <div class="dropdown">
                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bx bx-dots-horizontal-rounded"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-id="{{ $cliente->id }}"
                                    data-bs-target="#delete_cliente-{{ $cliente->id }}">
                                    <i class="bx bx-trash"></i> Eliminar
                                </a>
                                <a class="dropdown-item" href="{{ route('cliente.edit', ['cliente' => $cliente->id]) }}">
                                    <i class="bx bx-edit mr-5"></i>Editar
                                </a>

                            </div>
                        </div>
                        <div class="box-body pt-5 pb-0">
                            <a>
                                <h5 class="mt-17">{{ $cliente->nombre . " " . $cliente->apellido }}</h5>
                            </a>
                            <p class="fs-14 font-w400 font-main">Fecha: <span
                                    class="text-clo-primary font-w500 pl-4">{{ $cliente->created_at->toFormattedDateString() }}</span></p>
                            <ul class="info">
                                <li class="fs-14"><i class="bx bxs-phone"></i>{{ $cliente->telefono }}</li>
                                <li class="fs-14"><i class="bx bxs-id-card"></i>{{ $cliente->dni }}</li>
                            </ul>
                            <div class="group-btn d-flex justify-content-between d-none">
                                <a class="bg-btn-sec color-main" href="#">Ver más</a>
                            </div>
                        </div>
                        <div class="modal custom-modal fade" id="delete_cliente-{{ $cliente->id }}" role="dialog">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="form-header">
                                            <h3>Eliminar Cliente</h3>
                                            <p>¿Estas seguro que deseas eliminar?</p>
                                        </div>
                                        <div class="modal-btn delete-action">
                                            <div class="row">
                                                <div class="col-6 mb-0">
                                                    <form method="POST"
                                                        action="{{ route('cliente.destroy', ['cliente' => $cliente->id]) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-primary continue-btn w-100">Eliminar</button>
                                                    </form>
                                                </div>
                                                <div class="col-6 mb-0">
                                                    <a href="javascript:void(0);" data-bs-dismiss="modal"
                                                        class="btn btn-primary cancel-btn">Cancelar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <h2 class="text-center">No se encontraron datos disponibles</h2>
            @endforelse
        </div>
    </div>
@endsection
