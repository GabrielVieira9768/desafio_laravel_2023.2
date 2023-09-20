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
                <th scope="col" class="text-center">Animal</th>
                <th scope="col" class="text-center">Proprietário</th>
                <th scope="col" class="text-center">Tratamento</th>
                <th scope="col" class="text-center">Data e hora da Consulta</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                <td class="text-center">{{ $appointment->animal_id}} - {{\App\Models\Animal::find($appointment->animal_id)->nome }}</td>
                <td class="text-center">{{ \App\Models\owner::find(\App\Models\Animal::find($appointment->animal_id)->owner_id)->nome }}</td>
                <td class="text-center">{{ $appointment->tratamentos }}</td>
                <td class="text-center">{{ $appointment->dataInicio }}</td>
                </tr>
            </tbody>
        </table>
    @endforeach

</body>
</html>