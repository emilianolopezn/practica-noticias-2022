<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias</title>
</head>
<body>

    <h1>Lista de noticias</h1>
    @if(Session::has('exito'))
        <p>{{Session::get('exito')}}</p>
    @endif
    @if(Session::has('error'))
        <p>{{Session::get('error')}}</p>
    @endif

    <a href="{{route('noticias.create')}}">Nueva noticia</a>
    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($noticias as $noticia)
                <tr>
                    <td>{{$noticia->titulo}}</td>
                    <td>{{$noticia->autor}}</td>
                    <td>{{$noticia->fecha}}</td>
                    <td>
                        <a href="{{ route('noticias.edit', $noticia->id) }}">
                            Editar
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>