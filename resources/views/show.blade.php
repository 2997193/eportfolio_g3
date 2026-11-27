<x-layout>
<div class="max-w-3xl mx-auto p-6 text-gray-900 space-y-4">
<h1 class="text-2xl font-bold">Evidencia {{ $id }}</h1>

<div class="p-6 border border-gray-200 rounded-xl bg-white shadow-sm space-y-3">
<p><strong>Descripción:</strong> {{ $evidencia['descripcion'] }}</p>
<p><strong>Estado de validación:</strong> {{ $evidencia['estado_validacion'] }}</p>
<p><strong>Estudiante ID:</strong> {{ $evidencia['estudiante_id'] }}</p>
<p><strong>Tarea ID:</strong> {{ $evidencia['tarea_id'] }}</p>
<p>
<strong>URL:</strong>
<a href="{{ $evidencia['url'] }}" target="_blank" class="text-blue-600 underline">
{{ $evidencia['url'] }}
</a>
</p>
</div>

<div class="flex gap-4 pt-2">
<a href="{{ route('evidencias.edit', $id) }}" class="px-4 py-2 bg-[#cff245] text-black rounded-lg text-sm font-medium">
Editar evidencia
</a>
<a href="{{ route('evidencias.index') }}" class="px-4 py-2 border border-gray-300 bg-white rounded-lg text-sm">
Volver al listado
</a>
</div>
</div>
</x-layout>


