<x-mail::message>
# Teste de envio

<p>
    Nome:{{ $data['name'] }}<br>
    Telefone:{{ $data['tel'] }}<br>
    Email:{{ $data['email'] }}
</p>

<x-mail::button :url="'http://google.com'">
Acesse aqui
</x-mail::button>

{{ date('d/m/Y') }},<br>
{{ config('app.name') }}
</x-mail::message>
