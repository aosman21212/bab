<!-- Clientname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clientName', 'Clientname:') !!}
    {!! Form::text('clientName', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>


<!-- Clientlogo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clientLogo', 'Clientlogo:') !!}
    {!! Form::file('clientLogo', ['class' => 'form-control']) !!}
</div>

<!-- Contactname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contactName', 'Contactname:') !!}
    {!! Form::text('contactName', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Mobileno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mobileNo', 'Mobileno:') !!}
    {!! Form::text('mobileNo', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>


<div class="form-group col-sm-6">
{!! Form::label('babAcctManagerId', 'Babacctmanagerid:') !!}
    {!! Form::select('babAcctManagerId', $babacctmanagers->pluck('AcctManagerName', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Select clients']) !!}
</div>
<!-- Orderdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('orderDate', 'Orderdate:') !!}
    {!! Form::text('orderDate', null, ['class' => 'form-control','id'=>'orderDate']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#orderDate').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Startdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('startDate', 'Startdate:') !!}
    {!! Form::text('startDate', null, ['class' => 'form-control','id'=>'startDate']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#startDate').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Bill To Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bill_to', 'Bill To:') !!}
    {!! Form::text('bill_to', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Hidden Added By Field -->
<div class="form-group col-sm-6" style="display: none;">
    {!! Form::label('addedBy','Added By:') !!}
    {!! Form::number('addedBy', auth()->id(), ['class' => 'form-control', 'readonly' => 'readonly']) !!}
</div>





@push('page_scripts')
    <script type="text/javascript">
        $('#addedDate').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush


<div class="form-group col-sm-6">
{!! Form::label('clientStatus', 'Clientstatus:') !!}
    {!! Form::select('clientStatus', ['Active' => 'Active', 'Inactive' => 'Inactive'], null, ['class' => 'form-control']) !!}
</div>