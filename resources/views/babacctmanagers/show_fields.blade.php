<table class="table table-bordered">
    <tr>
        <td class="col-sm-12">
            {!! Form::label('AcctManagerName', 'Acctmanagername:') !!}
        </td>
        <td>
            <p>{{ $babacctmanagers->AcctManagerName }}</p>
        </td>
    </tr>

    <tr>
        <td class="col-sm-12">
            {!! Form::label('AcctManagerContact', 'Acctmanagercontact:') !!}
        </td>
        <td>
            <p>{{ $babacctmanagers->AcctManagerContact }}</p>
        </td>
    </tr>

    <tr>
        <td class="col-sm-12">
            {!! Form::label('AcctManagerEmail', 'Acctmanageremail:') !!}
        </td>
        <td>
            <p>{{ $babacctmanagers->AcctManagerEmail }}</p>
        </td>
    </tr>

    <tr>
        <td class="col-sm-12">
            {!! Form::label('AcctManagerStatus', 'Acctmanagerstatus:') !!}
        </td>
        <td>
            <p>{{ $babacctmanagers->AcctManagerStatus }}</p>
        </td>
    </tr>

    <tr>
        <td class="col-sm-12">
            {!! Form::label('addedBy', 'Addedby:') !!}
        </td>
        <td>
            <p>{{ $babacctmanagers->addedBy }}</p>
        </td>
    </tr>
</table>
