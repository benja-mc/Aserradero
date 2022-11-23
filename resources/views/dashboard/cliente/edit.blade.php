@extends('dashboard.layouts.app')
@section('title', 'Editar Cliente')
@section('main-menu')
    <div class="main-content project">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    @if (Session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ Session('message') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('cliente.update', ['cliente' => $cliente->id]) }}">
                        @csrf
                        @method("PUT")
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-group">
                                        <label class="form-label">Nombre</label>
                                        <input class="form-control" name="nombre" value="{{$cliente->nombre}}" placeholder="Nombre">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-group">
                                        <label class="form-label">Apellidos</label>
                                        <input class="form-control" name="apellido" value="{{$cliente->apellido}}" placeholder="Apellido">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-group">
                                        <label class="form-label">Nombre</label>
                                        <input class="form-control" name="dni" value="{{$cliente->dni}}" placeholder="Dni">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-group">
                                        <label class="form-label">Apellidos</label>
                                        <input class="form-control" name="telefono" value="{{$cliente->telefono}}" placeholder="Telefono">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="gr-btn mt-15">
                            <button href="#" class="btn btn-primary btn-lg fs-16">Guardar</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
