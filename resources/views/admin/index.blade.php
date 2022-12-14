<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/admin/admin.css">
</head>

<body>
    <section id="categories">
        <div class="container">
            <div class="header">
                <a href="/" class="btn">Sair</a>
                <h1>Categorias</h1>
            </div>

            <div class="categories">
                @foreach ($categorias as $c)
                    <a href="/admin/{{ $c->id }}" class="category">
                        <h3>{{ $c->name }} <i class="fa-solid fa-chevron-right"></i></h3>
                    </a>
                @endforeach
                
                @if ($categorias == '[]')
                    <h3 style="color: #f00">Não há categorias cadastradas no momento</h3>
                @endif
            </div>

            <div class="new">
                <a href="/admin/edit/novo" class="category">
                    <h3>Nova categoria <i class="fa-solid fa-plus"></i></h3>
                </a>
            </div>
        </div>
    </section>

    <section id="testimonials">
        <div class="container">
            <h1>Depoimentos</h1>

            <div class="testimonials">
                @foreach ($depoimentos as $d)
                    <a href="/admin/testimonial/{{ $d->id }}" class="testimonial">
                        <h3>{{ $d->name }} <i class="fa-solid fa-chevron-right"></i></h3>
                    </a>
                @endforeach
                
                @if ($depoimentos == '[]')
                    <h3 style="color: #f00">Não há depoimentos cadastrados no momento</h3>
                @endif
            </div>

            <div class="new">
                <a href="/admin/testimonial/novo" class="testimonial">
                    <h3>Novo Depoimento <i class="fa-solid fa-plus"></i></h3>
                </a>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/app.js"></script>
</body>

</html>
