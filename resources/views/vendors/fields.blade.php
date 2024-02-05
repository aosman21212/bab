<!-- Vendorname Field -->
<div class="form-group mb-25">
    <label>vendorName</label>
    <input type="text" name="vendorName" class="form-control form-control-lg" maxlength="255" placeholder="Duran Clayton" value="{{ old('vendorName', isset($vendors) ? $vendors->vendorName : '') }}">
</div>

<!-- Vendor Logo Field -->
<div class="form-group mb-25">
    <label for="vendorLogo">Logo:</label>
    @if(isset($vendors) && isset($vendors->vendorLogo))
        <img src="{{ asset('storage/' . $vendors->vendorLogo) }}" alt="Vendor Logo" style="max-width: 100px;">
        <br>
    @endif
    <input type="file" name="vendorLogo" class="form-control form-control-lg">
</div>

<!-- Vendor Status Field -->
<div class="form-group mb-25">
    <label for="vendorStatus">Status:</label>
    <select name="vendorStatus" class="form-control form-control-lg">
        <option value="Active" {{ old('vendorStatus', isset($vendors) && $vendors->vendorStatus == 'Active' ? 'selected' : '') }}>Active</option>
        <option value="Inactive" {{ old('vendorStatus', isset($vendors) && $vendors->vendorStatus == 'Inactive' ? 'selected' : '') }}>Inactive</option>
    </select>
</div>

<!-- Hidden Added By Field -->
<div  class="form-group mb-25"style="display: none;">
    <label for="addedBy">Added By:</label>
    <input type="number" name="addedBy" class="form-control form-control-lg" readonly value="{{ auth()->id() }}">
</div>


