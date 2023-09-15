<div class="row">
    <div class="form-group col-sm-12 col-md-4">
        <label for="funcionario" class="required">Funcionário</label>
        <input type="text" name="funcionario" id="funcionario" autofocus class="form-control" required value="{{ old('user_id', $appointment->user_id) }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="animal" class="required">Animal</label>
        <input type="text" name="animal" id="animal" class="form-control" required value="{{ old('animal_id', $appointment->animal_id) }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="dataInicio" class="required">Data de Início</label>
        <input type="date" name="dataInicio" id="dataInicio" class="form-control" required value="{{ old('dataInicio', $appointment->dataInicio) }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="dataTermino" class="required">Data de Término</label>
        <input type="date" name="dataTermino" id="dataTermino" class="form-control" required value="{{ old('dataTermino', $appointment->dataTermino) }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="custo" class="required">Preço</label>
        <input type="text" name="custo" id="custo" autofocus class="form-control" placeholder="(99) 99999-9999" required value="{{ old('custo', $appointment->custo) }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="tratamento" class="required">Tratamento</label>
        <input type="text" name="tratamento" id="tratamento" autofocus class="form-control" required value="{{ old('tratamento', $appointment->tratamento) }}">
    </div>
</div>