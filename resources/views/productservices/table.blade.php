<div class="table-responsive">
    <table class="table" id="productservices-table">
        <thead>
        <tr>
            <th>Productservicename</th>
        <th>Initiatedquantity</th>
        <th>Recurringfees</th>
        <th>Additionalfees</th>
        <th>Recurringperiod</th>
        <th>Addedby</th>
        <th>Addeddate</th>
        <th>Clientid</th>
        <th>Productservicestatus</th>
        <th>Vendorid</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($productservices as $productservices)
            <tr>
                <td>{{ $productservices->productServiceName }}</td>
            <td>{{ $productservices->initiatedQuantity }}</td>
            <td>{{ $productservices->recurringFees }}</td>
            <td>{{ $productservices->additionalFees }}</td>
            <td>{{ $productservices->recurringPeriod }}</td>
            <td>{{ $productservices->addedBy }}</td>
            <td>{{ $productservices->addedDate }}</td>
            <td>{{ $productservices->clientId }}</td>
            <td>{{ $productservices->productServiceStatus }}</td>
            <td>{{ $productservices->vendorId }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['productservices.destroy', $productservices->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('productservices.show', [$productservices->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('productservices.edit', [$productservices->id]) }}"
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
