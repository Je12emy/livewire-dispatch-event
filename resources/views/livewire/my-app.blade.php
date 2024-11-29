<div class="w-2/5 mx-auto flex flex-col space-y-4">
    <h1> Parent Livewire Component </h1>

    @if($show)
    <p class="text-red-400 font-bold"> I'm a Secret </p>
    @endif

    <livewire:child-with-slot />
</div>
