@extends('layouts.base')

@section('content')
    @component('admin.components.show')
        @slot('title', 'Visualizar Proprietário')
        @slot('content')
            @include('admin.owners.formulario')
            <div class="form-grup col-sm-12 col-md-4">
                <label for="fotoPerfil">Foto de Perfil</label>
                <img src="{{ asset('/storage/storage/fotosPerfil/' . $owner->fotoPerfil) }}" alt="Foto de Perfil" class="img-fluid">
            </div>
        @endslot
        @slot('back')
            <a href="{{ route('owners.index') }}" class="btn btn-warning font-weight-bold m-1 float-right">Voltar</a>
        @endslot
    @endcomponent
@endsection