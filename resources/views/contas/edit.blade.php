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

    <a href="{{ route('contas.show', ['conta' => $conta->id]) }}">
        <button type="button">Vizualizar</button>
    </a><br>
    
    <h2>Editar a Conta</h2>

    @if ($errors->any())
        <span style="color: red">
            
            @foreach ($errors->all() as $error) <br>
                {{ $error }} 
            @endforeach
        </span>
            <br><br>
    @endif

    <form action="{{ route('contas.update', ['conta' => $conta->id]) }}" 
        method="POST">
        @csrf
        @method('PUT')

        <label> Nome: </label>
            <input  type="text" 
                    name="nome" id="nome" 
                    placeholder="Tipo de conta"
                    value="{{ old('nome', $conta->nome) }}">
        <br><br>


        <label> Valor: </label>
            <input  type="text" 
                    name="valor" 
                    id="valor" placeholder="R$00.00" 
                    value="{{ old('valor', $conta->valor) }}" >
        <br><br>


        <label> Vencimento: </label>
            <input  type="date" 
                    name="vencimento" 
                    id="nome"value="{{ old('vencimento', $conta->vencimento) }}">
        <br><br>


        <button type="submit">Salvar</button>

    </form>

</body>
</html>