

{{-- name	id_number	phone	email	gender	address	notes	status	 --}}

<div class="form-group">
    <label for="name">{{ __('site.name') }}</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ $coach->name }}">
</div>
<div class="form-group">
    <label for="id_number">{{ __('site.id_number') }}</label>
    <input type="text" name="id_number" id="id_number" class="form-control" value="{{ $coach->id_number }}">
</div>
<div class="form-group">
    <label for="phone">{{ __('site.phone') }}</label>
    <input type="number" name="phone" id="phone" class="form-control" value="{{ $coach->phone }}" >
</div>
<div class="form-group">
    <label for="email">{{ __('site.email') }}</label>
    <input type="email" name="email" id="email" class="form-control" value="{{ $coach->email }}" >
</div>
<div class="form-group">
    <label for="gender">{{ __('site.gender') }}</label>
    <select name="gender" id="gender" class="form-control">
        <option value="">Select Gender</option>
        <option value="Male" {{ $coach->gender == 'Male'   ? 'selected' : '' }} >{{ __('site.male') }}</option>
        <option  value="Female"  {{ $coach->gender == 'Female' ? 'selected' : '' }}>{{ __('site.female') }}</option>
    </select>

</div>
<div class="form-group">
    <label for="address">{{ __('site.address') }}</label>
    <input type="text" name="address" id="notes" class="form-control" value="{{ $coach->name }}" value="{{ $coach->address }}">
</div>
<div class="form-group">
    <label for="notes">{{ __('site.notes') }}</label>
    <input type="text" name="notes" id="notes" class="form-control" value="{{ $coach->notes }}">
</div>

<div class="form-group">
    <label for="gender">{{ __('site.status') }}</label>
    <select name="status" id="status" class="form-control">
        <option value="">Select Status</opticourseson>
        <option value="Active"   {{ $coach->status == 'Active'   ? 'selected' : '' }}>{{ __('site.active') }}</option>
        <option value="Inactive"  {{ $coach->status == 'Active'   ? 'Inactive' : '' }} >{{ __('site.inactive') }}</option>
    </select>

</div>

