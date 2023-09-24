@extends('layouts.base')

@section('content')

    @component('admin.components.create')
        @slot('title', 'Cadastrar Novo Proprietário')
        @slot('url', route('owners.store'))
        @slot('form')
            @include('admin.owners.formulario')
            <div class="form-group">
                <label for="fotoPerfil">Foto de Perfil</label>
                <input type="file" name="fotoPerfil" id="fotoPerfil" class="form-control-file">
            </div>
        @endslot
    @endcomponent

@endsection