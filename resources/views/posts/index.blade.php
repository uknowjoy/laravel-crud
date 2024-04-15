<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Posts</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom Styles */
        body {
            background-color: #f8fafc; /* Set the background color */
            font-family: 'Nunito', sans-serif; /* Set the font family */
            font-size: 0.9rem; /* Set the base font size */
            line-height: 1.6; /* Set the base line height */
        }

        .container {
            max-width: 800px; /* Limit container width */
        }

        .table {
            background-color: #fff; /* Set background color of the table */
        }

        .table th,
        .table td {
            vertical-align: middle; /* Align table cells vertically center */
        }

        .btn {
            font-size: 0.8rem; /* Reduce button font size */
        }

        .btn-primary {
            background-color: #007bff; /* Change primary button color */
            border-color: #007bff; /* Change primary button border color */
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Change primary button hover color */
            border-color: #0056b3; /* Change primary button border hover color */
        }
    </style>
</head>

<body>
<div class="container py-4">
    <h1 class="text-center text-dark font-weight-bold mb-4">All Posts</h1>

    @if (session('success'))
        <div class="alert alert-success mb-4" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-4">Create Post</a>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>

                        <a href="{{ route('posts.show', $post) }}" class="btn btn-primary btn-sm">View</a>
                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $posts->links() }}
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
