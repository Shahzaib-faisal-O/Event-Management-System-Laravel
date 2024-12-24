<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<h1>Event Management System </h1>

<form method="GET">
    <input type="text" name="location" placeholder="Location">
    <input type="date" name="date">
    <input type="text" name="category" placeholder="Category">
    <button type="submit">Filter</button>
</form>

<a href="/create"><button>Create Event </button></a>

@foreach($events as $event)
    <div>
        <h2>{{ $event->title }}</h2>
        <p>{{ $event->description }}</p>
        <p>{{ $event->date }}</p>
        <p>{{ $event->location }}</p>
        <div>
            @foreach($event->images as $image)
                <img src="{{ asset('storage/' . $image->image_path) }}" alt="Event Image">
            @endforeach
        </div>
    </div>
@endforeach

