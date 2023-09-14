@extends('layouts.base')

@section('content')

    @component('admin.components.edit')
        @slot('title', 'Editar Usuário')
        @slot('url', route('users.update', $user->id))
        @slot('form')
            @include('admin.users.formulario')
        @endslot
    @endcomponent

@endsection