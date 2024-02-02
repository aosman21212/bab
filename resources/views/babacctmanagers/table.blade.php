<div class="table-responsive">
    <table class="table" id="babacctmanagers-table">
        <thead>
        <tr>
            <th>Acctmanagername</th>
        <th>Acctmanagercontact</th>
        <th>Acctmanageremail</th>
        <th>Acctmanagerstatus</th>
        <th>Addedby</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($babacctmanagers as $babacctmanagers)
            <tr>
                <td>{{ $babacctmanagers->AcctManagerName }}</td>
            <td>{{ $babacctmanagers->AcctManagerContact }}</td>
            <td>{{ $babacctmanagers->AcctManagerEmail }}</td>
            <td>{{ $babacctmanagers->AcctManagerStatus }}</td>
            <td>{{ $babacctmanagers->addedBy }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['babacctmanagers.destroy', $babacctmanagers->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('babacctmanagers.show', [$babacctmanagers->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('babacctmanagers.edit', [$babacctmanagers->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
