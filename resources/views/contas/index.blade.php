<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Godin</title>
</head>
    <body>

        <h2>Menu de Contas</h2>

           
            <a href='/'>Páginal inicial</a>  
            <br><br>  

            <a href="{{ route('contas.create') }}">Cadastrar conta à pagar</a>
            <br><br>

            <a href="{{ route('contas.show') }}">Visulizar contas pagas</a>
            <br><br>

            <a href="{{ route('contas.edit') }}">Editar</a>
            <br><br>
            
             {{--<a href="{{ route('contas.destroy') }}">Apagar</a><br>--}}
             
        

    </body>
</html>