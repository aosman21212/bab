<!-- Vendorname Field -->
<div class="col-sm-12">
    {!! Form::label('vendorName', 'Vendorname:') !!}
    <p>{{ $vendors->vendorName }}</p>
</div>

<!-- Vendorlogo Field -->
<div class="col-sm-12">
    {!! Form::label('vendorLogo', 'Vendorlogo:') !!}
    <p>{{ $vendors->vendorLogo }}</p>
</div>

<!-- Addedby Field -->
<div class="col-sm-12">
    {!! Form::label('addedBy', 'Addedby:') !!}
    <p>{{ $vendors->addedBy }}</p>
</div>

<!-- Vendorstatus Field -->
<div class="col-sm-12">
    {!! Form::label('vendorStatus', 'Vendorstatus:') !!}
    <p>{{ $vendors->vendorStatus }}</p>
</div>

