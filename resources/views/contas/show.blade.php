<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Godin</title>
</head>
<body>

    <a href="{{ route('contas.index') }}">Listar</a><br>
    
    <h2>Detalhes da Conta</h2>

    {{-- Verificar se existe a sessão "sucess" e imprimir o valor --}} 
    @if(session('success'))
        <span style="color: green;">
            {{ session('success') }}
        </span>
    @endif

</body>
</html>