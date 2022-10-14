<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soberano Painel</title>
</head>
<body>
    <form action="/auth" method="post">
        @csrf
        <input type="text" name="email">
        <input type="password" name="password">
        <button type="submit">enviar</button>
    </form>

    @if ($errors->any())
        <div class="fieldsFail">
            <ul>
                @foreach ($errors->all() as $e)
                    <li>{{$e}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('danger'))
        <div class="authFail">
            <h4>{{session('danger')}}</h4>
        </div>
    @endif
</body>
</html>