@extends('layouts.base')

@section('content')
    @component('admin.components.index')
        @slot('create', route('users.create'))
        @slot('titulo', 'Gerenciamento de Usuários')
        @slot('head')
            <th class="text-center">Nome</th>
            <th class="text-center">Email</th>
            <th class="text-center">Opções</th>
        @endslot
        @slot('body')
            @foreach ($users as $user)
                <tr>
                    <td class="text-center">{{ $user->name }}</td>
                    <td class="text-center">{{ $user->email }}</td>
                    <td class="options d-flex justify-content-center gap-1">
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-warning font-weight-bold m-1">
                            <i class="fas fa-user"></i>
                        </a>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning font-weight-bold m-1"><i class="fas fa-pen"></i></a>  
                        <form class="form-delete d-inline-block" action="{{ route('users.destroy', $user->id) }}" method="post">
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