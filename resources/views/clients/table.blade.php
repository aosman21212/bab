<div class="table-responsive">
    <table class="table" id="clients-table">
        <thead>
        <tr>
            <th>Clientname</th>
        <th>Clientlogo</th>
        <th>Contactname</th>
        <th>Mobileno</th>
        <th>Email</th>
        <th>Babacctmanagerid</th>
        <th>Orderdate</th>
        <th>Startdate</th>
        <th>Bill To</th>
        <th>Addedby</th>
        <th>Addeddate</th>
        <th>Clientstatus</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($clients as $clients)
            <tr>
                <td>{{ $clients->clientName }}</td>
            <td> <!-- In your show.blade.php file -->
<img src="{{ asset('storage/' . $clients->clientLogo) }}" alt="clientLogo Logo">
</td>
     
            <td>{{ $clients->contactName }}</td>
            <td>{{ $clients->mobileNo }}</td>
            <td>{{ $clients->email }}</td>
            <td>{{ $clients->babAcctManagerId }}</td>
            <td>{{ $clients->orderDate }}</td>
            <td>{{ $clients->startDate }}</td>
            <td>{{ $clients->bill_to }}</td>
            <td>{{ $clients->addedBy }}</td>
            <td>{{ $clients->addedDate }}</td>
            <td>{{ $clients->clientStatus }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['clients.destroy', $clients->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('clients.show', [$clients->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('clients.edit', [$clients->id]) }}"
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
