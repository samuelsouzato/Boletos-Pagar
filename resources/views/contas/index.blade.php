<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Godin</title>
</head>
    <body>

        <a href='/'>
            <button type="button">Página inicial</button>
        </a>  
        <br><br>        

        <a href="{{ route('contas.create') }}">
            <button type="button">Cadastrar</button>
        </a><br>
        
        <h2>Listar as Contas</h2>

        {{-- Verificar se existe a sessão "success e imprimir o valor --}}
        @if(session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>
    @endif

        @forelse ($contas as $conta)

             ID: {{ $conta->id }}<br>
             Nome:{{ $conta->nome }}<br>
             Valor:{{ 'R$' .number_format($conta->valor, 2,',','.') }}<br>
             Vencimento:{{ \Carbon\Carbon::parse($conta->vencimento)->tz('America/Sao_Paulo')->format('d/m/y') }}<br><br>

             <a href="{{ route('contas.show', ['conta' => $conta->id]) }}">
                <button type="button">Visualizar</button>
             </a><br><br>

             <a href="{{ route('contas.edit', ['conta' => $conta->id]) }}">
                <button type="button">Editar</button>
            </a><br><br>
            
                <form action="{{ route('contas.destroy', ['conta' => $conta->id]) }}
                    "method="POST">
                    @csrf
                    @method('delete')

                    <button type="submit" 
                            onclick="return 
                            confirm('Tem certeza que deseja apagar esta conta?')">Apagar</button>
                    <br><br>


                </form>

            <hr>

        @empty

            <span style="color: red">Nenhuma conta encontrada!!</span>

        @endforelse
        

    </body>
</html>