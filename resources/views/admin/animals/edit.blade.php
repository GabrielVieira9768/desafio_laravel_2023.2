@extends('layouts.base')

@section('content')

    @component('admin.components.edit')
        @slot('title', 'Editar Animal')
        @slot('url', route('animals.update', $animal->id))
        @slot('form')
            @include('admin.animals.formulario')
        @endslot
    @endcomponent

@endsection