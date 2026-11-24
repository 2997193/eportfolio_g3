{{-- Usa aquí tu layout del grupo --}}
<h1>Nueva familia profesional</h1>
<h1>Familias profesionales</h1>
@foreach ($familiasProfesionales as $id => $familia)
    <x-familia-profesional :id="$id" :familia="$familia" />
@endforeach
