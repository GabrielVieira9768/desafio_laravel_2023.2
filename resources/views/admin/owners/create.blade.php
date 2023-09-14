@extends('layouts.base')

@section('content')

    @component('admin.components.create')
        @slot('title', 'Cadastrar Novo Proprietário')
        @slot('url', route('owners.store'))
        @slot('form')
            @include('admin.owners.formulario')
        @endslot
    @endcomponent

@endsection

@section('js')
    <script src="{{ asset('js/formulario-mascara/cpf-mascara.js') }}"></script>
    <script src="{{ asset('js/formulario-mascara/telefone-mascara.js') }}"></script>
@endsection