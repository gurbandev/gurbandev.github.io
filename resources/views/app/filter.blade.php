<form action="{{ url()->current() }}" method="get">
    <div class="mb-3">
        <label for="classroom" class="form-label">Classroom</label>
        <select class="form-select" name="classroom_id" id="classroom">
            <option value selected>-</option>
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}" {{ $classroom->id == $classroom_id ? 'selected':'' }}>
                    {{ $classroom->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="course" class="form-label">Course</label>
        <select class="form-select" name="course_id" id="course">
            <option value selected>-</option>
            @foreach($courses as $course)
                <option value="{{ $course->id }}" {{ $course->id == $course_id ? 'selected':'' }}>
                    {{ $course->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="student" class="form-label">Student</label>
        <select class="form-select" name="student_id" id="student">
            <option value selected>-</option>
            @foreach($students as $student)
                <option value="{{ $student->id }}" {{ $student->id == $student_id ? 'selected':'' }}>
                    {{ $student->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="teacher" class="form-label">Teacher</label>
        <select class="form-select" name="teacher_id" id="teacher">
            <option value selected>-</option>
            @foreach($teachers as $teacher)
                <option value="{{ $teacher->id }}" {{ $teacher->id == $teacher_id ? 'selected':'' }}>
                    {{ $teacher->name }}
                </option>
            @endforeach
        </select>
    </div>

        <div class="mb-3 col-12">
            <input type="number" placeholder="Min price" class="w-100 text-center">
        </div>

        <div class="mb-3 col-12">
            <input type="number" placeholder="Max price" class="w-100 text-center">
        </div>


    <div class="row g-2">
        <div class="col">
            <button type="submit" class="btn btn-dark w-100">Filter</button>
        </div>
        <div class="col-auto">
            <a href="{{ url()->current() }}" class="btn btn-light w-100">Clear</a>
        </div>
    </div>
</form>