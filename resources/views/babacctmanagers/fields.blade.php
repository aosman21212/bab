<!-- Acctmanagername Field -->
<div class="form-group col-sm-6">
    {!! Form::label('AcctManagerName', 'Acctmanagername:') !!}
    {!! Form::text('AcctManagerName', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Acctmanagercontact Field -->
<div class="form-group col-sm-6">
    {!! Form::label('AcctManagerContact', 'Acctmanagercontact:') !!}
    {!! Form::text('AcctManagerContact', null, ['class' => 'form-control','maxlength' => 20,'maxlength' => 20]) !!}
</div>

<!-- Acctmanageremail Field -->
<div class="form-group col-sm-6">
    {!! Form::label('AcctManagerEmail', 'Acctmanageremail:') !!}
    {!! Form::text('AcctManagerEmail', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>


<!-- Acct Manager Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('AcctManagerStatus', 'Acct Manager Status:') !!}
    {!! Form::select('AcctManagerStatus', ['Active' => 'Active', 'Inactive' => 'Inactive'], null, ['class' => 'form-control']) !!}
</div>
<!-- Hidden Added By Field -->
<div class="form-group col-sm-6" style="display: none;">
    {!! Form::label('addedBy','Added By:') !!}
    {!! Form::number('addedBy', auth()->id(), ['class' => 'form-control', 'readonly' => 'readonly']) !!}
</div>


