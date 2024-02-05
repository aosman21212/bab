<!-- Productservicename Field -->
<div class="form-group col-sm-6">
    {!! Form::label('productServiceName', 'name:') !!}
    {!! Form::text('productServiceName', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Initiatedquantity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('initiatedQuantity', 'Initiated quantity:') !!}
    {!! Form::number('initiatedQuantity', null, ['class' => 'form-control']) !!}
</div>

<!-- Recurringfees Field -->
<div class="form-group col-sm-6">
    {!! Form::label('recurringFees', 'Recurring fees:') !!}
    {!! Form::number('recurringFees', null, ['class' => 'form-control']) !!}
</div>

<!-- Additionalfees Field -->
<div class="form-group col-sm-6">
    {!! Form::label('additionalFees', 'Additional fees:') !!}
    {!! Form::number('additionalFees', null, ['class' => 'form-control']) !!}
</div>

<!-- Recurringperiod Field -->
<div class="form-group col-sm-6">
    {!! Form::label('recurringPeriod', 'Recurring Period:') !!}
    {!! Form::select('recurringPeriod', ['monthly' => 'Monthly', 'yearly' => 'Yearly'], null, ['class' => 'form-control']) !!}
</div>

<!-- Hidden Added By Field -->
<div class="form-group col-sm-6" style="display: none;">
    {!! Form::label('addedBy','Added By:') !!}
    {!! Form::number('addedBy', auth()->id(), ['class' => 'form-control', 'readonly' => 'readonly']) !!}
</div>

<!-- Addeddate Field -->


<div class="form-group col-sm-6">
{!! Form::label('clientId', 'Client name:') !!}
    {!! Form::select('clientId', $clients->pluck('clientName', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Select clients']) !!}
</div>

<!-- Acct Manager Status Field -->
<div class="form-group col-sm-6">
{!! Form::label('productServiceStatus', 'status:') !!}
    {!! Form::select('productServiceStatus', ['Active' => 'Active', 'Inactive' => 'Inactive'], null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
{!! Form::label('vendorId', 'Vendor name :') !!}
    {!! Form::select('vendorId',  $venders->pluck('vendorName', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Select clients']) !!}
</div>