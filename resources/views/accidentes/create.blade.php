<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro Accidente</title>
</head>
<body>
    <h1>Crear Registro</h1>

    <form action="{{route('accidentes.store')}}" method="POST" enctype="multipart/form-data">

        @csrf


        <label for="hora">Hora:</label><br>
        <input type="time" id="hora" name="hora"><br>

        <label for="lugar">Lugar:</label><br>
        <input type="text" id="lugar" name="lugar"><br>

        <label for="codigo">Codigo:</label><br>
        <input type="text" id="codigo" name="codigo"><br>

        <label for="fecha">Fecha:</label><br>
        <input type="date" id="fecha" name="fecha"><br>

        <select name="persona_id">
            @foreach ($personas as $persona)
                <option value="{{$persona->id}}">{{$persona->id}}-{{$persona->nombre}}</option>
            @endforeach
        </select>

        <input type="submit" value="Crear Formulario">
    </form>




</body>
</html>
