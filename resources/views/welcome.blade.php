@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">Report</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Student #</th>
                                <th scope="col">Name</th>
                                <th scope="col">College</th>
                                <th scope="col">Program</th>
                                <th scope="col">Course Code</th>
                                <th scope="col">Course Name</th>
                                <th scope="col">Date Enrolled</th>
                            </tr>
                        </thead>

                        <tbody>
                            @if($students->count() > 0)
                                @foreach($students as $student)
                                    @foreach($student->courses as $course)
                                        <tr class="student-row">
                                            <th scope="row">{{ $course->id }}</th>
                                            <td>{{ $student->student_number }}</td>
                                            <td>{{ $student->reverse_name }}</td>
                                            <td>{{ $student->program->college->acronym }}</td>
                                            <td>{{ $student->program->acronym }}</td>
                                            <td>{{ $course->code }}</td>
                                            <td>{{ $course->name }}</td>
                                            <td>{{ $student->date_enrolled }}</td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="8" class="text-center text-muted">No data found</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
