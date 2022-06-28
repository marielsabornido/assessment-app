@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('layouts.actions')

        <div class="col">
            <div class="card">
                <div class="card-header">
                  <a class="btn btn-secondary" href="{{ route('home') }}">
                        <span class="material-icons align-middle">arrow_back</span>
                  </a>

                  <span class="h3 ms-2 align-middle">Enroll a student</span>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('student-store') }}">
                    @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="student_number" class="col-form-label">Student #</label>

                                        <div>
                                            <input id="student_number" type="text" label="Student Number" class="form-control @error('student_number') is-invalid @enderror" name="student_number" value="{{ old('student_number') }}" required autofocus>

                                            @error('student_number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <label for="name" class="col-form-label">First Name</label>

                                        <div>
                                            <input id="first_name" type="text" label="First Name" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required>

                                            @error('first_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="name" class="col-form-label">Last Name</label>

                                        <div>
                                            <input id="last_name" type="text" label="Last Name" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required>

                                            @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <label for="program_id" class="col-form-label">Select Program</label>

                                        <select id="program_id" name="program_id" class="form-select @error('program_id') is-invalid @enderror" aria-label="Select Program" value="{{ old('program_id') }}">
                                            <option {{ old('program_id') ? '' : 'selected'}} disabled>Open this to select a program</option>

                                            @foreach ($programs as $program)
                                                <option {{ old('program_id') == $program->id ? 'selected' : ''}} value="{{ $program->id }}">{{ $program->name }} ({{ $program->acronym }}) - {{ $program->courses->count() }} course/s</option>
                                            @endforeach
                                        </select>

                                        @error('program_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <label class="col-form-label" id="head-course">Select Courses</label>

                                        @foreach ($programs->pluck('courses')->flatten() as $course)
                                            <div class="form-check course-program-checkbox course-program-checkbox-{{ $course->program_id }}">
                                                <input {{ old('course_ids') ? (in_array($course->id, old('course_ids')) ? 'checked' : '') : '' }} class="form-check-input course-program-{{ $course->program_id }} course-checkbox" type="checkbox" name="course_ids[]" value="{{ $course->id }}" id="course-{{ $course->id }}">
                                                
                                                <label class="form-check-label" for="course-{{ $course->id }}">
                                                    {{ $course->name }} - {{ $course->code }}
                                                </label>
                                            </div>
                                        @endforeach

                                        <label class="col-form-label text-muted" id="no-course">No Courses Available</label>

                                        @error('course_ids')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <label class="col-form-label">Date Enrolled</label>

                                        <div>
                                            <input type="datetime-local" class="form-control @error('date_enrolled') is-invalid @enderror" name="date_enrolled" value="{{ old('date_enrolled') }}">

                                            @error('date_enrolled')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                <div class="row mt-4">
                                    <div>
                                        <button type="submit" class="btn btn-primary w-100" onclick="this.disabled = true; this.form.submit();">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('head') <script src="{{ asset('js/student.js')}}"></script> @endpush

@endsection
