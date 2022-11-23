@extends('dashboard.layouts.app')
@section('title', 'Editar Producto')
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
                    <form method="POST" action="{{ route('producto.update', ['producto' => $producto->id]) }}" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 mb-24">
                                    <div class="form-group">
                                        <label>Subir Imagen</label>
                                        <input class="form-control" type="file" name="imagen">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-group">
                                        <label class="form-label">Especie</label>
                                        <input class="form-control" name="especie" value="{{$producto->especie}}" placeholder="especie">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-group">
                                        <label class="form-label">Descripcion</label>
                                        <input class="form-control" name="descripcion" value="{{$producto->descripcion}}" placeholder="descripcion">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-group">
                                        <label class="form-label">Diametro</label>
                                        <input class="form-control" name="diametro" value="{{$producto->diametro}}" placeholder="diametro">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-group">
                                        <label class="form-label">Volumen</label>
                                        <input class="form-control" name="volumen" value="{{$producto->volumen}}" placeholder="volumen">
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
