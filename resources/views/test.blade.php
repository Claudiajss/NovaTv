<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body>
    {{--<h1>
        @if ($day == 'saturday')
        es sabado!!
        @elseif ($day == 'sunday')
        es domingo
        @else
            no estamos en fin de semana
        @endif--}}

        {{--<h1>
        @switch($day)
            @case('saturday')
                es sabado
                @break

            @case('sunday')
                es domingo
                @break
               
            @default
            no estamos en fin de semana
                
        @endswitch
       
    </h1>--}}

    <table class='table'>
        <thead>
            <tr>
            <td>Id</td>
            <td>Nombre Completo</td>
            <td>correo</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
            <tr>
            <th>{{$user->id}}</th>
            <th>{{$user->fullname}}</th>
            <th>{{$user->email}}</th>
            </tr>
            @endforeach
        </tbody>
                  
    </table>
</body>
</html>