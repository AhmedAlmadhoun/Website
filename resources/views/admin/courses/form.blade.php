{{-- name	details	start_course	end_course	address	hours_count	days_count	time	coach_id --}}
<div class="form-group">
    <label for="name">{{ __('site.name') }}</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ $course->name }}">
</div>
<div class="input-group">
    <span class="input-group-btn">
      <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
        <i class="fa fa-picture-o"></i> Choose
      </a>
    </span>
    <input id="thumbnail" class="form-control" type="text" name="image">
  </div>
  <div id="holder" style="margin-top:15px;max-height:100px;"></div>

<div class="form-group">
    <label for="start_course">{{ __('site.start_course') }}</label>
    <input type="date" name="start_course" id="start_course" class="form-control" value="{{ $course->start_course }}">
</div>
<div class="form-group">
    <label for="end_course">{{ __('site.end_course') }}</label>
    <input type="date" name="end_course" id="end_course" class="form-control" value="{{ $course->end_course }}">
</div>
<div class="form-group">
    <label for="address">{{ __('site.address') }}</label>
    <input type="text" name="address" id="address" class="form-control"  value="{{ $course->address }}">
</div>
<div class="form-group">
    <label for="hours_count">{{ __('site.hours_count') }}</label>
    <input type="number" name="hours_count" id="hours_count" class="form-control" value="{{ $course->hours_count }}">
</div>
<div class="form-group">
    <label for="days_count">{{ __('site.days_count') }}</label>
    <input type="number" name="days_count" id="days_count" class="form-control" value="{{ $course->days_count }}">
</div>
<div class="form-group">
    <label for="time">{{ __('site.time') }}</label>
    <input type="time" name="time" id="time" class="form-control" value="{{ $course->time }}">
</div>
<div class="form-group">
    <label for="details">{{ __('site.details') }}</label>
    {{-- <textarea name="details" id="" >
        {{ $course->details  }}
    </textarea> --}}
    <textarea name="details" class="tinyedit form-control @error('details') is-invalid @enderror">{{ old('details', $course->details) }}</textarea>
    @error('details')
        <span class="invalid-feedback">{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    <label for="coach_id">{{ __('site.coach') }}</label>
    <select name="coach_id" id="coach_id" class="form-control">
        <option value="">Select Coach</option>
        @foreach ($coaches as $coach)
            {{-- <option value="{{ $coach->id }}">{{ $coach->name }}</option> --}}
            <option {{ $course->coach_id == $coach->id ? 'selected' : ''  }} value="{{ $coach->id }}">{{ $coach->name }}</option>

        @endforeach
    </select>
</div>
