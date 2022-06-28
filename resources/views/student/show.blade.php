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

                    <span class="h3 ms-2 align-middle">View student information</span>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 text-md-end text-muted">
                            <label>Student Number</label>
                        </div>

                        <div class="col-md-6">
                            <p>{{ $student->student_number }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 text-md-end text-muted">
                            <label>Full Name</label>
                        </div>

                        <div class="col-md-6">
                            <p>{{ $student->full_name }}</p>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4 text-md-end text-muted">
                            <label>College</label>
                        </div>

                        <div class="col-md-6">
                            <p>{{ $student->program->college->name }} ({{ $student->program->college->acronym }})</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 text-md-end text-muted">
                            <label>Program</label>
                        </div>

                        <div class="col-md-6">
                            <p>{{ $student->program->name }} ({{ $student->program->acronym }})</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 text-md-end text-muted">
                            <label>Date Enrolled</label>
                        </div>

                        <div class="col-md-6">
                            <p>{{ $student->date_enrolled }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 text-md-end text-muted">
                            <label>Courses Enrolled</label>
                        </div>

                        <div class="col-md-6">
                            @if($student->courses->count() > 0)
                                <ul class="ps-4">
                                    @foreach($student->courses as $course)
                                        <li>{{ $course->name }} - {{ $course->code }}</li>
                                    @endforeach
                                </ul>
                            @else
                                <p>No courses enrolled</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
