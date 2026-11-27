<x-layout>
    @isset($moduloFormativo)
        <ul class="grid gap-4 sm:grid-cols-2">
        <x-tarjeta-detalle-modulo-formativo :moduloFormativo="$moduloFormativo" :id="$id" />
        </ul>
    @endisset
</x-layout>
