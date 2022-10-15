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
            <h2>Tudo o que você precisar!</h2>

            <div class="categorias">
                <div class="categorias">
                    @foreach ($categorias as $c)
                        <div class="categoria" onclick="window.location.href = 'catalogo/{{ $c->name }}'">
                            <img src="src/cat/{{ $c->image }}" alt="item categoria" width="150">
                            <h4>{{ $c->name }}</h4>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section id="call-to-action" class="call1 catalogo">
        <div class="container">
            <h2>Você precisa, <br> Nós suprimos!</h2>

            <a href="/orcamento" class="btn">Solicite um orçamento</a>
        </div>
    </section>
@endsection
