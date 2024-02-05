<!-- ProductServiceId Field -->
<div class="form-group col-sm-6">
    {!! Form::label('productServiceId', ' Service:') !!}
    {!! Form::select('productServiceId', $prod->pluck('productServiceName', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Select ProductServiceName', 'id' => 'productServiceId', 'onchange' => 'fetchInitiatedQuantity()']) !!}
</div>

<!-- Invoiceno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('invoiceNo', 'Invoice no:') !!}
    {!! Form::text('invoiceNo', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Invoiceamount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('invoiceAmount', 'amount:') !!}
    {!! Form::number('invoiceAmount', null, ['class' => 'form-control']) !!}
</div>

<!-- Invoice Month Field -->
<div class="form-group col-sm-4">
    {!! Form::label('invoiceMonth', ' Month:') !!}
    {!! Form::selectMonth('invoiceMonth', null, ['class' => 'form-control']) !!}
</div>

<!-- Invoice Year Field -->
<div class="form-group col-sm-4">
    {!! Form::label('invoiceYear', 'Year:') !!}
    {!! Form::selectRange('invoiceYear', now()->year, now()->year + 10, null, ['class' => 'form-control']) !!}
</div>

<!-- Invoicedate Field -->
<div class="form-group col-sm-6">
    {{-- Label for the input field --}}
    {!! Form::label('invoiceDate', 'Date:') !!}
    
    {{-- Date input field with the default value from the database --}}
    {!! Form::date('invoiceDate', isset($vendordata) ? $vendordata->invoiceDate : null, ['class' => 'form-control', 'id' => 'invoiceDate']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#invoiceDate').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush
<!-- AddedBy Field -->
<div class="form-group col-sm-6" style="display: none;">
    {!! Form::label('addedBy', 'Added by:') !!}
    {!! Form::number('addedBy', auth()->id(), ['class' => 'form-control', 'readonly' => 'readonly']) !!}
</div>