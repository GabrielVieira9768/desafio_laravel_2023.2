@extends('layouts.base')

@section('content')

    @component('admin.components.create')
        @slot('title', 'Agendar Nova Consulta')
        @slot('url', route('appointments.store'))
        @slot('form')
            @include('admin.appointments.formulario')
        @endslot
    @endcomponent

@endsection