@extends('layouts.base')

@section('content')
    @component('admin.components.show')
        @slot('title', 'Visualizar Usuário')
        @slot('content')
            @include('admin.users.formulario')
        @endslot
        @slot('back')
            <a href="{{ route('users.index') }}" class="btn btn-warning font-weight-bold m-1 float-right">Voltar</a>
        @endslot
    @endcomponent
@endsection