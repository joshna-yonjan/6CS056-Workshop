<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Course</title>
</head>
<body>
    <h1>Edit Course</h1>

    @if($errors->any())
        <div>
            <h3>Please fix the following errors:</h3>

            <ul>
                @foreach($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/courses/{{ $course->id }}" method="POST">

        @csrf
        @method('PUT')

        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name', $course->name) }}">
        </div>

        <br>

        <div>
            <label for="description">Description</label>
            <input type="text" id="description" name="description" value="{{ old('description', $course->description )}}">
        </div>

        <br>

        <div>
            <label for="duration">Duration</label>
            <input type="number" id="duration" name="duration" value="{{ old('duration', $course->duration )}}">
        </div>

        <br>

        <div>
            <label for="fee">Fee</label>
            <input type="number" id="fee" name="fee" value="{{ old('fee', $course->fee )}}">
        </div>

        <br>

        <div>
            <label for="difficulty">Difficulty</label>
            <select id="difficulty" name="difficulty">
                <option value="EASY" {{ old('difficulty', $course->difficulty->value) == 'EASY' ? 'selected': ''}}>Easy</option>
                <option value="MEDIUM" {{ old('difficulty', $course->difficulty->value) == 'MEDIUM' ? 'selected': ''}}>Medium</option>
                <option value="HARD" {{ old('difficulty', $course->difficulty->value) == 'HARD' ? 'selected': ''}}>Hard</option>
            </select>
        </div>

        <br>

        <div>
            <label for="is_active">Is Active?</label>
            <label><input type="radio" name="is_active" value="1" {{ old('is_active', $course->is_active ? '1' : '0') == '1' ? 'checked' : ''}}>Yes</label>
            <label><input type="radio" name="is_active" value="0" {{ old('is_active', $course->is_active ? '1' : '0') == '0' ? 'checked' : ''}}>No</label>      
        </div>

        <br>

        <button type="submit">Update Course</button>

    </form>

    <br>

    <a href="/courses">Back to Courses</a>
</body>
</html>