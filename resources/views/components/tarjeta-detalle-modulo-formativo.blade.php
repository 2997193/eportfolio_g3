@props(['moduloFormativo', 'id'])

<div class="bg-neutral-primary-soft block border border-default rounded-base shadow-xs">
    <h2 class="text-2xl font-semibold">
        <a href="{{ route('modulos-formativos.show', $id) }}"> {{ $moduloFormativo['nombre'] }}</a>
    </h2>
    <p><strong>Código</strong> {{ $moduloFormativo['codigo'] }}</p>
    <p><strong>Código Ciclo Formativo</strong> {{ $moduloFormativo['codigo_ciclo'] }}</p>
    <p><strong>Horas Totales</strong> {{ $moduloFormativo['horas_totales'] }}</p>
    <p><strong>Curso Escolar</strong> {{ $moduloFormativo['curso_escolar'] }}</p>
    <p><strong>Centro</strong> {{ $moduloFormativo['centro'] }}</p>
    <p><strong>Descripción</strong> {{ $moduloFormativo['descripcion'] }}</p>
    <div class="mt-6 flex flex-wrap gap-3 ">
        <a href="{{ route('modulos-formativos.index') }}" class="inline-flex items-center justify-center bg-[#cff245] px-4 py-2 text-black rounded-xl">
            Volver al listado
        </a>

        <a href="{{ route('modulos-formativos.edit', ['id' => $id]) }}" class="inline-flex items-center justify-center bg-[#cff245] px-4 py-2 text-black rounded-xl">
            Editar
        </a>
    </div>
</div>