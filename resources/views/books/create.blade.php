<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    
</head>
<body>
    <div>
        <form action="{{url('books')}}" method="post">

            @csrf
            <div>
                <div class="container my-5">
                    <div class="d-flex justify-content-end">
                        <a href="{{url('books')}}" class="btn btn-primary">Book List</a>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mx-auto d-grid gap-2">
                            <div class="form-group mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" id="title" name="title" class="form-control " value="{{ old('title') }}">
                                @error('title')
                                    <div>{{ $message}}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="author" class="form-label">Author</label>
                                <input type="text" id="author" name="author" class="form-control" value="{{ old('author') }}">
                                @error('author')
                                    <div>{{ $message}}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="description" class="form-label">Description</label>
                                <input type="text" id="description" name="description" class="form-control" value="{{ old('description') }}">
                                @error('description')
                                    <div>{{ $message}}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="isbn" class="form-label">ISBN</label>
                                <input type="text" id="isbn" name="isbn" class="form-control" value="{{ old('isbn') }}">
                                @error('isbn')
                                    <div>{{ $message}}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="published_year" class="form-label">Published Year</label>
                                <input type="date" id="published_year" name="published_year" class="form-control" value="{{ old('published_year') }}">
                                @error('published_year')
                                    <div>{{ $message}}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <button class="btn btn-primary">Save Changes</button>
                            </div>
                            @if(session('success'))
                                <div>{{ session('success') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>