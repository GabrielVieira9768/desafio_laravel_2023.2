@extends('layouts.base')

@section('content')

    @component('admin.components.create')
        @slot('title', 'Cadastrar Novo Animal')
        @slot('url', route('animals.store'))
        @slot('form')
            @include('admin.animals.formulario')
        @endslot
    @endcomponent

@endsection