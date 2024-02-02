<div class="table-responsive">
    <table class="table" id="vendors-table">
        <thead>
        <tr>
            <th>Vendorname</th>
        <th>Vendorlogo</th>
        <th>Addedby</th>
        <th>Vendorstatus</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($vendors as $vendors)
            <tr>
                <td>{{ $vendors->vendorName }}</td>
            <td> <!-- In your show.blade.php file -->
<img src="{{ asset('storage/' . $vendors->vendorLogo) }}" alt="Vendor Logo">
</td>
            <td>{{ $vendors->addedBy }}</td>
            <td>{{ $vendors->vendorStatus }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['vendors.destroy', $vendors->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('vendors.show', [$vendors->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('vendors.edit', [$vendors->id]) }}"
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
