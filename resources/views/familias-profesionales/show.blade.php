{{-- Usa aquí tu layout del grupo --}}
<h1>Nueva familia profesional</h1>
<h1>{{ $familia['codigo'] }} - {{ $familia['nombre'] }}</h1>
<p>{{ $familia['descripcion'] }}</p>

<div>
    <a href="{{ route('familias-profesionales.edit', $id) }}">Editar</a>
    <a href="{{ route('familias-profesionales.index') }}">Volver al listado</a>
</div>
