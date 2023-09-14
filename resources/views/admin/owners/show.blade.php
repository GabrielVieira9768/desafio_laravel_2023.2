@extends('layouts.base')

@section('content')
    @component('admin.components.show')
        @slot('title', 'Visualizar Proprietário')
        @slot('content')
            @include('admin.owners.formulario')
        @endslot
        @slot('back')
            <a href="{{ route('owners.index') }}" class="btn btn-warning font-weight-bold m-1 float-right">Voltar</a>
        @endslot
    @endcomponent
@endsection