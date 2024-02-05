


@extends('layouts.app')

@section('content')




    





<div class="col-lg-6">
                            <div class="card card-default card-md mb-4">
                                <div class="card-header">
                                    <h6>Edit vendors</h6>
                                </div>
                                <div class="card-body">
                                @include('adminlte-templates::common.errors')

                                    <div class="basic-form-wrapper">
                                    {!! Form::model($vendors, ['route' => ['vendors.update', $vendors->id], 'method' => 'patch']) !!}


<div class="card-body">
    <div class="row">
    @include('vendors.fields')
    </div>
</div>

<div class="card-footer">
            <div class="layout-button mt-0">
<a href="{{ route('vendors.index') }}" class="btn btn-default btn-squared border-normal bg-normal px-20">Cancel</a>
<button type="submit" class="btn btn-primary btn-default btn-squared px-30">Save</button>
</div>

{!! Form::close() !!}

                                    </div>
                                </div>
                            </div>
                            <!-- ends: .card -->

                        </div>
                        @endsection



