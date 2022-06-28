@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('layouts.actions')

        <div class="col">
            <div class="card">
                <div class="card-header">List of Colleges</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Abbrev.</th>
                            </tr>
                        </thead>

                        <tbody>
                            @if($colleges->count() > 0)
                                @foreach($colleges as $college)
                                    <tr class="student-row">
                                        <th scope="row">{{ $college->id }}</th>
                                        <td>{{ $college->name }}</td>
                                        <td>{{ $college->acronym }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" class="text-center text-muted">No data found</td>
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
