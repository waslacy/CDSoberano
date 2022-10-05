<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soberano</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/default/default.css">
    <link rel="stylesheet" href="css/home/home.css">
    <link rel="stylesheet" href="css/catalog/catalog.css">
    <link rel="stylesheet" href="css/product/product.css">
    <link rel="stylesheet" href="css/contato/contato.css">
</head>

<body>
    <header id="site-header">
        <div class="container">
            <img src="src/logo.jpeg" alt="Logo Soberano" width="150">

            <nav class="site-nav">
                <ul>
                    <li><a href="#">menu1</a></li>
                    <li><a href="#">menu2</a></li>
                </ul>
            </nav>
        </div>
    </header>

    @yield('content')

    <section id="site-footer">
        <div class="container">
            <div class="col1">
                <img src="src/logo.jpeg" alt="Logo Soberano" width="150">
            </div>

            <div class="col2">
                <nav class="site-nav">
                    <h3>Mapa do site</h3>
                    <ul>
                        <li><a href="#">menu1</a></li>
                        <li><a href="#">menu2</a></li>
                        <li><a href="#">menu2</a></li>
                    </ul>
                </nav>
            </div>

            <div class="col3">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos numquam voluptas porro, modi quos quis
                    atque at ab ipsam culpa, quae cupiditate! Maxime blanditiis doloribus delectus quo quis, minima
                    neque.
                </p>

                <a href="#orcamento" class="btn">Solicite um orçamento!</a>
            </div>
        </div>
    </section>

    <footer id="dev-footer">
        <div class="container">
            <span class="text">Desenvolvido por <a href="https://www.linkedin.com/in/wallace-zatorski/" class="dev"
                    target="_blank">Wallace Zatorski</a></span>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/app.js"></script>
</body>

</html>
