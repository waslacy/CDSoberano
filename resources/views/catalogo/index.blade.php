@extends('layouts/site')

@section('content')
    <section id="banner">
        <div class="overlay">
            <div class="container">
                <h1>Catalogo</h1>
            </div>
        </div>
    </section>

    <section id="categories">
        <div class="container">
            <h2>Escolha qual categoria de produtos vai desejar</h2>

            <div class="categorias">
                <div class="categorias">
                    @foreach ($categorias as $c)
                        <div class="categoria" onclick="window.location.href = 'catalogo/{{ $c->name }}'">
                            <img src="src/cat/{{ $c->image }}" alt="item categoria" width="150">
                            <h4>{{ $c->name }}</h4>
                        </div>
                    @endforeach
    
                    <div class="categoria" onclick="window.location.href = 'catalogo/bixcoito'">
                        <img src="src/bola.jpg" alt="item categoria" width="150">
                        <h4>Titulo</h4>
                    </div>
    
                    <div class="categoria" onclick="window.location.href = 'catalogo/bixcoito'">
                        <img src="src/bola.jpg" alt="item categoria" width="150">
                        <h4>Titulo</h4>
                    </div>
    
                    <div class="categoria" onclick="window.location.href = 'catalogo/bixcoito'">
                        <img src="src/bola.jpg" alt="item categoria" width="150">
                        <h4>Titulo</h4>
                    </div>
    
    
                    <div class="categoria" onclick="window.location.href = 'catalogo/bixcoito'">
                        <img src="src/bola.jpg" alt="item categoria" width="150">
                        <h4>Titulo</h4>
                    </div>
    
    
                    <div class="categoria" onclick="window.location.href = 'catalogo/bixcoito'">
                        <img src="src/bola.jpg" alt="item categoria" width="150">
                        <h4>Titulo</h4>
                    </div>

                    <div class="categoria" onclick="window.location.href = 'catalogo/bixcoito'">
                        <img src="src/bola.jpg" alt="item categoria" width="150">
                        <h4>Titulo</h4>
                    </div>
    
                    <div class="categoria" onclick="window.location.href = 'catalogo/bixcoito'">
                        <img src="src/bola.jpg" alt="item categoria" width="150">
                        <h4>Titulo</h4>
                    </div>
    
    
                    <div class="categoria" onclick="window.location.href = 'catalogo/bixcoito'">
                        <img src="src/bola.jpg" alt="item categoria" width="150">
                        <h4>Titulo</h4>
                    </div>
    
    
                    <div class="categoria" onclick="window.location.href = 'catalogo/bixcoito'">
                        <img src="src/bola.jpg" alt="item categoria" width="150">
                        <h4>Titulo</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="call-to-action" class="call1 catalogo">
        <div class="container">
            <h2>Você precisa, Nós suprimos!</h2>

            <a href="#" class="btn">Solicite um orçamento</a>
        </div>
    </section>
@endsection
