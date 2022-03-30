<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {{ $username }}

    <!--exemplo de validadores no blade-->
        @if(1 == 1)
        <p>deu certo</p>
    @else
        <p>deu ruim</p>
    @endif

    <!--exemplo de loops no blade-->
    @foreach($args as $arg)
        {{$arg}}
    @endforeach

    @if($username === "JULIANO")
        <h1>O homi é brabo</h1>
    @elseif($username === "PAULO")
        <h1>O sobrenome do brabo</h1>
    @else
        <h1>O {{ $username }} também é brabo</h1>
    @endif

    <!--Funciona como um else-->
    @unless($username === "JULIANO")
        teste
    @endunless

    @isset($username)
        <h3>Username existente</h3>
    @endisset

    @empty($args['b'])
        <h3>Argumento inexistente</h3>
    @endempty

</body>
</html>