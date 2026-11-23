<x-layout>
    @isset($id)
        <p>Perfil del usuario {{ $id }}</p>
    @else
        <p>Mi perfil</p>
    @endisset
</x-layout>