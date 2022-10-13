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
                    @if ($testi != 'novo')
                        <a href="/admin/testimonial/remove/{{$testi}}" class="btn delete">Excluir</a>
                    @endif
                </div>
                <h1>{{($testi == 'novo') ? 'Novo Depoimento' : $testimonial->name}}</h1>
            </div>

            <form action="/admin/testimonial/{{$testi}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input type="text" name="name" id="name" placeholder="Nome" required @if ($testi != 'novo') value="{{$testimonial->name}}" @endif>
                </div>

                <div class="form-group">
                    <label for="sigla">Sigla:</label>
                    <input type="text" name="sigla" id="sigla" placeholder="Sigla" required @if ($testi != 'novo') value="{{$testimonial->sigla}}" @endif>
                </div>

                <div class="form-group">
                    <label for="empresa">Empresa:</label>
                    <input type="text" name="empresa" id="empresa" placeholder="Empresa" required @if ($testi != 'novo') value="{{$testimonial->empresa}}" @endif>
                </div>

                <div class="form-group">
                    <label for="depoimento">Depoimento:</label>
                    <textarea type="text" name="depoimento" rows="4" id="depoimento" placeholder="Depoimento" required>@if($testi != 'novo'){{$testimonial->depoimento}}@endif</textarea>
                </div>

                <div class="form-group">
                    <button type="submit">{{($testi == 'novo') ? 'Criar' : 'Atualizar'}}</button>
                </div>
            </form>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/app.js"></script>
</body>

</html>