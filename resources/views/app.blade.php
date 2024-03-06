<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Laravel</title>

  @vite('resources/css/app.css')
      <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

{{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.5/dist/cdn.min.js"></script> --}}

    @livewireStyles

    </head>
    <body  class="pt-5">

<x-model name="modalOnce" title="modal1">
{{-- @slot('body') --}}
<x-slot:body>
    <p class="p-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto ipsam vero voluptatibus tenetur magni reprehenderit numquam ducimus cumque in! Doloremque, porro nobis. Distinctio labore nesciunt sit consequatur, perferendis delectus fugit!</p>
{{-- @endslot --}}
</x-slot:body>
</x-model>

<x-model name="modalTwo" title="Modal2">
@slot('body')
    <p class="p-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto ipsam vero voluptatibus tenetur magni reprehenderit numquam ducimus cumque in! Doloremque, porro nobis. Distinctio labore nesciunt sit consequatur, perferendis delectus fugit!</p>
@endslot
</x-model>



<button x-data x-on:click="$dispatch('open-modal',{name: 'modalOnce'})" 
class="px-3 py-1 bg-red-500 text-white rounded">
Modal One
</button>
<button x-data x-on:click="$dispatch('open-modal',{name: 'modalTwo'})" class="px-3 py-1 bg-red-500 text-white rounded"> 
 Modal Two
</button>

    @livewireScripts

    </body>
</html>
