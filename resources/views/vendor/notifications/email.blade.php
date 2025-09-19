<x-mail::message>
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level === 'error')
# @lang('Whoops!')
@else
# @lang('Hello!')
@endif
@endif

{{-- Intro Lines --}}
@foreach ($introLines as $line)
{{ $line }}

@endforeach

{{-- Action Button --}}
@isset($actionText)
<?php
    $color = match ($level) {
        'success', 'error' => $level,
        default => 'primary',
    };
?>
<x-mail::button :url="$actionUrl" :color="'green'">
{{ $actionText }}
</x-mail::button>
@endisset

{{-- Outro Lines --}}
@foreach ($outroLines as $line)
{{ $line }}

@endforeach

{{-- Salutation --}}
@if (! empty($salutation))
{{ $salutation }}
@else
@lang('Atenciosamente')<br>
{{-- {{ config('app.name') }} --}}
Igreja a Caminho do Alvo
@endif

{{-- Subcopy --}}
@isset($actionText)
<x-slot:subcopy>
@lang(
    "Qualquer dúvida ou problema com a verificação do e-mail, você pode nos enviar uma mensagem por esse mesmo e-mail.",
    // [
    //     'actionText' => $actionText,
    // ]
) 
{{-- <span class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span> --}}
</x-slot:subcopy>
@endisset
</x-mail::message>
