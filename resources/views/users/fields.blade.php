<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Email Verified At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_verified_at', 'Email Verified At:') !!}
    {!! Form::text('email_verified_at', null, ['class' => 'form-control','id'=>'email_verified_at']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#email_verified_at').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Remember Token Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    {!! Form::text('remember_token', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Stripe Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stripe_id', 'Stripe Id:') !!}
    {!! Form::text('stripe_id', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Card Brand Field -->
<div class="form-group col-sm-6">
    {!! Form::label('card_brand', 'Card Brand:') !!}
    {!! Form::text('card_brand', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Card Last Four Field -->
<div class="form-group col-sm-6">
    {!! Form::label('card_last_four', 'Card Last Four:') !!}
    {!! Form::text('card_last_four', null, ['class' => 'form-control','maxlength' => 4,'maxlength' => 4]) !!}
</div>

<!-- Trial Ends At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('trial_ends_at', 'Trial Ends At:') !!}
    {!! Form::text('trial_ends_at', null, ['class' => 'form-control','id'=>'trial_ends_at']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#trial_ends_at').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush