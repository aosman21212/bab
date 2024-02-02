<!-- Productserviceid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('productServiceId', 'Productserviceid:') !!}
    {!! Form::number('productServiceId', null, ['class' => 'form-control']) !!}
</div>

<!-- Invoiceno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('invoiceNo', 'Invoiceno:') !!}
    {!! Form::text('invoiceNo', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Invoiceamount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('invoiceAmount', 'Invoiceamount:') !!}
    {!! Form::number('invoiceAmount', null, ['class' => 'form-control']) !!}
</div>

<!-- Invoicemonth Field -->
<div class="form-group col-sm-6">
    {!! Form::label('invoiceMonth', 'Invoicemonth:') !!}
    {!! Form::number('invoiceMonth', null, ['class' => 'form-control']) !!}
</div>

<!-- Invoiceyear Field -->
<div class="form-group col-sm-6">
    {!! Form::label('invoiceYear', 'Invoiceyear:') !!}
    {!! Form::number('invoiceYear', null, ['class' => 'form-control']) !!}
</div>

<!-- Invoicedate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('invoiceDate', 'Invoicedate:') !!}
    {!! Form::text('invoiceDate', null, ['class' => 'form-control','id'=>'invoiceDate']) !!}
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

<!-- Addedby Field -->
<div class="form-group col-sm-6">
    {!! Form::label('addedBy', 'Addedby:') !!}
    {!! Form::number('addedBy', null, ['class' => 'form-control']) !!}
</div>