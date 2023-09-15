@extends('layouts.base')

@section('content')
    @component('admin.components.index')
        @slot('create', route('appointments.create'))
        @slot('titulo', 'Gerenciamento de Consultas')
        @slot('head')
            <th class="text-center">Funcionário</th>
            <th class="text-center">Animal</th>
            <th class="text-center">Opções</th>
        @endslot
        @slot('body')
            @foreach ($appointments as $appointment)
                <tr>
                    <td class="text-center">{{ $appointment->user_id }}</td>
                    <td class="text-center">{{ $appointment->animal_id }}</td>
                    <td class="options d-flex justify-content-center gap-1">
                        <a href="{{ route('appointments.show', $appointment->id) }}" class="btn btn-warning font-weight-bold m-1">
                            <i class="fas fa-user"></i>
                        </a>
                        <a href="{{ route('appointments.edit', $appointment->id) }}" class="btn btn-warning font-weight-bold m-1"><i class="fas fa-pen"></i></a>  
                        <form class="form-delete d-inline-block" action="{{ route('appointments.destroy', $appointment->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-warning font-weight-bold m-1"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endslot
    @endcomponent
@endsection