@component('mail::message')

{{ $nomeSerie }} agora está disponível na plataforma!

A série {!! $nomeSerie !!} conta com {{ $qtdTemporadas }} temporadas e cada uma tem {{ $epPorTemporada }} episódios.

Para assistir acesse o link abaixo:
@component('mail::button', ['url' => $url])
    Ver {{ $nomeSerie }}
@endcomponent

@endcomponent