@extends('admin.layoutsAdmin.appAdmin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-body">


                        @if(session('sucesso'))
                            <div class="alert alert-success" role="alert">
                                {{ session('sucesso') }}
                            </div>
                        @endif


                        <form method="POST" action="{{route('admin.cadastro')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="productName" class="form-label">Nome da Peça</label>
                                <input type="text" class="form-control" id="productName"
                                       placeholder="Digite o nome da peça" name="nomeP" required
                                       autocomplete="nomeP" autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="productName" class="form-label">Imagem</label>
                                <input type="file" class="form-control-file" name="image">
                            </div>
                            <div class="mb-3">
                                <label for="productPrice" class="form-label">Preço</label>
                                <input type="text" class="form-control" id="productPrice"
                                       placeholder="Digite o preço" name="preco" required
                                       autocomplete="preco" autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="productPrice" class="form-label">Tipo</label>
                                <input type="text" class="form-control" id="productPrice"
                                       placeholder="Qual o tipo?" name="tipoP" required
                                       autocomplete="tipoP" autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="productPrice" class="form-label">Tamanho</label>
                                <input type="text" class="form-control" id="productPrice"
                                       name="tamanho" required autocomplete="tamanho" autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="productPrice" class="form-label">Categoria</label>
                                <input type="text" class="form-control" id="productPrice"
                                       placeholder="Digite a categoria" name="categoria" required
                                       autocomplete="categoria" autofocus>
                            </div>
                            <button type="submit" class="btn btn-primary text-light">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
