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
    <section id="product-edit">
        <div class="container">
            <div class="header">
                <div class="buttons">
                    <a href="/admin" class="btn">Voltar</a>
                    @if ($prod != 'novo')
                        <a href="/admin/{{$cat}}/remove/{{$prod}}" class="btn delete">Excluir</a>
                    @endif
                </div>
                <h1>{{($prod == 'novo') ? 'Novo Produto' : $produto->name}}</h1>
            </div>

            <form action="/admin/{{$cat}}/edit/{{$prod}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input type="text" name="name" id="name" placeholder="Nome" required @if ($prod != 'novo') value="{{$produto->name}}" @endif>
                </div>

                <div class="form-group">
                    <label for="tipo">Tipo:</label>
                    <input type="text" name="tipo" id="tipo" placeholder="Tipo" required @if ($prod != 'novo') value="{{$produto->tipo}}" @endif>
                </div>

                <div class="form-group">
                    <label for="marca">Marca:</label>
                    <input type="text" name="marca" id="marca" placeholder="Marca" required @if ($prod != 'novo') value="{{$produto->marca}}" @endif>
                </div>

                <div class="form-group">
                    <label for="description">Descrição:</label>
                    <textarea type="text" name="description" id="description" placeholder="Descrição" required @if ($prod != 'novo') value="{{$produto->description}}" @endif></textarea>
                </div>

                <div class="form-group">
                    <label for="image">Imagem</label>
                    <input type="file" name="image" accept="image/png, image/jpeg, image/jpg" required/>
                </div>

                <div class="form-group">
                    <button type="submit">{{($prod == 'novo') ? 'Criar' : 'Atualizar'}}</button>
                </div>
            </form>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/app.js"></script>
</body>

</html>