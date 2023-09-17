<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Consultas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            margin-bottom: 48px;
        }

        h2 {
            margin-top: 20px;
        }

        h3 {
            text-decoration: none;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Relatório de Consultas</h1>
    <h3>Funcionario: {{ Auth::user()->name }}  </h3>
    <h3>Data e Hora de Emissão: {{ now()->format('d/m/Y H:i:s') }} </h3>

    @foreach($appointments as $appointment)
        <h2>Mês: {{ (new DateTime($appointment->dataInicio))->format('F') }} </h2>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">Animal</th>
                <th scope="col">Proprietário</th>
                <th scope="col">Tratamento</th>
                <th scope="col">Data e hora da Consulta</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                <td>{{ $appointment->animal_id}} - {{\App\Models\Animal::find($appointment->animal_id)->nome }}</td>
                <td>{{ $appointment->animal->owner->nome }}</td>
                <td>{{ $appointment->tratamentos }}</td>
                <td>{{ $appointment->dataInicio }}</td>
                </tr>
            </tbody>
        </table>
    @endforeach

</body>
</html>