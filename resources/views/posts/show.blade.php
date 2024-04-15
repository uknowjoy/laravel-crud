<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom Styles */
        body {
            background-color: #f8fafc; /* Set the background color */
            font-family: 'Nunito', sans-serif; /* Set the font family */
            font-size: 0.9rem; /* Set the base font size */
            line-height: 1.6; /* Set the base line height */
            margin-top: 50px; /* Add margin to the top */
        }

        .container {
            max-width: 600px; /* Limit container width */
        }

        h1 {
            color: #333; /* Set title color */
            margin-bottom: 20px; /* Add margin below title */
        }

        p {
            color: #666; /* Set content text color */
            margin-bottom: 20px; /* Add margin below content */
        }

        .btn {
            font-size: 0.8rem; /* Reduce button font size */
        }

        .btn-secondary {
            background-color: #6c757d; /* Set secondary button background color */
            border-color: #6c757d; /* Set secondary button border color */
        }

        .btn-danger {
            background-color: #dc3545; /* Set danger button background color */
            border-color: #dc3545; /* Set danger button border color */
        }

        .btn-primary {
            background-color: #007bff; /* Set primary button background color */
            border-color: #007bff; /* Set primary button border color */
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h1>{{ $post->title }}</h1>

    <p>{{ $post->content }}</p>

    <a href="{{ route('posts.edit', $post) }}" class="btn btn-secondary mr-2">Edit</a>

    <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
    </form>

    <a href="{{ route('posts.index') }}" class="btn btn-primary">Back to all posts</a>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
