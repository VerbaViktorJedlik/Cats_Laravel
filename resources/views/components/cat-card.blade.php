@props(['cat'])

{{-- <div class="card h-80">
    <div class="card-body d-flex flex-column">
        <img src="{{ $cat->image_url }}" alt="{{ $cat->name }}" class="img-fluid mb-2" style="object-fit: cover; height: 200px; width: 100%;">
        <h5 class="card-title">{{ $cat->name }}</h5>
      
        {{-- <div class="mt-auto d-flex gap-2">
            <a href="{{ route('cats.edit', $cat->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('cats.destroy', $cat->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div> --}}
{{-- </div>
</div> --}}




<div class="card" style="width: 18rem;">
    <img src="{{ $cat->image_url }}" alt="{{ $cat->name }}" class="card-img-top">

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

    </div>
</div>
