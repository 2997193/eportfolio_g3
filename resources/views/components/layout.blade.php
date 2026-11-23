@props([
    'titulo' => null,
    'titulo0' => 'Home',
    'titulo1' => 'Features',
    'titulo2' => 'Pricing',
    'titulo3' => 'Blog',
])
<x-sendit.layout :titulo="$titulo" :titulo0="$titulo0" :titulo1="$titulo1" :titulo2="$titulo2" :titulo3="$titulo3">
    {{ $slot }}
</x-sendit.layout>