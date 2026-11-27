@props(['familia', 'id'])

<div class="p-4 border border-gray-300 rounded-lg bg-gray-100 text-gray-900 flex justify-between items-center">
    <div>
        <span class="text-black font-bold">{{ $familia['codigo'] }}</span> - 
        <span>{{ $familia['nombre'] }}</span>
    </div>
    <a href="{{ route('familias-profesionales.show', $id) }}" class="text-sm font-semibold text-blue-600 underline hover:text-blue-800">
        Ver detalle
    </a>
</div>
