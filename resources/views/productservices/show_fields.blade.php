<table class="table table-bordered">
    <tr>
        <td class="col-sm-4">
            {!! Form::label('productServiceName', 'Productservicename:') !!}
        </td>
        <td>
            <p>{{ $productservices->productServiceName }}</p>
        </td>
    </tr>

    <tr>
        <td class="col-sm-4">
            {!! Form::label('initiatedQuantity', 'Initiatedquantity:') !!}
        </td>
        <td>
            <p>{{ $productservices->initiatedQuantity }}</p>
        </td>
    </tr>

    <tr>
        <td class="col-sm-4">
            {!! Form::label('recurringFees', 'Recurringfees:') !!}
        </td>
        <td>
            <p>{{ $productservices->recurringFees }}</p>
        </td>
    </tr>

    <tr>
        <td class="col-sm-4">
            {!! Form::label('additionalFees', 'Additionalfees:') !!}
        </td>
        <td>
            <p>{{ $productservices->additionalFees }}</p>
        </td>
    </tr>

    <tr>
        <td class="col-sm-4">
            {!! Form::label('recurringPeriod', 'Recurringperiod:') !!}
        </td>
        <td>
            <p>{{ $productservices->recurringPeriod }}</p>
        </td>
    </tr>

    <tr>
        <td class="col-sm-4">
            {!! Form::label('addedBy', 'Addedby:') !!}
        </td>
        <td>
            <p>{{ $productservices->addedBy }}</p>
        </td>
    </tr>

    <tr>
        <td class="col-sm-4">
            {!! Form::label('addedDate', 'Addeddate:') !!}
        </td>
        <td>
            <p>{{ $productservices->addedDate }}</p>
        </td>
    </tr>

    <tr>
        <td class="col-sm-4">
            {!! Form::label('clientId', 'Clientid:') !!}
        </td>
        <td>
            <p>{{ $productservices->clientId }}</p>
        </td>
    </tr>

    <tr>
        <td class="col-sm-4">
            {!! Form::label('productServiceStatus', 'Productservicestatus:') !!}
        </td>
        <td>
            <p>{{ $productservices->productServiceStatus }}</p>
        </td>
    </tr>

    <tr>
        <td class="col-sm-4">
            {!! Form::label('vendorId', 'Vendorid:') !!}
        </td>
        <td>
            <p>{{ $productservices->vendorId }}</p>
        </td>
    </tr>
</table>
