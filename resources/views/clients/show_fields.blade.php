<table class="table table-bordered">
    <tr>
        <td class="col-sm-12">
            {!! Form::label('clientName', 'Clientname:') !!}
        </td>
        <td>
            <p>{{ $clients->clientName }}</p>
        </td>
    </tr>

    <tr>
        <td class="col-sm-12">
            {!! Form::label('clientLogo', 'Clientlogo:') !!}
        </td>
        <td>
            <p>{{ $clients->clientLogo }}</p>
        </td>
    </tr>

    <tr>
        <td class="col-sm-12">
            {!! Form::label('contactName', 'Contactname:') !!}
        </td>
        <td>
            <p>{{ $clients->contactName }}</p>
        </td>
    </tr>

    <tr>
        <td class="col-sm-12">
            {!! Form::label('mobileNo', 'Mobileno:') !!}
        </td>
        <td>
            <p>{{ $clients->mobileNo }}</p>
        </td>
    </tr>

    <tr>
        <td class="col-sm-12">
            {!! Form::label('email', 'Email:') !!}
        </td>
        <td>
            <p>{{ $clients->email }}</p>
        </td>
    </tr>

    <tr>
        <td class="col-sm-12">
            {!! Form::label('babAcctManagerId', 'Babacctmanagerid:') !!}
        </td>
        <td>
            <p>{{ $clients->babAcctManagerId }}</p>
        </td>
    </tr>

    <tr>
        <td class="col-sm-12">
            {!! Form::label('orderDate', 'Orderdate:') !!}
        </td>
        <td>
            <p>{{ $clients->orderDate }}</p>
        </td>
    </tr>

    <tr>
        <td class="col-sm-12">
            {!! Form::label('startDate', 'Startdate:') !!}
        </td>
        <td>
            <p>{{ $clients->startDate }}</p>
        </td>
    </tr>

    <tr>
        <td class="col-sm-12">
            {!! Form::label('bill_to', 'Bill To:') !!}
        </td>
        <td>
            <p>{{ $clients->bill_to }}</p>
        </td>
    </tr>

    <tr>
        <td class="col-sm-12">
            {!! Form::label('addedBy', 'Addedby:') !!}
        </td>
        <td>
            <p>{{ $clients->addedBy }}</p>
        </td>
    </tr>

    <tr>
        <td class="col-sm-12">
            {!! Form::label('addedDate', 'Addeddate:') !!}
        </td>
        <td>
            <p>{{ $clients->addedDate }}</p>
        </td>
    </tr>

    <tr>
        <td class="col-sm-12">
            {!! Form::label('clientStatus', 'Clientstatus:') !!}
        </td>
        <td>
            <p>{{ $clients->clientStatus }}</p>
        </td>
    </tr>
</table>
