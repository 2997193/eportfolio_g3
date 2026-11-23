@props([
    'nombre',
    'precio',
    'descripcion' => '',
    'tiempo',
    'lista' => [],
])
<div class="flex flex-col justify-between h-full p-8 bg-gray-50 rounded-3xl">
    <div class="flex flex-col">
        <div>
            <h3 class="mt-4 font-medium text-gray-900">
                {{ $nombre }}
            </h3>
        </div>
        <div class="order-first text-2xl font-medium">
            {{ $precio . '$' }} <span>/{{ $tiempo }}</span>
        </div>
        <p class="mt-2 text-xs italic">
            {{ $descripcion }}
        </p>
        <ul class="flex flex-col gap-2 mt-12 text-sm text-gray-600">
            @foreach ($lista as $item)
            <li class="flex items-start gap-3">
                <div class="flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-check-filled"
                        width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path
                            d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z"
                            stroke-width="0" fill="currentColor"></path>
                    </svg>
                </div>
                <p>{{ $item }}</p>
            </li>        
            @endforeach
            

        </ul>
    </div>
        <div class="mt-8">
            {{ $footer }}
        </div>
</div>