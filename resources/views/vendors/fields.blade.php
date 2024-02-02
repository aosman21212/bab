<!-- Vendorname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vendorName', 'Vendorname:') !!}
    {!! Form::text('vendorName', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Vendorlogo Field -->
<!-- Vendorlogo Field -->
<!-- Vendorlogo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vendorLogo', 'Vendorlogo:') !!}
    @if(isset($vendors) && isset($vendors->vendorLogo))
        <img src="{{ asset('storage/' . $vendors->vendorLogo) }}" alt="Vendor Logo" style="max-width: 100px;">
        <br>
    @endif
    {!! Form::file('vendorLogo', ['class' => 'form-control']) !!}
</div>

<!-- Vendorstatus Field -->


<!-- Acct Manager Status Field -->
<div class="form-group col-sm-6">
{!! Form::label('vendorStatus', 'Vendorstatus:') !!}
    {!! Form::select('vendorStatus', ['Active' => 'Active', 'Inactive' => 'Inactive'], null, ['class' => 'form-control']) !!}
</div>
<!-- Hidden Added By Field -->
<div class="form-group col-sm-6" style="display: none;">
    {!! Form::label('addedBy','Added By:') !!}
    {!! Form::number('addedBy', auth()->id(), ['class' => 'form-control', 'readonly' => 'readonly']) !!}
</div>
