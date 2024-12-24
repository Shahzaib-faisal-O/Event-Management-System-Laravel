<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="title" placeholder="Title">
    <textarea name="description" placeholder="Description"></textarea>
    <input type="date" name="date">
    <input type="text" name="location" placeholder="Location">
    <input type="text" name="category" placeholder="Category">
    <input type="file" name="images[]" multiple>
    <button type="submit">Create Event</button>
</form>
