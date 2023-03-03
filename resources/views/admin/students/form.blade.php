<div class="form-group">
    <label for="name">{{ __('site.name') }}</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ $student->name }}">
</div>
<div class="form-group">
    <label for="id_number">{{ __('site.id_number') }}</label>
    <input type="text" name="id_number" id="id_number" class="form-control" value="{{ $student->id_number }}">
</div>
<div class="form-group">
    <label for="phone">{{ __('site.phone') }}</label>
    <input type="text" name="phone" id="phone" class="form-control" value="{{ $student->phone }}" >
</div>
<div class="form-group">
    <label for="email">{{ __('site.email') }}</label>
    <input type="email" name="email" id="email" class="form-control" value="{{ $student->email }}" >
</div>
<div class="form-group">
    <label for="gender">{{ __('site.gender') }}</label>
    <select name="gender" id="gender" class="form-control">
        <option value="">Select Gender</option>
        <option {{ $student->gender == 'Male'   ? 'selected' : '' }}>{{ __('site.male') }}</option>
        <option {{ $student->gender == 'Female' ? 'selected' : '' }}>{{ __('site.female') }}</option>
    </select>

</div>
<div class="form-group">
    <label for="address">{{ __('site.address') }}</label>
    <input type="text" name="address" id="address" class="form-control" value="{{ $student->address }}" >
</div>
<div class="form-group">
    <label for="date_of_birth">{{ __('site.date_of_birth') }}</label>
    <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" value="{{ $student->date_of_birth }}">
</div>
<div class="form-group">
    <label for="degree_id">{{ __('site.degree') }}</label>
    <select name="degree_id" id="degree_id" class="form-control">
        <option value="">Select Degree</option>
        @foreach ($degrees as $degree)
            <option {{ $student->degree_id == $degree->id ? 'selected' : ''  }}   value="{{ $degree->id }}">{{ $degree->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="course_id">{{ __('site.course') }}</label>
    <select name="course_id" id="course_id" class="form-control">
        <option value="">Select Course</option>
        @foreach ($courses as $course)

            <option {{ $student->course_id == $course->id ? 'selected' : ''  }}   value="{{ $course->id }} ">{{ $course->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="coach_id">{{ __('site.coach') }}</label>
    <select name="coach_id" id="coach_id" class="form-control">
        <option value="">Select Coach</option>
        @foreach ($coaches as $coach)
        {{-- <option {{ $course->coach_id == $coach->id ? 'selected' : ''  }} value="{{ $coach->id }}">{{ $coach->name }}</option> --}}

            <option {{ $student->coach_id == $coach->id ? 'selected' : ''  }}   value="{{ $coach->id }}">{{ $coach->name }}</option>
        @endforeach
    </select>
</div>
