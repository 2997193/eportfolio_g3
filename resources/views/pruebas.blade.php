@props([
    'titulo' => null,
    'titulo0' => 'index',
    'titulo1' => 'test',
    'titulo2' => 'contacto',
    'titulo3' => 'no se',
])
    
<x-layout-pruebas>
    <x-sendit.header titulo="{{ $titulo }}" titulo0="{{ $titulo0 }}" titulo1="{{ $titulo1 }}" titulo2="{{ $titulo2 }}" titulo3="{{ $titulo3 }}" />
</x-layout-pruebas>