@extends('layouts/site')

@section('content')
    <section id="banner">
        <div class="overlay">
            <div class="container">
                <h1>{{ $cat }}</h1>
            </div>
        </div>
    </section>

    <section id="filtro">
        <div class="container">
            <div class="form-group form1">
                <label for="product-title">Pesquisar por nome</label>
                <input type="text" name="product-title" id="product-title" placeholder="buscar...">
            </div>

            <div class="form-group form2">
                <label for="marca">Marca</label>
                <select name="marca" id="marca">
                    <option value="bola">Bola</option>
                    <option value="bola">Bola</option>
                    <option value="bola">Bola</option>
                    <option value="bola">Bola</option>
                </select>
            </div>

            <div class="form-group form3">
                <label for="tipo">Tipo</label>
                <select name="tipo" id="tipo">
                    <option value="bola">Bola</option>
                    <option value="bola">Bola</option>
                    <option value="bola">Bola</option>
                    <option value="bola">Bola</option>
                </select>
            </div>

            <div class="form-group form4">
                <button>Filtrar</button>
            </div>
        </div>
    </section>

    <section id="produtos">
        <div class="container">
            @foreach ($produtos as $p)
                <div class="produto">
                    <div class="left-column">
                        <img src="/src/prod/{{$p->image}}" alt="Foto produto" width="150">
                    </div>

                    <div class="right-column">
                        <div class="title-span">
                            <h3>{{$p->name}}</h3>
                            <div class="spans">
                                <span class="brown">Tipo: {{$p->tipo}}</span>
                                <span class="blue">Marca: {{$p->marca}}</span>
                            </div>
                        </div>
                        <p>{{$p->description}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section id="call-to-action" class="call1 catalogo">
        <div class="container">
            <h2>Você precisa, Nós suprimos!</h2>

            <a href="#" class="btn">Solicite um orçamento</a>
        </div>
    </section>
@endsection
