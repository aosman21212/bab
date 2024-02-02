<div class="table-responsive">
    <table class="table" id="clientdatas-table">
        <thead>
        <tr>
            <th>Productserviceid</th>
        <th>Clientid</th>
        <th>Month</th>
        <th>Year</th>
        <th>Quantity</th>
        <th>Additionalquantity</th>
        <th>Additionalcost</th>
        <th>Totalmonthlydue</th>
        <th>Outstandingbalance</th>
        <th>Totaldue</th>
        <th>Addedby</th>
        <th>Updatedby</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($clientdatas as $clientdata)
            <tr>
                <td>{{ $clientdata->productServiceId }}</td>
            <td>{{ $clientdata->clientId }}</td>
            <td>{{ $clientdata->month }}</td>
            <td>{{ $clientdata->year }}</td>
            <td>{{ $clientdata->quantity }}</td>
            <td>{{ $clientdata->additionalQuantity }}</td>
            <td>{{ $clientdata->additionalCost }}</td>
            <td>{{ $clientdata->totalMonthlyDue }}</td>
            <td>{{ $clientdata->outstandingBalance }}</td>
            <td>{{ $clientdata->totalDue }}</td>
            <td>{{ $clientdata->addedBy }}</td>
            <td>{{ $clientdata->updatedBy }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['clientdatas.destroy', $clientdata->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('clientdatas.show', [$clientdata->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('clientdatas.edit', [$clientdata->id]) }}"
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
