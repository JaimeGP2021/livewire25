<div x-data="{ open: false }">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Socios
        </h2>
    </x-slot>

    <form wire:submit="{{ $estaEditando ? 'actualizar' : 'crear' }}" class="max-w-sm mx-auto mt-5">
        <div class="mb-3">
            <label for="codigo" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Código: </label>
            <input wire:model="codigo" type="text" id="codigo" name="codigo"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-3">
            <label for="nombre" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Nombre: </label>
            <input wire:model="nombre" type="text" id="nombre" name="nombre"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <button type="submit" @click="open = ! open"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ $estaEditando ? 'Editar' : 'Crear' }}</button>
        <button wire:click.prevent="cancelar" @click="open = ! open"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cancelar</button>
    </form>
