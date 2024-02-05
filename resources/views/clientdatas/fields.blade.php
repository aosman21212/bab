<!-- ProductServiceId Field -->
<div class="form-group col-sm-6">
    {!! Form::label('productServiceId', 'Service :') !!}
    {!! Form::select('productServiceId', $prod->pluck('productServiceName', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Select ProductServiceName', 'id' => 'productServiceId', 'onchange' => 'fetchInitiatedQuantity()']) !!}
</div>

<!-- InitiatedQuantity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('initiatedQuantity', 'Initiated Quantity:') !!}
    {!! Form::number('initiatedQuantity', null, ['class' => 'form-control']) !!}
</div>

<!-- AdditionalFees Field -->
<div class="form-group col-sm-6">
    {!! Form::label('additionalFees', 'Additional Fees:') !!}
    {!! Form::number('additionalFees', null, ['class' => 'form-control', 'oninput' => 'calculateAdditionalCost()']) !!}
</div>

<!-- ClientId Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clientId', 'Client name:') !!}
    {!! Form::select('clientId', $clients->pluck('clientName', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Select clients']) !!}
</div>

<!-- Month Field -->
<div class="form-group col-sm-6">
    {!! Form::label('month', 'Month:') !!}
    {!! Form::select('month', ['1' => 'January', '2' => 'February', '3' => 'March', '4' => 'April', '5' => 'May', '6' => 'June', '7' => 'July', '8' => 'August', '9' => 'September', '10' => 'October', '11' => 'November', '12' => 'December'], null, ['class' => 'form-control']) !!}
</div>

<!-- Year Field -->
<div class="form-group col-sm-6">
    {!! Form::label('year', 'Year:') !!}
    {!! Form::selectRange('year', date('Y'), date('Y') + 10, null, ['class' => 'form-control']) !!}
</div>

<!-- Quantity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantity', 'Quantity:') !!}
    {!! Form::number('quantity', null, ['class' => 'form-control', 'oninput' => 'calculateAdditionalQuantity()']) !!}
</div>

<!-- AdditionalQuantity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('additionalQuantity', 'Additional Quantity:') !!}
    {!! Form::number('additionalQuantity', null, ['class' => 'form-control', 'readonly' => 'readonly', 'oninput' => 'calculateAdditionalCost()']) !!}
</div>

<!-- AdditionalCost Field -->
<div class="form-group col-sm-6">
    {!! Form::label('additionalCost', 'Additional Cost:') !!}
    {!! Form::number('additionalCost', null, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
</div>

<!-- TotalMonthlyDue Field -->
<div class="form-group col-sm-6">
    {!! Form::label('totalMonthlyDue', 'Total Monthly Due:') !!}
    {!! Form::number('totalMonthlyDue', null, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
</div>

<!-- OutstandingBalance Field -->
<div class="form-group col-sm-6">
    {!! Form::label('outstandingBalance', 'Outstanding Balance:') !!}
    {!! Form::number('outstandingBalance', null, ['class' => 'form-control']) !!}
</div>

<!-- AddedBy Field -->
<div class="form-group col-sm-6">
    {!! Form::label('addedBy', 'Added by:') !!}
    {!! Form::number('addedBy', auth()->id(), ['class' => 'form-control', 'readonly' => 'readonly']) !!}
</div>

<!-- TotalDue Field -->
<div class="form-group col-sm-6">
    {!! Form::label('totalDue', 'Total Due:') !!}
    {!! Form::number('totalDue', null, ['class' => 'form-control']) !!}
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
function fetchInitiatedQuantity() {
    var selectedProductId = document.getElementById('productServiceId').value;

    // Fetch initiatedQuantity and AdditionalFees based on the selected productServiceId
    var initiatedQuantity = {!! json_encode($prod->pluck('initiatedQuantity', 'id')) !!}[selectedProductId] || 0;
    var additionalFees = {!! json_encode($prod->pluck('additionalFees', 'id')) !!}[selectedProductId] || 0;

    // Set the fetched initiatedQuantity and AdditionalFees to the respective fields
    document.getElementById('initiatedQuantity').value = initiatedQuantity;
    document.getElementById('additionalFees').value = additionalFees;

    // Calculate AdditionalQuantity when initiatedQuantity and quantity change
    calculateAdditionalQuantity();
}

function calculateAdditionalQuantity() {
    var quantity = parseFloat(document.getElementById('quantity').value);
    var initiatedQuantity = parseFloat(document.getElementById('initiatedQuantity').value);

    var additionalQuantity = (quantity >= initiatedQuantity) ? 
                             ((quantity - initiatedQuantity) / 1000).toString().toUpperCase() : 
                             '0';
    
    document.getElementById('additionalQuantity').value = additionalQuantity;

    // Calculate AdditionalCost when AdditionalQuantity or AdditionalFees changes
    calculateAdditionalCost();

    // Set TotalMonthlyDue equal to AdditionalCost
    document.getElementById('totalMonthlyDue').value = document.getElementById('additionalCost').value;

    // Calculate TotalDue whenever totalMonthlyDue changes
    calculateTotalDue();
}

function calculateAdditionalCost() {
    var additionalQuantity = parseFloat(document.getElementById('additionalQuantity').value);
    var additionalFees = parseFloat(document.getElementById('additionalFees').value);

    var additionalCost = isNaN(additionalQuantity) || isNaN(additionalFees) ? 0 : additionalQuantity * additionalFees;

    document.getElementById('additionalCost').value = additionalCost;
}

function calculateTotalDue() {
    var totalMonthlyDue = parseFloat(document.getElementById('totalMonthlyDue').value) || 0;
    var outstandingBalance = parseFloat(document.getElementById('outstandingBalance').value) || 0;

    var totalDue = totalMonthlyDue - outstandingBalance;

    document.getElementById('totalDue').value = totalDue;
}


// Fetch the initiatedQuantity when the page loads
window.onload = fetchInitiatedQuantity;
</script>
