@extends('layouts.base')

@section('content')

    @component('admin.components.edit')
        @slot('title', 'Editar Consulta')
        @slot('url', route('appointments.update', $appointment->id))
        @slot('form')
            @include('admin.appointments.formulario')
        @endslot
    @endcomponent

@endsection