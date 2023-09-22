<div class="row">
    <div class="form-group col-sm-12 col-md-4">
        <label for="nome" class="required">Nome </label>
        <input type="text" name="nome" id="nome" autofocus class="form-control" required value="{{ old('nome', $owner->nome) }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="email" class="required">Email</label>
        <input type="email" name="email" id="email" class="form-control" required value="{{ old('email', $owner->email) }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="cpf" class="required">CPF</label>
        <input type="text" name="cpf" id="cpf" class="form-control" placeholder="" required value="{{ old('cpf', $owner->cpf) }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="dataNascimento" class="required">Data de Nascimento</label>
        <input type="date" name="dataNascimento" id="dataNascimento" class="form-control" required value="{{ old('dataNascimento', $owner->dataNascimento) }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="telefone" class="required">Telefone</label>
        <input type="text" name="telefone" id="telefone" autofocus class="form-control" placeholder="(99) 99999-9999" required value="{{ old('telefone', $owner->telefone) }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="endereco" class="required">Endereço</label>
        <input type="text" name="endereco" id="endereco" autofocus class="form-control" required value="{{ old('endereco', $owner->endereco) }}">
    </div>
    <div class="form-group text-center">
        <label for="fotoPerfil">Foto de Perfil</label>
        @if($owner->fotoPerfil === null){
            <input type="file" name="fotoPerfil" id="fotoPerfil" class="form-control-file">
        }@else{
            <img src="{{ asset(storage/app/public/{{ $owner->fotoPerfil }}) }}" class="img-thumbnail" height="auto" width="150px">
        }
    </div>
</div>