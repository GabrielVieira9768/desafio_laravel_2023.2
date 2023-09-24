@extends('layouts.base')

@section('content')

    @component('admin.components.edit')
        @slot('title', 'Editar Proprietário')
        @slot('url', route('owners.update', $owner->id))
        @slot('form')
            @include('admin.owners.formulario')
            <div class="form-group">
                <label for="fotoPerfil">Foto de Perfil</label>
                <input type="file" name="fotoPerfil" id="fotoPerfil" class="form-control-file">
            </div>
        @endslot
    @endcomponent

@endsection