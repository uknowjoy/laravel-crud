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

<div class="container mt-4">
    <h1 class="text-center mb-4">Create Post</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST" class="bg-white p-4 rounded-lg shadow-sm">
        @csrf

        <div class="form-group">
            <label for="title" class="font-weight-bold">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="content" class="font-weight-bold">Content</label>
            <textarea name="content" id="content" class="form-control" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>

</body>
</html>

