<div class="row">
    <div class="form-group col-sm-12 col-md-4">
        <label for="nome" class="required">Nome</label>
        <input type="text" name="nome" id="nome" autofocus class="form-control" required value="{{ old('nome', $owner->nome) }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="proprietario" class="required">Proprietário</label>
        <input type="text" name="proprietario" id="proprietario" autofocus class="form-control" required value="{{ old('owner_id', $animal->owner_id) }}">
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
        <input type="date" name="raca" id="raca" class="form-control" required value="{{ old('raca', $animal->raca) }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="tratamentos" class="required">Tratamentos</label>
        <input type="text" name="tratamentos" id="tratamentos" autofocus class="form-control" required value="{{ old('tratamentos', $animal->tratamentos) }}">
    </div>
</div>