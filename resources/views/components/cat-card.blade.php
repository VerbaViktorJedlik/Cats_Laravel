@props(['cat'])

<div class="card" style="width: 18rem; margin: 10px;">
    <a href="{{ route('cats.show', $cat->id) }}" style="text-decoration: none; color: black;">
    <img src="{{ $cat->image_url }}" alt="{{ $cat->name }}" class="card-img-top" style="max-height: 200px; object-fit: cover;">
    <div class="card-body">
        <h5 class="card-title">{{ $cat->name }}</h5>
        <p class="card-text">{{ $cat->breed }}, {{ $cat->age }} years old, {{ $cat->ownerName }}, <span
            style="font-weight: bold">{{ $cat->ownerEmail }}</span></p>
        <div class="mt-auto d-flex gap-2">
            <a href="{{ route('cats.edit', $cat->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('cats.destroy', $cat->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </a>

    </div>
</div>
