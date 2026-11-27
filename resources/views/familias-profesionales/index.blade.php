<x-sendit.layout>
    <div class="max-w-4xl mx-auto py-12 px-4 text-gray-900">
        <h1 class="text-3xl font-bold mb-6 text-black">Familias profesionales</h1>

        <div class="space-y-4">
            @foreach ($familiasProfesionales as $id => $familia)
                <x-familia-profesional :familia="$familia" :id="$id" />
            @endforeach
        </div>
    </div>
</x-sendit.layout>
