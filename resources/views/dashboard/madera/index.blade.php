@extends('dashboard.layouts.app')
@section('title', 'Madera')
@section('main-menu')
    <div class="main-content client list">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-body d-flex justify-content-between pt-0 pb-0">
                        <div class="search-form d-flex">
                            <input type="text" placeholder="Nombre" class="form-control">
                            <button type="submit" class="search d-flex"><i class="fas fa-search"></i>Buscar</button>
                        </div>
                        <div class="list-action">
                            <a class="list active" href="#" onclick="liststyle()"><i class="bx bx-menu"></i></a>
                            <a href="#" class="list-board" onclick="listboard()"><i class="bx bxs-dashboard"></i></a>
                            <a href="#" class="add" data-bs-toggle="modal" data-bs-target="#add_client">Agregar<i
                                    class="fas fa-plus-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @forelse ($maderas as $madera)
                <div class="col-3 col-md-6 col-sm-12 mb-25">
                    <div class="box client">
                        <div class="dropdown">
                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bx bx-dots-horizontal-rounded"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-id="{{ $madera->id }}"
                                    data-bs-target="#delete_madera-{{ $madera->id }}">
                                    <i class="bx bx-trash"></i> Eliminar
                                </a>
                                <a class="dropdown-item btn_edit_madera"
                                    href="{{ route('madera.edit', ['madera' => $madera->id]) }}">
                                    <i class="bx bx-edit mr-5"></i>Editar
                                </a>

                            </div>
                        </div>
                        <div class="box-body pt-5 pb-0">
                            <a>
                                <h5 class="mt-17">{{ $madera->especie }}</h5>
                            </a>
                            <p class="fs-14 font-w400 font-main">Fecha: <span
                                    class="text-clo-primary font-w500 pl-4">{{ $madera->created_at }}</span></p>
                            <ul class="info">
                                <li class="fs-14"><i class="bx bxs-circle"></i>{{ $madera->diametro }}</li>
                                <li class="fs-14"><i class="bx bxs-circle"></i>{{ $madera->volumen }}</li>
                            </ul>
                            <div class="group-btn d-flex justify-content-between d-none">
                                <a class="bg-btn-sec color-main" href="#">Ver más</a>
                            </div>
                        </div>
                        <div class="modal custom-modal fade" id="delete_madera-{{ $madera->id }}" role="dialog">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="form-header">
                                            <h3>Eliminar Madera</h3>
                                            <p>¿Estas seguro que deseas eliminar?</p>
                                        </div>
                                        <div class="modal-btn delete-action">
                                            <div class="row">
                                                <div class="col-6 mb-0">
                                                    <form method="POST"
                                                        action="{{ route('madera.destroy', ['madera' => $madera->id]) }}">
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
        <div id="add_client" class="modal custom-modal fade" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Agregar Madera</h4>
                        <button type="button" class="close" data-bs-dismiss="modal">×</button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('madera.store') }}">
                            @csrf
                            <div class="form-group">
                                <label>Especie</label>
                                <input type="text" class="form-control" id="especie" name="especie">
                            </div>
                            <div class="form-group">
                                <label>Diametro</label>
                                <input type="number" class="form-control" id="diametro" name="diametro">
                            </div>
                            <div class="form-group">
                                <label>Volumen</label>
                                <input type="number" class="form-control" id="volumen" name="volumen">
                            </div>
                            <div class="submit-section text-center">
                                <button class="btn btn-primary submit-btn">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
