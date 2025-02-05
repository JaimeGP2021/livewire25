<div x-data="{ open: false }">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Libros
        </h2>
    </x-slot>

    <form wire:submit="{{ $estaEditando ? 'actualizar' : 'crear' }}" class="max-w-sm mx-auto mt-5">
        <div class="mb-3">
            <label for="codigo" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Código: </label>
            <input wire:model="codigo" type="text" id="codigo" name="codigo"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-3">
            <label for="titulo" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Título: </label>
            <input wire:model="titulo" type="text" id="titulo" name="titulo"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-3">
            <label for="numpags" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Núm. páginas:
            </label>
            <input wire:model="numpags" type="text" id="numpags" name="numpags"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <button type="submit" @click="open = ! open"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ $estaEditando ? 'Editar' : 'Crear' }}</button>
        <button wire:click.prevent="cancelar" @click="open = ! open"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cancelar</button>
    </form>

    {{-- <div>
        <table>
            <thead>
                <th>Código</th>
                <th>Título</th>
                <th>Núm. páginas</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                @foreach ($libros as $libro)
                    <tr>
                        <td>{{ $libro->codigo }}</td>
                        <td>{{ $libro->titulo }}</td>
                        <td>{{ $libro->numpags }}</td>
                        <td><a href="#" wire:confirm="¿Seguro?"
                                wire:click="eliminar({{ $libro->id }})">Eliminar</a></td>
                        <td><a href="#" wire:click="editar({{ $libro->id }})" @click="open = ! open">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div> --}}



    <div class="relative overflow-x-auto mt-5">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Código
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Título
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nº Páginas
                    </th>
                    <th scope="col" colspan="2" colspan="2" class="px-6 py-3">
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($libros as $libro)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $libro->codigo }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $libro->titulo }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $libro->numpags }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" wire:confirm="¿Seguro?" wire:click="eliminar({{ $libro->id }})"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Eliminar</a>
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" wire:click="editar({{ $libro->id }})" @click="open = ! open"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- <div :class="{ 'hidden': ! open }">
        <form wire:submit="actualizar">
            <div>
                <label for="codigo">Código: </label>
                <input wire:model="codigo" type="text" id="codigo" name="codigo">
            </div>
            <div>
                <label for="titulo">Título: </label>
                <input wire:model="titulo" type="text" id="titulo" name="titulo">
            </div>
            <div>
                <label for="numpags">Núm. páginas: </label>
                <input wire:model="numpags" type="text" id="numpags" name="numpags">
            </div>
            <button type="submit">Crear</button>
        </form>
    </div> --}}
</div>
