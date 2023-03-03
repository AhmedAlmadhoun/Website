
{{-- 	name	title	email	phone --}}
<div class="form-group">
    <label for="name">{{ __('site.name') }}</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ $suggested->name }}">
</div>
<div class="form-group">
    <label for="title">{{ __('site.title') }}</label>
    <input type="text" name="title" id="title" class="form-control" value="{{ $suggested->name }}">
</div>
<div class="form-group">
    <label for="email">{{ __('site.email') }}</label>
    <input type="email" name="email" id="email" class="form-control" value="{{ $suggested->name }}" >
</div>
<div class="form-group">
    <label for="phone">{{ __('site.phone') }}</label>
    <input type="number" name="phone" id="phone" class="form-control" value="{{ $suggested->name }}" >
</div>

