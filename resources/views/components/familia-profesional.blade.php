@props(['id', 'familia'])

<article>
    <h3>{{ $familia['codigo'] }} - {{ $familia['nombre'] }}</h3>
    <a href="{{ route('familias-profesionales.show', $id) }}">Ver detalle</a>
</article>
