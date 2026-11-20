@props(['pregunta', 'respuesta'])
<details>
    <summary class="cursor-pointer text-base font-medium tracking-tight text-gray-900">
        {{ $pregunta }}
    </summary>

    <p class="pt-4 text-sm text-gray-500">
        {{ $respuesta }}
    </p>
</details>