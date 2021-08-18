<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $plan->title }}</p>
</div>

<!-- Identifier Field -->
<div class="col-sm-12">
    {!! Form::label('identifier', 'Identifier:') !!}
    <p>{{ $plan->identifier }}</p>
</div>

<!-- Stripe Id Field -->
<div class="col-sm-12">
    {!! Form::label('stripe_id', 'Stripe Id:') !!}
    <p>{{ $plan->stripe_id }}</p>
</div>

