<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pagina Principal') }}
        </h2>
    </x-slot>


    <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-2">
            <a href="/cadastrar"><button type="button" class="btn btn-outline-secondary btn-space">ADICIONAR ITEM</button></a>
        </div>
        <div class="col-md-2"> </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Descricao</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Estoque Minimo</th>
                                <th scope="col">Estoque Máximo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nome }}</td>
                                    <td>{{ $item->descricao }}</td>
                                    <td>{{ $item->categoria }}</td>
                                    <td>{{ $item->quantidade }}</td>
                                    <td>{{ $item->estoque_min }}</td>
                                    <td>{{ $item->estoque_max }}</td>
                                    <td><a href="/home/item/{{ $item->id }}"><button type="button"
                                        class="btn btn-outline-primary">Visualizar</button></a></td>
                                        
                                    <td><a href="/editar/{{ $item->id }}"><button type="button"
                                                class="btn btn-outline-warning">Atualizar</button></a></td>
                                                
                                    <form method="POST" action="/home/{{$item->id}}" >
                                        @csrf
                                        @method('DELETE')
                                        <td> <button type="submit" class="btn btn-outline-danger">Deletar</button></td>
                                    </form>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>