@component('mail::message')
{{-- Greeting --}}
# @lang('Привет!')

{{-- Intro Lines --}}
Пожалуйста, нажмите кнопку ниже, чтобы подтвердить свой адрес электронной почты.

{{-- Action Button --}}
@component('mail::button', ['url' => $actionUrl, 'color' => 'primary'])
{{ 'Подтвердить адрес электронной почты' }}
@endcomponent

{{-- Outro Lines --}}
Если вы не создавали учетную запись, никаких дальнейших действий не требуется.

{{-- Salutation --}}
С уважением,<br>
{{ config('app.name') }}

{{-- Subcopy --}}
@slot('subcopy')
@lang(
    "Если у вас возникли проблемы с кнопкой «Подтвердить адрес электронной почты», скопируйте и вставьте приведенный ниже\n".
    'URL-адрес в свой веб-браузер:'
) <span class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span>
@endslot
@endcomponent
