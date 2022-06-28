@extends('layouts.app')

@section('content')
<style>
    .actions {
        visibility: hidden;
    }

    .student-row:hover .actions {
        visibility: visible;
    }
</style>

<div class="modal fade" id="confirmationDeleteModal" tabindex="-1" aria-labelledby="confirmationDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmationDeleteModalLabel">Confirmation Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">Are you sure you want to delete this student's information?</div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

                <form method="POST" id="delete-form" action="/student/">
                    @csrf
                    @method('delete')
            
                    <button type="submit" class="btn btn-primary" onclick="this.disabled = true; this.form.submit();">Confirm</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        @include('layouts.actions')

        <div class="col">
            <div class="card">
                <div class="card-header">List of Students</div>

                <div class="card-body">
                    @if (session('student-added'))
                        <div class="alert alert-success" role="alert">
                            {{ session('student-added') }}
                        </div>
                    @endif

                    @if (session('student-updated'))
                        <div class="alert alert-primary" role="alert">
                            {{ session('student-updated') }}
                        </div>
                    @endif

                    @if (session('student-deleted'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('student-deleted') }}
                        </div>
                    @endif

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Student #</th>
                                <th scope="col">Name</th>
                                <th scope="col">College</th>
                                <th scope="col">Program</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>

                        <tbody>
                            @if($students->count() > 0)
                                @foreach($students as $student)
                                    <tr class="student-row">
                                        <th scope="row">{{ $student->id }}</th>
                                        <td>{{ $student->student_number }}</td>
                                        <td><a href="{{ route('student-show', ['student' => $student->id]) }}">{{ $student->reverse_name }}</a></td>
                                        <td>{{ $student->program->college->acronym }}</td>
                                        <td>{{ $student->program->name }}</td>
                                        <td style="padding-bottom: 0;">
                                            <div class="actions">
                                                <a style="text-decoration: none;" href="{{ route('student-edit', ['student' => $student->id]) }}">
                                                    <span class="material-icons text-primary cursor-pointer">edit</span>
                                                </a>

                                                <a href="#" style="text-decoration: none;" data-bs-toggle="modal" onclick="updateDeleteFormAction({{ $student->id }})" data-bs-target="#confirmationDeleteModal">
                                                    <span class="material-icons text-danger cursor-pointer">delete</span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6" class="text-center text-muted">No data found</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function updateDeleteFormAction (id) {
        $('#delete-form').attr('action', '/student/' + id);
    }
</script>

@endsection
