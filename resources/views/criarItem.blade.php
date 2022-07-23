<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{route('criar_item')}}" class="row g-3">
                        @csrf
                        <div class="col-md-6">
                            <label for="nome" class="form-label">Nome do Item</label>
                            <input type="text" class="form-control" id="nome" name="nome">
                        </div>
                        <div class="col-md-6">
                            <label for="descricao" class="form-label">Descrição</label>
                            <input type="text" class="form-control" id="descricao" name="descricao">
                        </div>
                        <div class="col-4">
                            <label for="categoria" class="form-label">Categoria</label>
                            <select id="categoria" name="categoria" class="form-control">
                                <option>Alimento</option>
                                <option>Plastico</option>
                                <option>Vidro</option>
                                <option>Metal</option>
                                <option>Papel</option>
                                <option>Movéis</option>
                            </select>
                        </div>
                        <div class="row g-2">
                            <div class="col-md-3">
                                <label for="quantidade" class="form-label">Quantidade:</label>
                                <input type="number" class="form-control" id="quantidade" name="quantidade">
                            </div>
                            <div class="col-md-3">
                                <label for="estoque_min" class="form-label">Estoque Minimo:</label>
                                <input type="number" class="form-control" id="estoque_min" name="estoque_min">
                            </div>
                            <div class="col-md-3">
                                <label for="estoque_max" class="form-label">Estoque Maximo:</label>
                                <input type="number" class="form-control" id="estoque_max" name="estoque_max">
                            </div>
                        </div>

                        <div class="">
                            <button type="submit" class="btn btn-outline-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
