@component('mail::message')
# Bienvenue {{ Auth::user()->nom }}

Merci pour votre message, notre plate-forme vous remercie de coopérer avec nous. <br />
Nous ferons de notre mieux pour nos clients.<br />
Pour mieux nous connaître, cliquez sur ce bouton :

@component('mail::button', ['url' => route('about-us')])
Naviguer
@endcomponent

Cordialement,<br>
{{ config('app.name') }}
@endcomponent
