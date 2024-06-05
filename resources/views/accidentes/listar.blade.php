<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Listar</h1>

    @foreach ($accidentes as $accidente)
    <tr>
        <br>
        <td>{{$accidente->hora}}</td>
        <br>
        <td>{{$accidente->codigo}}</td>
        <br>
        <td>{{$accidente->fecha}}</td>
        <br>
        <td>{{$accidente->lugar}}</td>
        <br>
        <td><a href="{{route('accidente.show', $accidente->id)}}">Mostrar</a></td>
        <td><a href="{{route('accidente.edit', $accidente->id)}}">Editar</a></td>

        <td>
            <form action="{{route('accidente.destroy', $accidente->id)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit">Eliminar</button>
            </form>

            @endforeach


</body>
</html>
