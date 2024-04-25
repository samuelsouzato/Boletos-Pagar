<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Godin</title>
</head>
<body>

    <a href="{{ route('contas.index') }}">
        <button type="button">Listar</button>
    </a><br>
    
    <h2>Cadastrar Conta</h2>

    @if ($errors->any())
        <span style="color: red">
            
            @foreach ($errors->all() as $error) <br>
                {{ $error }} 
            @endforeach
        </span>
            <br><br>
    @endif
    

    <form action="{{ route('contas.store') }}" method="POST">
        @csrf

        <label> Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="Tipo de conta" value="{{ old('nome') }}">
        <br><br>

        <label> Valor: </label>
        <input type="text" name="valor" id="valor" placeholder="R$00.00" value="{{ old('valor') }}" >
        <br><br>

        <label> Vencimento: </label>
        <input type="date" name="vencimento" id="nome"value="{{ old('vencimento') }}">
        <br><br>

        <button type="submit">Cadastrar</button>

        



    </form>



</body>
</html>