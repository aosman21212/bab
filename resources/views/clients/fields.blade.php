<div class="form-group mb-3">
                                    {!! Form::label('clientName', 'Clientname:', ['class' => 'form-label']) !!}
                                    {!! Form::text('clientName', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
                                </div>

                                <!-- Clientlogo Field
                                <div class="form-group mb-3">
                                    {!! Form::label('clientLogo', 'Clientlogo:', ['class' => 'form-label']) !!}
                                    {!! Form::file('clientLogo', ['class' => 'form-control-file']) !!}
                                </div> -->
<!-- Vendor Logo Field -->
<div class="form-group mb-25">
    <label for="clientLogo">Logo:</label>
    @if(isset($clients) && isset($clients->clientLogo))
        <img src="{{ asset('storage/' . $clients->clientLogo) }}" alt="Vendor Logo" style="max-width: 100px;">
        <br>
    @endif
    <input type="file" name="clientLogo" class="form-control form-control-lg">
</div>
                                <!-- Contactname Field -->
                                <div class="form-group mb-3">
                                    {!! Form::label('contactName', 'Contactname:', ['class' => 'form-label']) !!}
                                    {!! Form::text('contactName', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
                                </div>

                                <!-- Mobileno Field -->
                                <div class="form-group mb-3">
                                    {!! Form::label('mobileNo', 'Mobileno:', ['class' => 'form-label']) !!}
                                    {!! Form::text('mobileNo', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
                                </div>

                                <!-- Email Field -->
                                <div class="form-group mb-3">
                                    {!! Form::label('email', 'Email:', ['class' => 'form-label']) !!}
                                    {!! Form::email('email', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
                                </div>

                                <div class="form-group mb-3">
                                    {!! Form::label('babAcctManagerId', 'AcctManager:', ['class' => 'form-label']) !!}
                                    {!! Form::select('babAcctManagerId', $babacctmanagers->pluck('AcctManagerName', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Select clients']) !!}
                                </div>
<!-- Orderdate Field -->
<div class="form-group mb-3">
    {!! Form::label('orderDate', 'Orderdate:', ['class' => 'form-label']) !!}
    {!! Form::date('orderDate', isset($orderData) ? $orderData->orderDate : null, ['class' => 'form-control', 'id' => 'orderDate']) !!}
</div>

<!-- Startdate Field -->
<div class="form-group mb-3">
    {!! Form::label('startDate', 'Startdate:', ['class' => 'form-label']) !!}
    {!! Form::date('startDate', isset($orderData) ? $orderData->startDate : null, ['class' => 'form-control', 'id' => 'startDate']) !!}
</div>

                                <!-- Bill To Field -->
                                <div class="form-group mb-3">
                                    {!! Form::label('bill_to', 'Bill To:', ['class' => 'form-label']) !!}
                                    {!! Form::text('bill_to', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
                                </div>

                                <!-- Hidden Added By Field -->
                                <div class="form-group mb-3" style="display: none;">
                                    {!! Form::label('addedBy', 'Added By:', ['class' => 'form-label']) !!}
                                    {!! Form::number('addedBy', auth()->id(), ['class' => 'form-control', 'readonly' => 'readonly']) !!}
                                </div>

                                <div class="form-group mb-3">
                                    {!! Form::label('clientStatus', 'Status:', ['class' => 'form-label']) !!}
                                    {!! Form::select('clientStatus', ['Active' => 'Active', 'Inactive' => 'Inactive'], null, ['class' => 'form-control']) !!}
                                </div>