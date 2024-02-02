<div class="table-responsive">
    <table class="table" id="vendordatas-table">
        <thead>
        <tr>
            <th>Productserviceid</th>
        <th>Invoiceno</th>
        <th>Invoiceamount</th>
        <th>Invoicemonth</th>
        <th>Invoiceyear</th>
        <th>Invoicedate</th>
        <th>Addedby</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($vendordatas as $vendordata)
            <tr>
                <td>{{ $vendordata->productServiceId }}</td>
            <td>{{ $vendordata->invoiceNo }}</td>
            <td>{{ $vendordata->invoiceAmount }}</td>
            <td>{{ $vendordata->invoiceMonth }}</td>
            <td>{{ $vendordata->invoiceYear }}</td>
            <td>{{ $vendordata->invoiceDate }}</td>
            <td>{{ $vendordata->addedBy }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['vendordatas.destroy', $vendordata->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('vendordatas.show', [$vendordata->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('vendordatas.edit', [$vendordata->id]) }}"
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
