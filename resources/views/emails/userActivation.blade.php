@component('mail::message')
# Activation your account

Thanks for signing up, please activate your account.

@component('mail::button', ['url' => route('subscriber.activate', ['email' => $user->email, 'token' => $user->activation_token])])
	Active
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
