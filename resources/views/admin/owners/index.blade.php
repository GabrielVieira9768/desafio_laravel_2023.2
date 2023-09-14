@extends('layouts.base')

@section('content')
    @component('admin.components.index')
        @slot('create', route('owners.create'))
        @slot('titulo', 'Gerenciamento de Proprietários')
        @slot('head')
            <th class="text-center">Nome</th>
            <th class="text-center">Email</th>
            <th class="text-center">Opções</th>
        @endslot
        @slot('body')
            @foreach ($owners as $owner)
                <tr>
                    <td class="text-center">{{ $owner->name }}</td>
                    <td class="text-center">{{ $owner->email }}</td>
                    <td class="options d-flex justify-content-center gap-1">
                        <a href="{{ route('owners.show', $owner->id) }}" class="btn btn-warning font-weight-bold m-1">
                            <i class="fas fa-search"></i>
                        </a>
                        <a href="{{ route('owners.edit', $owner->id) }}" class="btn btn-warning font-weight-bold m-1"><i class="fas fa-pen"></i></a>  
                        <form class="form-delete d-inline-block" action="{{ route('owners.destroy', $owner->id) }}" method="post">
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