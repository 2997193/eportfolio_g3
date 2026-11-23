@props([
'titulo' => null,
'titulo0' => 'index',
'titulo1' => 'test',
'titulo2' => 'contacto',
'titulo3' => 'no se',
])
{{-- vista  para probar los componentes --}}
{{-- los ejemplos los he sacado de https://flowbite.com/docs/components/card/ y https://flowbite.com/docs/components/accordion/ --}}
<x-layout-pruebas>
    <x-sendit.header :titulo="$titulo" :titulo0="$titulo0" :titulo1="$titulo1" :titulo2="$titulo2" :titulo3="$titulo3" />
    <main class="min-h-screen bg-gray-100 p-8">
        <div class="mx-auto max-w-5xl space-y-8">

            <h1 class="text-3xl font-bold">Panel de pruebas</h1>

            <section class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm">
                <h2 class="mb-4 text-xl font-bold">btn y txt</h2>
                <p class="mb-4 text-gray-600">esto sirve para probar componentes con Tailwind</p>
                <button class="rounded-lg bg-blue-700 px-4 py-2 text-white">test</button>
            </section>

            <section class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm">
                <h2 class="mb-4 text-xl font-bold">Herramientas</h2>
                <div class="flex flex-wrap gap-4">
                    <x-sendit.tool-card :numero="1" />
                    <x-sendit.tool-card :numero="2" />
                    <x-sendit.tool-card :numero="3" />
                </div>
            </section>

            <section class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm">
                <h2 class="mb-4 text-xl font-bold">Plan</h2>
                <x-sendit.precios-card nombre="Plan de prueba" :precio="25" descripcion="Ejemplo sencillo" tiempo="mes" :lista="['Primera ventaja', 'Segunda ventaja']">
                    <x-slot:footer>
                        <button class="rounded-lg bg-blue-700 px-4 py-2 text-sm font-medium text-white">Elegir</button>
                    </x-slot:footer>
                </x-sendit.precios-card>
            </section>

            <section class="divide-y divide-gray-200 rounded-lg border border-gray-200 bg-white p-6 shadow-sm">
                <h2 class="mb-4 text-xl font-bold">Preguntas</h2>
                <x-sendit.faq pregunta="¿Esta es una prueba?" respuesta="Sí, puedes cambiar este contenido." />
                <x-sendit.faq pregunta="¿Para qué sirve esta página?" respuesta="Para probar componentes." />
            </section>

        </div>
    </main>
</x-layout-pruebas>