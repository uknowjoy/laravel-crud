<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>

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

        .form-control {
            font-size: inherit; /* Inherit font size from body */
            line-height: inherit; /* Inherit line height from body */
        }

        .alert {
            margin-bottom: 1rem; /* Add margin below alerts */
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="text-center">Edit Post</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}" required>
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" class="form-control" rows="4" required>{{ $post->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Update</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
