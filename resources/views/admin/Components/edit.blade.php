<div class="col-md-10 offset-md-1 col-12 mt-4">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title title-form font-weight-bold">{{ $title ?? null }} </h3>
        </div>
        <div class="card-body">
            <form id="form-adicionar" action="{{ $url ?? '/' }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                {{ $form ?? null }}
            </form>
        </div>
        <div class="card-footer">
            <button type="submit" form="form-adicionar" class="btn btn-warning font-weight-bold m-1 float-right">Confirmar</button>
            <a href="{{ route('users.index') }}" class="btn btn-warning font-weight-bold m-1 float-right">Cancelar</a>
        </div>
    </div>
</div>