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

        .cabecalho {
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 6px;
            text-align: center;
        }

        th {
            background-color: #D9EAFE;
        }
    </style>
</head>

<body>
    <h1>Relatório de Consultas</h1>
    <div class="cabecalho">
        <h3>Funcionário: {{ Auth::user()->name }} </h3>
        <h3>Data e Hora de Emissão: {{ now()->setTimezone('America/Sao_Paulo')->format('d/m/Y H:i:s') }}</h3>
    </div>

    @foreach($appointments as $appointment)
    <?php
    // Defina a localização para o português do Brasil
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    
    // Crie um objeto DateTime
    $dataInicio = new DateTime($appointment->dataInicio);
    
    // Formate o nome do mês em português e capitalize a primeira letra
    $nomeMes = ucfirst(strftime('%B', $dataInicio->getTimestamp()));

    // Obtenha o ano
    $ano = $dataInicio->format('Y');
    ?>
    
    <p><strong><?php echo $ano . ' - ' . $nomeMes; ?></strong></p>
    

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
                <td class="text-center">{{ \App\Models\Animal::find($appointment->animal_id)->owner_id }} - {{ \App\Models\owner::find(\App\Models\Animal::find($appointment->animal_id)->owner_id)->nome }}</td>
                <td class="text-center">{{ $appointment->tratamentos }}</td>
                <td class="text-center">{{ $appointment->dataInicio }}</td>
            </tr>
        </tbody>
    </table>
    @endforeach

</body>

</html>