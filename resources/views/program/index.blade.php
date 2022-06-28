@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('layouts.actions')

        <div class="col">
            <div class="card">
                <div class="card-header">List of Programs</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Abbrev.</th>
                                <th scope="col">College</th>
                            </tr>
                        </thead>

                        <tbody>
                            @if($programs->count() > 0)
                                @foreach($programs as $program)
                                    <tr class="student-row">
                                        <th scope="row">{{ $program->id }}</th>
                                        <td>{{ $program->name }}</td>
                                        <td>{{ $program->acronym }}</td>
                                        <td>{{ $program->college->name }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="4" class="text-center text-muted">No data found</td>
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
