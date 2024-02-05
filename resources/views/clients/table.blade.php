





<div class="container mt-4">
    <div class="table-responsive" style="overflow-x: auto;">
        <table class="table" id="vendors-table">
        <thead>
        <tr>
            <th>name</th>
        <th>logo</th>
        <th>Contactname</th>
        <th>Mobile no</th>
        <th>Email</th>
        <th>Acctmanager name </th>
        <th>Order date</th>
        <th>Start date</th>
        <th>status</th>
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
            <td>{{ $clients->babAcctManager->AcctManagerName }}</td>
            <td>{{ $clients->orderDate->format('Y-m-d') }}</td>
           <td>{{ $clients->startDate->format('Y-m-d') }}</td>
            <td>
    <div class="orderDatatable-status d-inline-block">
        <span class="order-bg-opacity-success text-success rounded-pill active"> {{ $clients->clientStatus }}</span>
    </div>
</td>
<td width="120">
    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap float-right">
        <li>
            <a href="{{route('clients.show', [$clients->id]) }}" class="view">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
            </a>
        </li>
        <li>
            <a href="{{ route('clients.edit', [$clients->id]) }}" class="edit">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
            </a>
        </li>
        <li>
            <a href="#" class="remove" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $clients->id }}').submit();">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                    <polyline points="3 6 5 6 21 6"></polyline>
                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                    <line x1="10" y1="11" x2="10" y2="17"></line>
                    <line x1="14" y1="11" x2="14" y2="17"></line>
                </svg>
            </a>
            {!! Form::open(['route' => ['clients.destroy', $clients->id], 'method' => 'delete', 'id' => 'delete-form-'.$clients->id, 'style' => 'display:none;']) !!}
                {!! Form::hidden('_method', 'DELETE') !!}
                {!! Form::hidden('_token', csrf_token()) !!}
            {!! Form::close() !!}
        </li>
    </ul>
</td>

<!-- ... (continue with your existing code) ... -->

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
