<x-layout titulo="Módulos formativos">
    <ul class="grid gap-3 sm:grid-cols-2">
    @forelse ($modulosFormativos as $id => $moduloFormativo)
        <x-tarjeta-lista-modulo-formativo :moduloFormativo="$moduloFormativo" :id="$id" />
    @empty
        <li>Todavía no hay Módulos formativos.</li>
    @endforelse
    </ul>
</x-layout>
