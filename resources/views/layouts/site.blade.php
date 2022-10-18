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
    <link rel="stylesheet" href="/css/glide.core.css">
    <link rel="stylesheet" href="/css/default/default.css">
    <link rel="stylesheet" href="/css/home/home.css">
    <link rel="stylesheet" href="/css/catalog/catalog.css">
    <link rel="stylesheet" href="/css/product/product.css">
    <link rel="stylesheet" href="/css/orcamento/orcamento.css">
</head>

<body>
    <header id="site-header">
        <div class="container">
            <a href="/" class="fixed"><img src="/src/logo-branco.png" alt="Logo Soberano" width="200"></a>
            <a href="/" class="sticky"><img src="/src/logo.png" alt="Logo Soberano" width="200"></a>

            <button class="menu-toggler">
                <span></span>
                <span></span>
                <span></span>
              </button>

            <nav class="site-nav">
                <ul>
                    <li><a href="/home#home" class="link-nav">Home</a></li>
                    <li><a href="/home#sobre" class="link-nav">Quem Somos</a></li>
                    <li><a href="/catalogo" class="link-nav">Catalogo</a></li>
                    <li><a href="/home#contato" class="link-nav">Contato</a></li>
                    <li><a href="/orcamento" class="link-nav">Orçamento</a></li>
                </ul>
            </nav>
        </div>
    </header>

    @yield('content')

    <!--<div id="wpp-flutuante">
        <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
        </a>
    </div>-->

    <section id="site-footer">
        <div class="container">
            <div class="col1">
                <a href="/"><img src="/src/logo-branco.png" alt="Logo Soberano" width="260"></a>
            </div>

            <div class="col2">
                <nav class="site-nav">
                    <h3>Mapa do site</h3>
                    <ul>
                        <li><a href="/home#home" class="link-nav">Home</a></li>
                        <li><a href="/home#sobre" class="link-nav">Quem Somos</a></li>
                        <li><a href="/catalogo" class="link-nav">Catalogo</a></li>
                        <li><a href="/home#contato" class="link-nav">Contato</a></li>
                        <li><a href="/orcamento" class="link-nav">Orçamento</a></li>
                    </ul>
                </nav>
            </div>

            <div class="col3">
                <nav class="site-nav">
                    <ul>
                        <li class="link-nav">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 3v18h24v-18h-24zm6.623 7.929l-4.623 5.712v-9.458l4.623 3.746zm-4.141-5.929h19.035l-9.517 7.713-9.518-7.713zm5.694 7.188l3.824 3.099 3.83-3.104 5.612 6.817h-18.779l5.513-6.812zm9.208-1.264l4.616-3.741v9.348l-4.616-5.607z"/></svg>
                            contato@cdsoberano.com.br
                        </li>
                    </ul>
                </nav>

                <a href="/orcamento" class="btn">Solicite um orçamento!</a>

                <nav class="site-nav">
                    <ul>
                        <li><a href="/home#home" class="link-nav">Políticas de Privacidade</a></li>
                        <li><a href="/home#sobre" class="link-nav">Termos de uso</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>

    <footer id="dev-footer">
        <div class="overlay">
            <div class="container">
                <span class="text">Desenvolvido por <a href="https://www.linkedin.com/in/wallace-zatorski/" class="dev"
                        target="_blank">Wallace Zatorski</a></span>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/app.js"></script>
</body>

</html>
