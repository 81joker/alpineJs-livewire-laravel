<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}}</title>
    @vite('resources/css/app.css')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @livewireStyles

</head>
<body data-theme="cupcake font-normal">
    @include('layouts.navbar')

    <x-model name="modalOnce" title="modal1">
        {{-- @slot('body') --}}
        <x-slot:body>
            <livewire:upload-files />
           
            {{-- @endslot --}}
        </x-slot:body>
    </x-model>

    <x-model name="modalTwo" title="Modal2">
        @slot('body')
         <livewire:show-files />
        @endslot
    </x-model>



<div class="inset-0 bg-red-100 mt-10 m-auto">
        <button x-data x-on:click="$dispatch('open-modal',{name: 'modalOnce'})"
        class="px-3 py-1 bg-red-500 text-white rounded ">
        Modal One
    </button>
    <button x-data x-on:click="$dispatch('open-modal',{name: 'modalTwo'})"
        class="px-3 py-1 bg-red-500 text-white rounded">
        Modal Two
    </button>
</div>

    @livewireScripts

</body>

</html>
