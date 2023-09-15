<div class="row">
    <div class="form-group col-sm-12 col-md-4">
        <label for="name" class="required">Nome </label>
        <input type="text" name="name" id="name" autofocus class="form-control" required value="{{ old('name', $user->name) }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="email" class="required">Email </label>
        <input type="email" name="email" id="email" class="form-control" required value="{{ old('email', $user->email) }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="password" class="required">Senha </label>
        <input type="password" name="password" id="password" class="form-control" required>
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="dataNascimento" class="required">Data de Nascimento </label>
        <input type="date" name="dataNascimento" id="dataNascimento" class="form-control" required value="{{ old('dataNascimento', $user->dataNascimento) }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="telefone" class="required">Telefone </label>
        <input type="text" name="telefone" id="telefone" autofocus class="form-control" placeholder="(99) 99999-9999" required value="{{ old('telefone', $user->telefone) }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="endereco" class="required">Endereço </label>
        <input type="text" name="endereco" id="endereco" autofocus class="form-control" required value="{{ old('endereco', $user->endereco) }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="periodoTrabalho" class="required">Período de trabalho </label>
        <input type="text" name="periodoTrabalho" id="periodoTrabalho" class="form-control" required value="{{ old('periodoTrabalho', $user->periodoTrabalho) }}">
    </div>
</div>