<table class="table table-bordered">
    <!-- Productserviceid Field -->
    <tr>
        <td class="col-sm-12">
            {!! Form::label('productServiceId', 'Productserviceid:') !!}
        </td>
        <td>
            <p>{{ $vendordata->productServiceId }}</p>
        </td>
    </tr>

    <!-- Invoiceno Field -->
    <tr>
        <td class="col-sm-12">
            {!! Form::label('invoiceNo', 'Invoiceno:') !!}
        </td>
        <td>
            <p>{{ $vendordata->invoiceNo }}</p>
        </td>
    </tr>

    <!-- Invoiceamount Field -->
    <tr>
        <td class="col-sm-12">
            {!! Form::label('invoiceAmount', 'Invoiceamount:') !!}
        </td>
        <td>
            <p>{{ $vendordata->invoiceAmount }}</p>
        </td>
    </tr>

    <!-- Invoicemonth Field -->
    <tr>
        <td class="col-sm-12">
            {!! Form::label('invoiceMonth', 'Invoicemonth:') !!}
        </td>
        <td>
            <p>{{ $vendordata->invoiceMonth }}</p>
        </td>
    </tr>

    <!-- Invoiceyear Field -->
    <tr>
        <td class="col-sm-12">
            {!! Form::label('invoiceYear', 'Invoiceyear:') !!}
        </td>
        <td>
            <p>{{ $vendordata->invoiceYear }}</p>
        </td>
    </tr>

    <!-- Invoicedate Field -->
    <tr>
        <td class="col-sm-12">
            {!! Form::label('invoiceDate', 'Invoicedate:') !!}
        </td>
        <td>
            <p>{{ $vendordata->invoiceDate }}</p>
        </td>
    </tr>

    <!-- Addedby Field -->
    <tr>
        <td class="col-sm-12">
            {!! Form::label('addedBy', 'Addedby:') !!}
        </td>
        <td>
            <p>{{ $vendordata->addedBy }}</p>
        </td>
    </tr>
</table>
