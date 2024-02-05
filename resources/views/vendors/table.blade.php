<div class="container mt-4">
    <div class="table-responsive">
        <table class="table table-sm table-bordered" id="vendors-table">
            <thead class="thead-light">
                <tr>
                    <th>Name</th>
                    <th>Logo</th>
                    <th>Added By</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vendors as $vendor)
                    <tr>
                        <td>{{ $vendor->vendorName }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $vendor->vendorLogo) }}" alt="Vendor Logo" class="img-thumbnail" style="max-width: 80px; max-height: 40px;">
                        </td>
                        <td>{{ $vendor->addedby->name }}</td>
<!-- Inside the loop -->
<td>
    <div class="orderDatatable-status d-inline-block">
        <span class="order-bg-opacity-success text-success rounded-pill active">{{ $vendor->vendorStatus }}</span>
    </div>
</td>
                        <!-- Inside the loop -->
<td>
    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap float-right">
        <li>
            <a href="{{ route('vendors.show', [$vendor->id]) }}" class="view">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
            </a>
        </li>
        <li>
            <a href="{{ route('vendors.edit', [$vendor->id]) }}" class="edit">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
            </a>
        </li>
        <li>
            <a href="#" class="remove" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $vendor->id }}').submit();">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                    <polyline points="3 6 5 6 21 6"></polyline>
                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                    <line x1="10" y1="11" x2="10" y2="17"></line>
                    <line x1="14" y1="11" x2="14" y2="17"></line>
                </svg>
            </a>
            {!! Form::open(['route' => ['vendors.destroy', $vendor->id], 'method' => 'delete', 'id' => 'delete-form-' . $vendor->id, 'style' => 'display:none;']) !!}
            {!! Form::close() !!}
        </li>
    </ul>
</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
