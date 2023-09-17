@extends('layouts.base')

@section('content')
    @component('admin.components.index')
        @slot('create', route('animals.create'))
        @slot('titulo', 'Gerenciamento de Animais')
        @slot('head')
            <th class="text-center">Animal</th>
            <th class="text-center">Proprietário</th>
            <th class="text-center">Opções</th>
        @endslot
        @slot('body')
            @foreach ($animals as $animal)
                <tr>
                    <td class="text-center">{{ $animal->nome }}</td>
                    <td class="text-center">{{ $animal->owner_id}} - {{\App\Models\Owner::find($animal->owner_id)->nome }}</td>
                    <td class="options d-flex justify-content-center gap-1">
                        <a href="{{ route('animals.show', $animal->id) }}" class="btn btn-warning font-weight-bold m-1">
                            <i class="fas fa-user"></i>
                        </a>
                        <a href="{{ route('animals.edit', $animal->id) }}" class="btn btn-warning font-weight-bold m-1"><i class="fas fa-pen"></i></a>  
                        <form class="form-delete d-inline-block" action="{{ route('animals.destroy', $animal->id) }}" method="post">
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