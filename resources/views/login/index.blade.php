<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soberano Painel</title>
    <link rel="stylesheet" href="css/login/login.css">
</head>
<body>
    <form action="/auth" method="post" class="login">
        <h1>Login</h1>
        @csrf
        <label for="email">E-mail</label>
        <input type="text" placeholder="E-mail" name="email">
        <label for="password">Senha</label>
        <input type="password" placeholder="Senha" name="password">
        <button type="submit">enviar</button>

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
    </form>
</body>
</html>