<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Identifier Field -->
<div class="form-group col-sm-6">
    {!! Form::label('identifier', 'Identifier:') !!}
    {!! Form::text('identifier', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Stripe Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stripe_id', 'Stripe Id:') !!}
    {!! Form::text('stripe_id', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>