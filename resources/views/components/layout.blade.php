@props([
    'titulo' => null,
    'titulo0' => 'incio',
    'titulo1' => 'pagina1',
    'titulo2' => 'pagina2',
    'titulo3' => 'pagina3',
])
<x-sendit.layout :titulo="$titulo" :titulo0="$titulo0" :titulo1="$titulo1" :titulo2="$titulo2" :titulo3="$titulo3">
    {{ $slot }}
</x-sendit.layout>