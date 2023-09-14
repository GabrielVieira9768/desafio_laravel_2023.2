@extends('layouts.base')

@section('content')
    @component('admin.components.index')
        @slot('create', route('users.create'))
        @slot('titulo', 'Gerenciamento de Usuários')
        @slot('head')
            <th>Nome</th>
            <th>Email</th>
            <th>Opções</th>
        @endslot
        @slot('body')
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td class="options d-flex justify-content-center gap-1">
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-dark">
                            <i class="fas fa-search"></i>
                        </a>

                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-dark"><i class="fas fa-pen"></i></a>
    
                        
                        <form class="form-delete d-inline-block" action="{{ route('users.destroy', $user->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-dark"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endslot
    @endcomponent
@endsection