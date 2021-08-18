<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $user->name }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $user->email }}</p>
</div>

<!-- Email Verified At Field -->
<div class="col-sm-12">
    {!! Form::label('email_verified_at', 'Email Verified At:') !!}
    <p>{{ $user->email_verified_at }}</p>
</div>

<!-- Password Field -->
<div class="col-sm-12">
    {!! Form::label('password', 'Password:') !!}
    <p>{{ $user->password }}</p>
</div>

<!-- Remember Token Field -->
<div class="col-sm-12">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    <p>{{ $user->remember_token }}</p>
</div>

<!-- Stripe Id Field -->
<div class="col-sm-12">
    {!! Form::label('stripe_id', 'Stripe Id:') !!}
    <p>{{ $user->stripe_id }}</p>
</div>

<!-- Card Brand Field -->
<div class="col-sm-12">
    {!! Form::label('card_brand', 'Card Brand:') !!}
    <p>{{ $user->card_brand }}</p>
</div>

<!-- Card Last Four Field -->
<div class="col-sm-12">
    {!! Form::label('card_last_four', 'Card Last Four:') !!}
    <p>{{ $user->card_last_four }}</p>
</div>

<!-- Trial Ends At Field -->
<div class="col-sm-12">
    {!! Form::label('trial_ends_at', 'Trial Ends At:') !!}
    <p>{{ $user->trial_ends_at }}</p>
</div>

