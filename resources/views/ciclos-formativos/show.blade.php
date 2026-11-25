<x-layout>
    <div class="flex w-full flex-col">
        <h1 class="mb-6 text-3xl font-bold">{{ $ciclo['nombre'] }}</h1>
        <ul class="grid grid-cols-1 gap-6">
            <li>
                <div class="bg-neutral-primary-soft block h-full rounded-base border border-default p-6 shadow-xs hover:bg-neutral-secondary-medium">
                    <h5 class="mb-3 text-2xl font-semibold tracking-tight text-heading leading-8">
                        {{ $ciclo['nombre'] }}
                    </h5>

                    <dl class="mt-4 flex flex-col gap-4">
                        <div class="flex flex-wrap items-center gap-x-6 gap-y-4">
                            <div class="flex items-center gap-2">
                                <dt class="text-sm font-medium text-body">Código de familia:</dt>
                                <dd class="inline-flex items-center rounded-full bg-gray-100 px-2.5 py-0.5 text-xs font-medium text-gray-800 ring-1 ring-inset ring-gray-500/10">{{ $ciclo['codigo_familia'] }}</dd>
                            </div>

                            <div class="flex items-center gap-2">
                                <dt class="text-sm font-medium text-body">Grado:</dt>
                                <dd @class([
                                    'inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-medium ring-1 ring-inset',
                                    'bg-green-100 text-green-800 ring-green-600/20' => ($ciclo['grado'] ?? '') === 'basico',
                                    'bg-orange-100 text-orange-800 ring-orange-600/20' => ($ciclo['grado'] ?? '') === 'medio',
                                    'bg-blue-100 text-blue-800 ring-blue-600/20' => ($ciclo['grado'] ?? '') === 'superior',
                                ])>{{ $ciclo['grado'] }}</dd>
                            </div>
                        </div>

                        <div class="flex items-center gap-2">
                            <dt class="text-sm font-medium text-body">Código:</dt>
                            <dd class="inline-flex items-center rounded-full bg-gray-100 px-2.5 py-0.5 text-xs font-medium text-gray-800 ring-1 ring-inset ring-gray-500/10">{{ $ciclo['codigo'] }}</dd>
                        </div>

                        <div>
                            <dt class="text-sm font-medium text-body">Descripción:</dt>
                            <dd class="mt-1 whitespace-pre-line text-body">{{ $ciclo['descripcion'] }}</dd>
                        </div>
                    </dl>
                    <div class="mt-6 flex flex-wrap gap-3">
                        <a href="{{ route('ciclos-formativos.index') }}" class="inline-flex items-center justify-center rounded-full border border-transparent bg-blue-600 px-4 py-2.5 text-sm font-medium leading-5 text-white shadow-xs hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                            Volver al listado
                        </a>
                        {{--https://laravel.com/framework/docs/13.x/routing#required-parameters--}}
                        <a href="{{ route('ciclos-formativos.edit', ['id' => $id]) }}" class="inline-flex items-center justify-center rounded-full border border-transparent bg-blue-600 px-4 py-2.5 text-sm font-medium leading-5 text-white shadow-xs hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                            Editar
                        </a>
                    </div>                    
                </div>
            </li>
        </ul>
    </div>
</x-layout>