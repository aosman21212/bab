@push('third_party_stylesheets')
    @include('layouts.datatables_css')
@endpush

<div class="container">
    <div class="row">
        <div class="col-md-12">
            {!! $dataTable->table([
                'width' => '100%', // Adjust the width as needed
                'class' => 'table table-striped table-bordered' // Add or modify classes as needed
            ]) !!}
        </div>
    </div>
</div>
@push('third_party_scripts')
    @include('layouts.datatables_js')
    {!! $dataTable->scripts() !!}
@endpush