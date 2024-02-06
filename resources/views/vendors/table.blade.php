<div class="table4 table5 p-25 bg-white">
    <div class="table-responsive">
        <table class="table mb-0">
            <thead>
                <tr class="userDatatable-header">
                    <th>
                        <div class="userDatatable-title">
                            Name
                        </div>
                    </th>
                    <th>
                        <div class="userDatatable-title">
                            Logo
                        </div>
                    </th>
                    <th>
                        <div class="userDatatable-title">
                            Added By
                        </div>
                    </th>
                    <th>
                        <div class="userDatatable-title">
                            Status
                        </div>
                    </th>
                    <th>
                        <div class="userDatatable-title">
                            Action
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($vendors as $vendor)
                <tr>
                    <td>
                        <div class="userDatatable-content">
                            {{ $vendor->vendorName }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            <img src="{{ asset('storage/' . $vendor->vendorLogo) }}" alt="Vendor Logo" class="img-thumbnail" style="max-width: 80px; max-height: 40px;">
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            {{ $vendor->addedby->name }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            <span class="order-bg-opacity-success text-success rounded-pill active">{{ $vendor->vendorStatus }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content">
                            <ul class="orderDatatable_actions mb-0 d-flex flex-wrap float-right">
                                <li>
                                    <a href="{{ route('vendors.show', [$vendor->id]) }}" class="view">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('vendors.edit', [$vendor->id]) }}" class="edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="remove" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $vendor->id }}').submit();">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                    <form action="{{ route('vendors.destroy', [$vendor->id]) }}" method="POST" id="delete-form-{{ $vendor->id }}" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-between align-items-center mt-30">
        <div class="pagination-total-text">1-{{ count($vendors) }} of {{ count($vendors) }} items</div>
        <div>
            {{ $vendors->links() }}
        </div>
    </div>
</div>
