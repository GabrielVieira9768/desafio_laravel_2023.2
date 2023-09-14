@extends('layouts.base')

@section('content')

    @component('admin.components.create')
        @slot('title', 'Cadastrar Novo Usuário')
        @slot('url', route('users.store'))
        @slot('form')
            @include('admin.users.formulario')
        @endslot
    @endcomponent

@endsection