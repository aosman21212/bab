






@extends('layouts.app')

@section('content')



<div class="col-lg-6">
                            <div class="card card-default card-md mb-4">
                                <div class="card-header">
                                    <h6>Edit clients</h6>
                                </div>
                                <div class="card-body">
                                @include('adminlte-templates::common.errors')

                                    <div class="basic-form-wrapper">
                                    {!! Form::model($clients, ['route' => ['clients.update', $clients->id], 'method' => 'patch','enctype' => 'multipart/form-data']) !!}


<div class="card-body">
    <div class="row">
    @include('clients.fields')
    </div>
</div>

<div class="card-footer">
            <div class="layout-button mt-0">
<a href="{{ route('clients.index') }}" class="btn btn-default btn-squared border-normal bg-normal px-20">Cancel</a>
<button type="submit" class="btn btn-primary btn-default btn-squared px-30">Save</button>
</div>

{!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                            <!-- ends: .card -->

                        </div>
                        @endsection