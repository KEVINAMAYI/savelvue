<h1> Hello</h1>
<p> Please click the email to activate the account
    <a href="{{ env('FRONT_END_URL') }}/activate/{{ $user->email }}/{{ $activationCode }}">
        Reset Password
    </a>
</p>
