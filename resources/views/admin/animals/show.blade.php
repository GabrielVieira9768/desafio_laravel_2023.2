@extends('layouts.base')

@section('content')
    @component('admin.components.show')
        @slot('title', 'Visualizar Animal')
        @slot('content')
            @include('admin.animals.formulario')
            <div class="form-group">
                <label>Tratamentos Realizados:</label>
                @foreach ($appointments as $appointment)
                    @if($animal->id === $appointment->animal_id)
                        <p>{{ $appointment->tratamentos }}</p>
                    @endif
                @endforeach
            </div>
        @endslot
        @slot('back')
            <a href="{{ route('animals.index') }}" class="btn btn-warning font-weight-bold m-1 float-right">Voltar</a>
        @endslot
    @endcomponent
@endsection