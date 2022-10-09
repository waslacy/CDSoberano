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
                    <a class="btn">Excluir</a>
                </div>
                <h1>{{ $cat }}</h1>
            </div>

            <div class="products">
                <a href="/admin/{{$cat}}/edit/opa" class="product">
                    <img src="/src/bola.jpg" alt="produto imagem" width="150">
                    <h3>Nome</h3>
                </a>

                <a href="/admin/{{$cat}}/edit/opa" class="product">
                    <img src="/src/bola.jpg" alt="produto imagem" width="150">
                    <h3>Nome</h3>
                </a>

                <a href="/admin/{{$cat}}/edit/opa" class="product">
                    <img src="/src/bola.jpg" alt="produto imagem" width="150">
                    <h3>Nome</h3>
                </a>

                <a href="/admin/{{$cat}}/edit/opa" class="product">
                    <img src="/src/bola.jpg" alt="produto imagem" width="150">
                    <h3>Nome</h3>
                </a>

                <a href="/admin/{{$cat}}/edit/opa" class="product">
                    <img src="/src/bola.jpg" alt="produto imagem" width="150">
                    <h3>Nome</h3>
                </a>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/app.js"></script>
</body>

</html>