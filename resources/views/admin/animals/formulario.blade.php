<div class="row">
    <div class="form-group col-sm-12 col-md-4">
        <label for="nome" class="required">Nome</label>
        <input type="text" name="nome" id="nome" autofocus class="form-control" required value="{{ old('nome', $animal->nome) }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="proprietario" class="required">Proprietário</label>
        <select class="form-control form-select form-select-sm" name="owner_id" id="owner_id" value="{{old('owner_id', $pet->owner->id ?? null )}}">
            <option value="" hidden>Selecione aqui</option>
            @foreach($owners as $owner)
                <option value="{{$owner->id}}">{{$owner->id}} - {{$owner->nome}}</option>
            @endforeach
        </select>    
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="especie" class="required">Espécie</label>
        <input type="text" name="especie" id="especie" class="form-control" required value="{{ old('especie', $animal->especie) }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="dataNascimento" class="required">Data de Nascimento</label>
        <input type="date" name="dataNascimento" id="dataNascimento" class="form-control" required value="{{ old('dataNascimento', $animal->dataNascimento) }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="raca" class="required">Raça</label>
        <input type="text" name="raca" id="raca" class="form-control" required value="{{ old('raca', $animal->raca) }}">
    </div>
</div>