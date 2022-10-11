<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/admin/admin.css">
</head>

<body>
    <section id="products">
        <div class="container">
            <div class="header">
                <div class="buttons">
                    <a class="btn" href="/admin">Voltar</a>
                    <a class="btn" href="/admin/edit/{{$cat}}">Editar</a>
                    <a class="btn" href="/admin/remove/{{$cat}}">Excluir</a>
                </div>
                <h1>{{ $categoryName }}</h1>
            </div>

            <div class="products">
                @foreach ($produtos as $p)
                    <a href="/admin/{{$cat}}/edit/{{$p->id}}" class="product">
                        <img src="/src/prod/{{$p->image}}" alt="produto imagem" width="150">
                        <h3>{{$p->name}}</h3>
                    </a>
                @endforeach

                <a href="/admin/{{$cat}}/edit/novo" class="product">
                    <img src="/src/add.png" alt="produto imagem" width="100">
                    <h3>Novo</h3>
                </a>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/app.js"></script>
</body>

</html>