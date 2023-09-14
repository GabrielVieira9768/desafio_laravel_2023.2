@extends('layouts.base')

@section('content')

    @component('admin.components.edit')
        @slot('title', 'Editar Proprietário')
        @slot('url', route('owners.update', $owner->id))
        @slot('form')
            @include('admin.owners.formulario')
        @endslot
    @endcomponent

@endsection