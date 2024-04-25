<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Godin</title>
</head>
<body>

    <a href="{{ route('contas.index') }}">
        <button type="button">Listar</button><br>
    </a><br>

    <a href="{{ route('contas.edit', ['conta' => $conta->id]) }}">
        <button type="button">Editar</button>
    </a> <br>
   
    
    <h2>Detalhes da Conta</h2>

    {{-- Verificar se existe a sessão "sucess" e imprimir o valor --}} 
    @if(session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>
    @endif

    ID: {{ $conta->id }} <br>
    Nome: {{ $conta->id }} <br>
    Valor:{{ 'R$' .number_format($conta->valor, 2,',','.') }}<br>
    Vencimento:{{ \Carbon\Carbon::parse($conta->vencimento)->tz('America/Sao_Paulo')->format('d/m/y') }}<br>
    Cadastrado: {{ \Carbon\Carbon::parse($conta->created_at)->tz('America/Sao_Paulo')->format('d/m/y H:i:s') }}<br>
    Editado: {{ \Carbon\Carbon::parse($conta->updated_at)->tz('America/Sao_Paulo')->format('d/m/y  H:i:s') }}<br>


</body>
</html>