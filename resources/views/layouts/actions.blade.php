<div class="col-md-3">
    <div class="card">
        <div class="card-header">Actions</div>

        <div class="card-body">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="btn btn-success btn-lg w-100" href="{{ route('student-create') }}">Enroll a student</a>
                </li>

                <hr>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Students</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('college-index') }}">Colleges</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('program-index') }}">Programs</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('course-index') }}">Courses</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('report') }}">Report</a>
                </li>
            </ul>
        </div>
    </div>
</div>