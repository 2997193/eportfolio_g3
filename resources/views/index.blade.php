<x-layout>
<div class="max-w-7xl mx-auto p-6">
<div class="flex justify-between items-center mb-6">
<h1 class="text-2xl font-bold text-gray-900">Listado de evidencias</h1>
<a href="{{ route('evidencias.create') }}" class="px-4 py-2 bg-[#cff245] text-black rounded-lg text-sm font-medium">
Nueva evidencia
</a>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
@foreach ($evidencias as $id => $evidencia)
<x-evidencia-card :id="$id" :evidencia="$evidencia" />
@endforeach
</div>
</div>
</x-layout>

