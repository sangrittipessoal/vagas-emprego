<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro de Vaga') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form action="{{ route('vagas.store') }}" method="POST">
                        @csrf
                        <input type="text" name="nome" placeholder="Nome">
                        <input type="text" name="descricao" placeholder="Descrição">
                        <input type="text" name="salario" placeholder="Salario">
                        <button type="submit"> Enviar </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>