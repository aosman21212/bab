






@extends('layouts.app')

@section('content')


<div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">
                    <h1>Create babacctmanagers</h1>

                    </h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <div class="action-btn">

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">

            <div class="col-lg-12">
                <div class="card card-Vertical card-default card-md mb-4">
               
                    @include('adminlte-templates::common.errors')

                    <div class="card-body py-md-30">
                    {!! Form::open(['route' => 'vendors.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                    {!! Form::open(['route' => 'babacctmanagers.store']) !!}

<div class="card-body">
    <div class="row">
    @include('babacctmanagers.fields')
    </div>
</div>

<div class="card-footer">
            <div class="layout-button mt-0">
<a href="{{ route('babacctmanagers.index') }}" class="btn btn-default btn-squared border-normal bg-normal px-20">Cancel</a>
<button type="submit" class="btn btn-primary btn-default btn-squared px-30">Save</button>
</div>

{!! Form::close() !!}
                    </div>
                </div>
                <!-- ends: .card -->

            </div>
        </div>
    </div>
@endsection
