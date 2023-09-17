@extends('layouts.base')

@section('content')
    @component('admin.components.show')
        @slot('title', 'Visualizar Animal')
        @slot('content')
            @include('admin.animals.formulario')
        @endslot
        @slot('back')
            <a href="{{ route('animals.index') }}" class="btn btn-warning font-weight-bold m-1 float-right">Voltar</a>
        @endslot
    @endcomponent
@endsection