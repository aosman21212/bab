<div class="form-group mb-3">
    <div class="row">
        <div class="col-sm-3 d-flex align-items-center">
            {!! Form::label('productServiceId', 'Client Services:') !!}
        </div>
        <div class="col-sm-9">
            {!! Form::select('productServiceId', $prod->pluck('productServiceName', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Select ProductServiceName', 'id' => 'productServiceId', 'onchange' => 'fetchInitiatedQuantity()']) !!}
        </div>
    </div>
</div>

@php
    $randomNumber = 'v' . str_pad(mt_rand(1, 999), 3, '0', STR_PAD_LEFT);
@endphp

<div class="form-group mb-3"> <!-- Form group wrapper with some margin -->
    <div class="row"> <!-- Row for grid layout -->
        <div class="col-sm-3 d-flex align-items-center"> <!-- Column for label with flex alignment -->
            {!! Form::label('invoiceNo', 'Invoice no:') !!} <!-- Label for the input field -->
        </div>
        <div class="col-sm-9"> <!-- Column for input field -->
            {!! Form::text('invoiceNo', $randomNumber, ['class' => 'form-control','maxlength' => 255]) !!} <!-- Text input field for invoice number -->
        </div>
    </div>
</div>

<div class="form-group mb-3">
    <div class="row">
        <div class="col-sm-3 d-flex align-items-center">
            {!! Form::label('invoiceAmount', 'Amount:') !!}
        </div>
        <div class="col-sm-9">
            {!! Form::number('invoiceAmount', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="form-group mb-3">
    <div class="row">
        <div class="col-sm-3 d-flex align-items-center">
            {!! Form::label('invoiceMonth', 'Month:') !!}
        </div>
        <div class="col-sm-9">
            {!! Form::selectMonth('invoiceMonth', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="form-group mb-3">
    <div class="row">
        <div class="col-sm-3 d-flex align-items-center">
            {!! Form::label('invoiceYear', 'Year:') !!}
        </div>
        <div class="col-sm-9">
            {!! Form::selectRange('invoiceYear', now()->year, now()->year + 10, null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="form-group mb-3">
    <div class="row">
        <div class="col-sm-3 d-flex align-items-center">
            {!! Form::label('invoiceDate', 'Date:', ['class' => 'form-label']) !!}
        </div>
        <div class="col-sm-9">
            {!! Form::date('invoiceDate', isset($vendordata) ? $vendordata->invoiceDate : null, ['class' => 'form-control', 'id' => 'invoiceDate']) !!}
        </div>
    </div>
</div>

<div class="form-group mb-3" style="display: none;">
    <div class="row">
        <div class="col-sm-3 d-flex align-items-center">
            {!! Form::label('addedBy', 'Added by:') !!}
        </div>
        <div class="col-sm-9">
            {!! Form::number('addedBy', auth()->id(), ['class' => 'form-control', 'readonly' => 'readonly']) !!}
        </div>
    </div>
</div>
