@props(['id', 'evidencia'])

<article class="p-4 border border-gray-200 rounded-xl bg-white text-gray-900 shadow-sm flex flex-col justify-between gap-3">
<div>
<span @class([
'text-xs font-semibold px-2.5 py-0.5 rounded-full uppercase',
'bg-green-100 text-green-800' => $evidencia['estado_validacion'] === 'validada',
'bg-yellow-100 text-yellow-800' => $evidencia['estado_validacion'] === 'pendiente',
'bg-red-100 text-red-800' => $evidencia['estado_validacion'] === 'rechazada',
'bg-blue-100 text-blue-800' => $evidencia['estado_validacion'] === 'asignada',
])>
{{ $evidencia['estado_validacion'] }}
</span>

<h2 class="mt-2 text-lg font-medium text-gray-900">
{{ $evidencia['descripcion'] }}
</h2>
</div>

<div>
<a href="{{ route('evidencias.show', $id) }}" class="text-sm font-medium text-blue-600 hover:underline">
Ver detalle →
</a>
</div>
</article>