@extends ('layouts/site')

@section('content')
    <section id="banner">
        <div class="overlay">
            <div class="container">
                <h1>Orçamento</h1>
            </div>
        </div>
    </section>

    <section id="orcamento" class="brown">
        <div class="container">
            <h2>Solicite um orçamento:</h2>

            <form action="/orcamento" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" placeholder="Nome" name="name" required>
                    </div>
    
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="text" name="email" placeholder="E-mail" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label for="tel">Telefone</label>
                        <input type="text" name="tel" placeholder="(xx) xxxxx-xxxx" required>
                    </div>

                    <div class="form-group">
                        <label for="cat">categoria</label>
                        <select name="cat" id="cat">
                            @foreach ($categorias as $c)
                                <option value="{{$c->name}}">{{$c->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="message">Em que podemos ajudar?</label>
                    <textarea name="message" cols="30" rows="6" placeholder="Mensagem" required></textarea>
                </div>

                <div class="form-group" id="group-arquivo">
                    <label for="arquivo">Enviar arquivo com orçamento</label>
                    <span class="nomeArquivo"></span>
                    <input type="file" name="arquivo" id="arquivo" accept="image/png, image/jpeg, image/jpg, .pdf, .doc, .docx, .xlsx, .xls">
                </div>

                @if ($message = Session::get('success'))
                    <div class="message-envio">
                        <h3>{{$message}}</h3>
                    </div>
                @endif

                <button type="submit">Enviar</button>
            </form>
        </div>
    </section>
@endsection