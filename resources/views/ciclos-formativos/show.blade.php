<x-layout>
        <div class="flex w-full flex-col">
        <h1 class="mb-6 text-3xl font-bold">{{ $ciclo['nombre'] }}</h1>

        <ul class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <li>
                    <a href="#" class="bg-neutral-primary-soft block h-full rounded-base border border-default p-6 shadow-xs hover:bg-neutral-secondary-medium">
                        <h5 class="mb-3 text-2xl font-semibold tracking-tight text-heading leading-8">
                            {{ $ciclo['nombre'] }}
                        </h5>
                        <dl class="mt-4 grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div>
                                <dt class="text-sm font-medium text-body">Código de familia</dt>
                                <dd class="mt-1 text-body">{{ $ciclo['codigo_familia'] }}</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-body">Grado</dt>
                                <dd class="mt-1 text-body">{{ $ciclo['grado'] }}</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-body">Código</dt>
                                <dd class="mt-1 text-body">{{ $ciclo['codigo'] }}</dd>
                            </div>
                            <div class="sm:col-span-2">
                                <dt class="text-sm font-medium text-body">Descripción</dt>
                                <dd class="mt-1 whitespace-pre-line text-body">{{ $ciclo['descripcion'] }}</dd>
                            </div>
                        </dl>
                    </a>
                </li>
        </ul>
    </div>
</x-layout>