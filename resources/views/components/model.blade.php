@props(['name', 'title'])


<div
    x-data="{ show : false , name : '{{ $name }}' }" 
    x-show = "show"
    {{-- x-on:open-modal.window = "console.log($event.detail.name === name);show = true"  --}}
    x-on:open-modal.window = "show = ($event.detail.name === name)" 
    {{-- x-on:close-modal.window = "show = !($event.detail.name === name)"   --}}
    x-on:close-modal.window = "show = false" 
    x-on:keydown.escape.window = "show = false"
    style="display:none"
   x-transition:enter="transition ease-out duration-300"

    >
<div x-on:click="show = false" class="fixed z-50 inset-0">
    <div class="fixed inset-0 bg-gray-300 opacity-100">
        <div class="bg-white rounded m-auto fixed inset-0 max-w-2xl" style="max-height: 50vh;">
        @if (isset($title))
             <div class="py-5 flex items-center justify-center">
                {{$title}}
            </div>
        @endif
            <div>
                {{$body}}

            </div>
            <button+ x-on:click="$dispatch('close-modal')" class="px-3 py-1 bg-red-500 text-white rounded">Close Modal</button>

        </div>
    </div>
</div>
</div>