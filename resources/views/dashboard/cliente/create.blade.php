@extends('dashboard.layouts.app')
@section('title', 'Agregar Cliente')
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
                    <form method="POST" action="{{ route('cliente.store') }}">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-group">
                                        <label class="form-label">Nombre</label>
                                        <input class="form-control" name="nombre" placeholder="Nombre">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-group">
                                        <label class="form-label">Apellidos</label>
                                        <input class="form-control" name="apellido" placeholder="Apellido">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-group">
                                        <label class="form-label">Nombre</label>
                                        <input class="form-control" name="dni" placeholder="Dni">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-group">
                                        <label class="form-label">Apellidos</label>
                                        <input class="form-control" name="telefono" placeholder="Telefono">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="gr-btn mt-15">
                            <button href="#" class="btn btn-primary btn-lg fs-16">Agregar</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
