<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vaga') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <h1> Informações sobre a vaga </h1>
                    
                    <hr>

                    <p>ID da vaga: {{ $vaga->id }}</p>
                    <p>Nome da Vaga: {{ $vaga->nome }}</p>
                    <p>Descrição da Vaga: {{ $vaga->descricao }}</p>
                    <p>Salario da vaga: {{ $vaga->salario }}</p>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
