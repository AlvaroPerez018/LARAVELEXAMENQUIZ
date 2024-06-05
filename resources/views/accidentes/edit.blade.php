<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
</head>
<body>
    <form action="{{route('accidente.update', $accidente)}}" method="POST">

        @csrf
        @method('put')
        <label>
            Hora:
            <br>
            <input name="hora" type="time" value="{{old('hora', $accidente->hora) }}">
            <br>
        </label>
        <br>
        <label>
            Codigo
            <br>
            <input name="codigo" type="text" value="{{old('codigo', $accidente->codigo) }}">
            <br>
        </label>
        <br>

        <label>
            fecha
            <br>
            <input name="fecha" type="date" value="{{old('fecha', $accidente->fecha) }}">
            <br>
        </label>
        <br>
        <label>
            Lugar
            <br>
            <input name="lugar" type="text" value="{{old('lugar', $accidente->lugar) }}">

            <button type="submit">Actualizar Datos</button>

</body>
</html>

