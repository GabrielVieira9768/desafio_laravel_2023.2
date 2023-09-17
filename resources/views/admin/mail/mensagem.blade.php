@extends('layouts.base')

@section('content')
    <div class="card mt-4">
        <div class="card-header">
            <h5 class="card-title">Enviar Email aos Proprietários</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('email.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="assunto" class="form-label">Assunto</label>
                    <input type="text" class="form-control" id="assunto" name="assunto">
                </div>
                
                <div class="mb-3">
                    <label for="saudacoes" class="form-label">Saudações</label>
                    <textarea class="form-control" id="saudacoes" name="saudacoes" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="corpo" class="form-label">Corpo</label>
                    <textarea class="form-control" id="corpo" name="corpo" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="agradecimentos" class="form-label">Agradecimentos</label>
                    <textarea class="form-control" id="agradecimentos" name="agradecimentos" rows="3"></textarea>
                </div>

                <div class="card-footer d-flex justify-content-end">
                    <button type="submit" class="btn btn-warning mr-2">Enviar</button>
                    <a href="{{ route('home') }}" class="btn btn-warning">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection