@extends('admin.layoutsAdmin.appAdmin')

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-body">
                @if(session('sucesso'))
                    <div class="alert alert-success" role="alert">
                        {{ session('sucesso') }}
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Imagem</th>
                            <th>Preço</th>
                            <th>Tipo</th>
                            <th>Tamanho</th>
                            <th>Categoria</th>
                            <th colspan="2">Ação</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Nome</th>
                            <th>Imagem</th>
                            <th>Preço</th>
                            <th>Tipo</th>
                            <th>Tamanho</th>
                            <th>Categoria</th>
                            <th colspan="2">Ação</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($produtos as $produto)
                            <tr>
                                <td>{{ $produto->nomeP }}</td>
                                <td><img style="width: 100px;height: 100px;"
                                         src="/img/imgProdutos/{{$produto->caminho}}"
                                         alt=""></td>
                                <td>{{ $produto->preco }}</td>
                                <td>{{ $produto->tipoP }}</td>
                                <td>{{ $produto->tamanho }}</td>
                                <td>{{ $produto->categoria }}</td>
                                <td style="text-align: center;">
                                    <button type="button" class="btn btn-warning btn-circle m-3" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal{{$produto->id}}" data-bs-whatever="@mdo"><i
                                            class="fas fa-edit"></i></button>
                                    <form style="display: inline-block;"
                                          action="{{ route('admin.estoque.excluir',['id' => $produto->id]) }}"
                                          method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-circle m-3"><i
                                                class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        @foreach($produtos as $produtoModal)
            <div class="modal fade" id="exampleModal{{$produtoModal->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="{{route('admin.estoque.edit',['id' => $produtoModal->id])}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="productName" class="form-label">Nome da Peça</label>
                                    <input type="text" class="form-control" id="productName"
                                           placeholder="Digite o nome da peça" name="nomeP" required
                                           autocomplete="nomeP" value="{{$produtoModal->nomeP}}" autofocus>

                                </div>
                                <div class="mb-3">
                                    <label for="productName" class="form-label">Imagem{{ $produtoModal->caminho }}</label>
                                    <input type="file" class="form-control-file" name="image">
                                    <img
                                        style="width: 100%;height: 30%;"
                                        src="/img/imgProdutos/{{$produtoModal->caminho}}"
                                        alt="">
                                </div>
                                <div class="mb-3">
                                    <label for="productPrice" class="form-label">Preço</label>
                                    <input type="text" class="form-control" id="productPrice"
                                           placeholder="Digite o preço" name="preco" required
                                           autocomplete="preco" value="{{$produtoModal->preco}}" autofocus>
                                </div>
                                <div class="mb-3">
                                    <label for="productPrice" class="form-label">Tipo</label>
                                    <input type="text" class="form-control" id="productPrice"
                                           placeholder="Qual o tipo?" name="tipoP" required
                                           autocomplete="tipoP" value="{{$produtoModal->tipoP}}" autofocus>
                                </div>
                                <div class="mb-3">
                                    <label for="productPrice" class="form-label">Tamanho</label>
                                    <input type="text" class="form-control" id="productPrice"
                                           name="tamanho" required autocomplete="tamanho"
                                           value="{{$produtoModal->tamanho}}" autofocus>
                                </div>
                                <div class="mb-3">
                                    <label for="productPrice" class="form-label">Categoria</label>
                                    <input type="text" class="form-control" id="productPrice"
                                           placeholder="Digite a categoria" name="categoria" required
                                           autocomplete="categoria" value="{{$produtoModal->categoria}}" autofocus>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary text-light" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                    <button type="submit" class="btn btn-primary text-light">Editar</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        @endforeach


    </div>
@endsection

{{--@vite(['datatables/jquery.dataTables.min.js','datatables/dataTables.bootstrap4.min.js'])--}}
{{--@vite(['resources/js/demo/datatables-demo.js'])--}}
