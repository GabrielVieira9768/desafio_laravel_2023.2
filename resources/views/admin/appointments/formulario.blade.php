<div class="row">
    <div class="form-group col-sm-12 col-md-4">
        <label for="user_id">Funcionario</label>
        <select class="form-control form-select form-select-sm" name="user_id" id="user_id" value="{{old('user_id', $appointment->user->id ?? null )}}">
            <option value="" hidden>Selecione aqui</option>
            @foreach ($users as $user)
                <option value="{{ $user->id }}"> {{ $user->id }} - {{ $user->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="animal_id">Animal</label>
        <select class="form-control form-select form-select-sm" name="animal_id" id="animal_id" value="{{old('animal_id', $consultation->animal->id ?? null )}}">
            <option value="" hidden>Selecione um animal</option>
            @foreach ($animals as $animal)
                <option value="{{ $animal->id }}"> {{ $animal->name }}</option>
            @endforeach
        </select>
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
        <label for="tratamentos" class="required">Tratamento</label>
        <input type="text" name="tratamentos" id="tratamentos" autofocus class="form-control" required value="{{ old('tratamentos', $appointment->tratamentos) }}">
    </div>
</div>