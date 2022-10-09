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
            <div class="produto">
                <div class="left-column">
                    <img src="/src/bola.jpg" alt="Foto produto" width="150">
                </div>

                <div class="right-column">
                    <div class="title-span">
                        <h3>Titulo Produto</h3>
                        <div class="spans">
                            <span class="brown">Tipo: bola</span>
                            <span class="blue">Marca: bola</span>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo blanditiis molestias quas
                        quia nihil velit autem pariatur aspernatur dolorem saepe unde.</p>
                </div>
            </div>

            <div class="produto">
                <div class="left-column">
                    <img src="/src/bola.jpg" alt="Foto produto" width="150">
                </div>

                <div class="right-column">
                    <div class="title-span">
                        <h3>Titulo Produto</h3>
                        <div class="spans">
                            <span class="brown">Tipo: bola</span>
                            <span class="blue">Marca: bola</span>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo blanditiis molestias quas
                        quia nihil velit autem pariatur aspernatur dolorem saepe unde.</p>
                </div>
            </div>

            <div class="produto">
                <div class="left-column">
                    <img src="/src/bola.jpg" alt="Foto produto" width="150">
                </div>

                <div class="right-column">
                    <div class="title-span">
                        <h3>Titulo Produto</h3>
                        <div class="spans">
                            <span class="brown">Tipo: bola</span>
                            <span class="blue">Marca: bola</span>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo blanditiis molestias quas
                        quia nihil velit autem pariatur aspernatur dolorem saepe unde.</p>
                </div>
            </div>

            <div class="produto">
                <div class="left-column">
                    <img src="/src/bola.jpg" alt="Foto produto" width="150">
                </div>

                <div class="right-column">
                    <div class="title-span">
                        <h3>Titulo Produto</h3>
                        <div class="spans">
                            <span class="brown">Tipo: bola</span>
                            <span class="blue">Marca: bola</span>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo blanditiis molestias quas
                        quia nihil velit autem pariatur aspernatur dolorem saepe unde.</p>
                </div>
            </div>

            <div class="produto">
                <div class="left-column">
                    <img src="/src/bola.jpg" alt="Foto produto" width="150">
                </div>

                <div class="right-column">
                    <div class="title-span">
                        <h3>Titulo Produto</h3>
                        <div class="spans">
                            <span class="brown">Tipo: bola</span>
                            <span class="blue">Marca: bola</span>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo blanditiis molestias quas
                        quia nihil velit autem pariatur aspernatur dolorem saepe unde.</p>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
