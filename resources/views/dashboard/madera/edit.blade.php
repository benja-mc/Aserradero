@extends('dashboard.layouts.app')
@section('title', 'Editar Madera')
@push('js')
    <script>
        $(".btn_edit_madera").click(() => {
            console.log($(this));
            $("#madera_id").attr('action', $(this).data('id'));
            $("#especie").val($(this).data('especie'));
            $("#diametro").val($(this).data('diametro'));
            $("#volumen").val($(this).data('volumen'));
        });
    </script>
@endpush
@section('main-menu')
    <div class="main-content">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="auth-content my-auto">
                        <form method="POST" class="mt-6 pt-2" action="{{route("madera.update", ["madera" => $madera->id])}}">
                            @csrf
                            @method("PUT")
                            <div class="mb-3">
                                <label class="form-label mb-14">Especie</label>
                                <input type="text" class="form-control" value="{{ $madera->especie }}" name="especie"
                                    placeholder="Especie" required>
                                @error('especie')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3 mt-24">
                                <label for="useremail" class="form-label mb-14">Diametro</label>
                                <input type="numeric" class="form-control" value="{{ $madera->diametro }}" name="diametro"
                                    placeholder="100.00" required>
                                @error('diametro')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3 mt-24">
                                <label for="useremail" class="form-label mb-14">Volumen</label>
                                <input type="numeric" class="form-control" value="{{ $madera->volumen }}" name="volumen"
                                    placeholder="100.00" required>
                                @error('volumen')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3 mt-29">
                                <button class="btn bg-primary color-white w-100 waves-effect waves-light fs-18 font-w500"
                                    type="submit">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
