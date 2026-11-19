<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
</head>
<body>
    <h1>Courses</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <a href="/courses/create">Create Course</a>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</td>
                <th>Name</td>
                <th>Description</th>
                <th>Duration</th>
                <th>Fee</th>
                <th>Difficulty</th>
                <th>Is_Active?</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @forelse($courses as $course)
                <tr>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->name }}</td>
                    <td>{{ $course->description }}</td>
                    <td>{{ $course->duration }}</td>
                    <td>{{ $course->fee }}</td>
                    <td>{{ $course->difficulty}}</td>
                    <td>{{ $course->is_active }}</td>
                    <td>
                        <a href="/courses/{{ $course->id }}">View</a>

                        <a href="/courses/{{ $course->id }}/edit">Edit</a>

                        <form action="/courses/{{ $course->id }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')

                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>

                @empty
                <tr>
                    <td colspan="8">
                        No Courses Found.
                    </td>
                </tr>
                @endforelse
        </tbody>
    </table>

</body>
</html>