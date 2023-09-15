@extends('layouts.base')

@section('content')
    @component('admin.components.show')
        @slot('title', 'Visualizar Consulta')
        @slot('content')
            @include('admin.appointments.formulario')
        @endslot
        @slot('back')
            <a href="{{ route('appointments.index') }}" class="btn btn-warning font-weight-bold m-1 float-right">Voltar</a>
        @endslot
    @endcomponent
@endsection