<x-layout>
    <h1 class="text-center">Cat details</h1>
    <div class="row">
        <div class="col-md-4">
            <img src="{{$cat->image_url}}" style="height: 20vw" class="rounded float-end" alt="">
        </div>
        <div class="col-md-4">
            <h2>{{$cat->name}}</h2>
            <p><strong>Breed:</strong> {{$cat->breed}}</p>
            <p><strong>Age:</strong> {{$cat->age}}</p>
            <p><strong>Owner Name:</strong> {{$cat->ownerName}}</p>
            <p><strong>Owner Email:</strong> {{$cat->ownerEmail}}</p>
            <p><strong>Vaccinated:</strong> {{$cat->vaccinated ? 'Yes' : 'No'}}</p>
        </div>
    </div>
    <div class="d-flex gap-2 mt-4">
        <a href="{{ route('cats.edit', $cat->id) }}" class="btn btn-primary">Edit cat</a>
        <form action="{{ route('cats.destroy', $cat->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete cat</button>
        </form>
        <a href="{{ route('cats.index') }}" class="btn btn-secondary">Back to cats</a>
    </div>
</x-layout>