<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Course</title>
</head>
<body>
    <h1>Create Course</h1>
    <form action="/courses" method="POST">
        @csrf

        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
        </div>

        <br>

        <div>
            <label for="description">Description</label>
            <input type="text" id="description" name="description" value="{{ old('description') }}">
        </div>

        <br>

        <div>
            <label for="duration">Duration</label>
            <input type="number" id="duration" name="duration" value="{{ old('duration') }}"> 
        </div>

        <br>

        <div>
            <label for="fee">Fee</label>
            <input type="number" id="fee" name="fee" step="0.01" value="{{ old('fee') }}">
        </div>

        <br>

        <div>
            <label for="difficulty">Difficulty</label>
            <select id="difficulty" name="difficulty">
                <option value="EASY" {{ old('difficulty') == 'EASY' ? 'selected' : ''}}>Easy</option>
                <option value="MEDIUM" {{ old('difficulty') == 'MEDIUM' ? 'selected' : ''}}>Medium</option>
                <option value="HARD" {{ old('difficulty') == 'HARD' ? 'selected' : ''}}>Hard</option>
            </select>
        </div>

        <br>

        <div>
            <label for="is_active">Is Active?</label>
            <label><input type="radio" name="is_active" value="1" {{ old('is_active') == '1' ? 'checked' : ''}}>Yes</label>
            <label><input type="radio" name="is_active" value="0" {{ old('is_active') == '0' ? 'checked' : ''}}>No</label>      
        </div>

        <br>

        <button type="submit">Create Course</button>

        @if($errors->any())
            <div>
                <h3>Please fix the following errors:</h3>

                <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif

    </form>

    <a href="/courses/">Back to Courses</a>

</body>
</html>