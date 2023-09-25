@extends('layouts.base')

@section('content')
    <div class="card mt-4">
        <div class="card-header">
            <h5 class="card-title font-weight-bold">Enviar Email aos Proprietários</h5>
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
                    <textarea class="form-control" id="saudacoes" name="saudacoes" style="resize: none" rows="1"></textarea>
                </div>

                <div class="mb-3">
                    <label for="corpo" class="form-label">Mensagem</label>
                    <textarea class="form-control" id="corpo" name="corpo" style="resize: none" rows="7"></textarea>
                </div>

                <div class="mb-3">
                    <label for="agradecimentos" class="form-label">Agradecimentos</label>
                    <textarea class="form-control" id="agradecimentos" name="agradecimentos" style="resize: none" rows="1"></textarea>
                </div>

                <div class="card-footer d-flex justify-content-end">
                    <button type="submit" class="btn btn-warning mr-2 font-weight-bold">Enviar</button>
                    <a href="{{ route('home') }}" class="btn btn-warning font-weight-bold">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection