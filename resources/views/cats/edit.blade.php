<x-layout>
    <h1 class="text-center">Edit cat</h1>

    <form action="{{ route('cats.update', $cat->id) }}" method="POST" class="mt-4 ">
        @csrf
        @method('PUT')
        
        
            <img src="{{$cat->image_url}}" class="col-md-4 rounded float-end" alt="">
       
        
        <div class="mb-3 col-md-4 ">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $cat->name }}" required>
        </div>

        <div class="mb-3 col-md-4">
            <label for="breed" class="form-label">Breed</label>
            <input type="text" class="form-control" id="breed" name="breed" value="{{ $cat->breed }}">
        </div>

        <div class="mb-3 col-md-4">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" id="age" name="age" value="{{ $cat->age }}">
        </div>

        <div class="mb-3 col-md-4">
            <label for="ownerName" class="form-label">Owner Name</label>
            <input type="text" class="form-control" id="ownerName" name="ownerName" value="{{ $cat->ownerName }}">
        </div>

        <div class="mb-3 col-md-4">
            <label for="ownerEmail" class="form-label">Owner email</label>
            <input type="email" class="form-control" id="ownerEmail" name="ownerEmail" value="{{ $cat->ownerEmail }}">
        </div>

        <div class="mb-3 col-md-4">
            <label for="image_url" class="form-label">Image URL</label>
            <input type="url" class="form-control" id="image_url" name="image_url" value="{{ $cat->image_url }}">
        </div>



        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary">Update cat</button>
            <a href="{{ route('cats.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</x-layout>
