
@component('mail::message')
# Ce message provient de {{ $mailInfo['name'] }}

@component('mail::table')
| Fonction      | email       |
| ------------- |-------------|
| Expéditeur :  | {{ $mailInfo['mail'] }}|
| Destinataire :| {{ $mailInfo['destinataire'] }} |
@endcomponent

## Contenu du message :
@component('mail::panel')
{{ $mailInfo['message'] }}
@endcomponent

@endcomponent
